<?php

namespace App\Models\Ecommerce\Categories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    use HasFactory;

    protected $table = 'oc_category_to_layout';
    const CREATED_AT = 'date_added';
    const UPDATED_AT = 'date_modified';
}
