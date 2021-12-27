<?php

namespace App\Models\Ecommerce\Categories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'oc_category';
    protected $primaryKey = 'category_id';
    protected $fillable = ['parent_id', 'image', 'sort_order', 'status']; //use :create, :update no use :insert
    
    public $timestamps = true;
    const CREATED_AT = 'date_added';
    const UPDATED_AT = 'date_modified';
    const LIMIT_AJAX = 100;

    public function description(){
        return $this->belongsTo(Description::class, 'category_id', 'category_id');
    }

    public function filter(){
        return $this->belongsTo(Filter::class, 'category_id', 'category_id');
    }

    public function layout(){
        return $this->belongsTo(Layout::class, 'category_id', 'category_id');
    }

    public function path(){
        return $this->belongsTo(Path::class, 'category_id', 'category_id');
    }

    public function related(){
        return $this->belongsTo(Related::class, 'category_id', 'category_id');
    }

    public function store(){
        return $this->belongsTo(Store::class, 'category_id', 'category_id');
    }
}
