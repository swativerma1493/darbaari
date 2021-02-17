<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['category','name','subcategory','product','price','hsn','sgst','igst','cgst'];
    public function category_name()
    {
    	return $this->belongsTo(ProductCategory::class,'category');
    }
    public function subcategory_name()
    {
    	return $this->belongsTo(ProductSubcategory::class,'subcategory');
    }

}
