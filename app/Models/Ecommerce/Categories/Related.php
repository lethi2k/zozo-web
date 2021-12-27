<?php

namespace App\Models\Ecommerce\Categories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Related extends Model
{
    use HasFactory;

    protected $table = 'oc_category_related';
    const CREATED_AT = 'date_added';
    const UPDATED_AT = 'date_modified';
    public $timestamps = false;
}
