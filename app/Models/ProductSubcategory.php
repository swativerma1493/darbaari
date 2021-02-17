<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSubcategory extends Model
{
    use HasFactory;
    protected $fillable = ['category','name'];
     public function category_name()
    {
    	return $this->belongsTo(ProductCategory::class,'category');
    }
}
