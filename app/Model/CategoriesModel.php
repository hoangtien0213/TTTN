<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CategoriesModel extends Model
{
    protected $table ="categories";
    protected $primaryKey ="id";
    protected $fillable=['title','slug','parent_id'];
    public function product(){
        return $this->hasMany('App\Model\ProductsModel');
    }
}
