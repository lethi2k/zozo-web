<?php

namespace App\Services;

use App\Exceptions\ServiceException;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Ecommerce\Categories\Category;
use App\Models\Ecommerce\Categories\Description;

class CategoryService
{

    function getList($filter = array(), $paginate)
    {
        if(isset($filter['code'])){
            return $this->getByCateId($filter['code'], $paginate);
        }

        return Category::paginate($paginate);
    }

    function getByCateId($id, $paginate){
        return Category::where('category_id', $id)->paginate($paginate);
    }

    function detail($id)
    {
        return Category::findOrFail($id);
    }

    function search($params)
    {
        return Category::leftJoin(
            'oc_category_description',
            'oc_category_description.category_id',
            '=',
            'oc_category.category_id'
        )
            ->where('oc_category_description.name', 'LIKE', '%' . $params['name'] . '%')
            ->limit(Category::LIMIT_AJAX)->get();
    }

    function getParent($id)
    {
        return Category::where('category_id', '<>', $id)
            ->limit(Category::LIMIT_AJAX)->get();
    }

    function store($params)
    {
        if (isset($params['category'])) {
            $params['category']['image'] = $_FILES['category']['name']['image'];
            $params['category']['status'] =  $params['category']['status'] == 'on' ? 1 : 0;
            Category::insert($params['category']);
            $category_id = DB::getPdo()->lastInsertId();
        }

        if (isset($params['category_description'])) {
            $params['category_description']['category_id'] = $category_id;
            $params['category_description']['language_id'] = 1;
            Description::insert($params['category_description']);
        }

        return $category_id;
    }

    function update($params, $id)
    {
        if (isset($params['category'])) {
            $params['category']['image'] = $_FILES['category']['name']['image'];
            $params['category']['status'] =  $params['category']['status'] == 'on' ? 1 : 0;
            $category = Category::findOrFail($id);
            $category = $category->update($params['category']);
        }

        if (isset($params['category_description'])) {
            $params['category_description']['language_id'] = 1;
            $category_description = Description::where(
                [
                    'category_id' => $id,
                    'language_id' => $params['category_description']['language_id']
                ]
            )->first();
            $category_description->update($params['category_description']);
        }

        return $id;
    }

    function destroy($id)
    {
        Category::find($id)->delete();
        Description::find($id)->delete();
        return 'xoá thành công';
    }
}
