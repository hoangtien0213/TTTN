<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    protected $table ="products";
    protected $primaryKey ="id";
    protected $fillable=['title','des','quantity','category_id'];

    public function productType(){
        return $this->belongsTo('App\Model\CategoriesModel','category_id','id');
    }

    public function productImages(){
        return $this->hasMany('App\Model\ProductImagesModel');
    }

    public function productDetails(){
        return $this->hasMany('App\Model\ProductDetailsModel');
    }
}
