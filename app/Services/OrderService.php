<?php

namespace App\Services;

use App\Models\Menu;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderService
{
    public function create($params)
    {
        $order                         = new Order();
        $order->menu_id                = Menu::findOrFail($params['menu_id'])->id;
        $order->start_at               = $params['start_at'] ?? null;
        $order->end_at                 = $params['end_at'] ?? null;
        $order->status                 = 1;
        $order->additional_information = $params['additional_information'] ?? null;
        $order->created_by             = Auth::id();
        $order->is_allow_multi_item    = $params['is_allow_multi_item'];
        $order->save();
        return $order;
    }

    public function getAllOrder()
    {
        $menu = Order::with(
                'menu:id,name,image_url,created_by',
                'menu.categories',
                'menu.createdUser:id,name,email,avatar',
                'createdUser:id,name,email,avatar'
            )
            ->whereRaw('(now() >= start_at or start_at is null) and (now() <= end_at or end_at is null) ')
            ->get();
        return $menu;
    }
}
