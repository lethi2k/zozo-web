<?php

namespace App\Services;

use App\Models\Menu;

class SearchService 
{
    public function Search($name, $category) 
    {
        return Menu::with(['categories' => function ($q) use ($category) {
            $q->whereIn('category_id', $category);
        }])->where('name', 'LIKE', '%'.$name.'%')->paginate(5);
    }
}
