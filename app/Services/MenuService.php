<?php

namespace App\Services;

use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\MenuCategory;
use App\Models\Category;
use App\Exceptions\ServiceException;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;

class MenuService
{
    public function create()
    {
        $menu = new Menu();
        $menu->name = 'Menu mới';
        $menu->created_by = Auth::id();
        $menu->save();
        return $menu;
    }

    public function update($params)
    {
        $menu = Menu::with('categories')->findOrFail($params['menu_id']);
        if ($menu->created_by !== Auth::id()) {
            throw new ServiceException('Ban không thể update menu này');
        }
        DB::beginTransaction();
        try {
            $menu->name = $params['name'];
            $menu->additional_information = $params['additional_information'] ?? null;
            $menu->image_url = $params['image_url'] ?? null;
            $menu->save();

            $categories = $params['categories'];
            foreach ($categories as $category) {
                Category::findOrFail($category);
            }
            $menu->categories()->sync($categories);

            $menuUpdateIds = [];
            foreach ($params['menu_items'] as $menuItem) {
                $items = [
                    'name' => $menuItem['name'], 
                    'category' => $menuItem['category'], 
                    'image_url' => $menuItem['image_url'] ?? null, 
                    'price' => $menuItem['price'], 
                    'additional_information' => $menuItem['additional_information'] ?? null, 
                ];
                $itemId = $menuItem['id'] ?? null;
                if ($itemId) {
                    $menuItemUpdate = MenuItem::findOrFail($itemId);
                    if ($menuItemUpdate->menu_id == $params['menu_id']) {
                        $menuItemUpdate->update($items);
                        array_push($menuUpdateIds, $itemId);
                    } else {
                        throw new ServiceException('Không update được menu item này');
                    }
                } else {
                    $menuItemCreate = $menu->menuItems()->create($items);
                    array_push($menuUpdateIds, $menuItemCreate->id);
                }
            }
            MenuItem::whereNotIn('id', $menuUpdateIds)->where('menu_id', $params['menu_id'])->delete();
            DB::commit();
            return $menu;
        } catch (ServiceException $e) {
            DB::rollBack();
            throw $e;
        } catch (Exception $e) {
            DB::rollBack();
            throw new ServiceException('Update menu không thành công');
        }
    }

    public function getDetail($menuId)
    {
        $menu = Menu::with('menuItems', 'categories')->findOrFail($menuId);
        $menu['created_by_username'] = User::findOrFail($menu->created_by)->value('name');

        return $menu;
    }

    public function search($name, $categories)
    {
        $menuQuery = Menu::with(['categories']);

        if ($name) {
            $menuQuery->where('name', 'LIKE', '%' . $name . '%');
        }

        if ($categories && count($categories)) {
            $menuQuery->whereHas('menuCategories', function ($query) use ($categories) {
                $query->whereIn('category_id', $categories);
            });
        }

        $menus = $menuQuery->paginate();

        return $menus;
    }
}
