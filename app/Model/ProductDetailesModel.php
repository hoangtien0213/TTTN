<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductDetailesModel extends Model
{
    protected $table ="product_details";
    protected $primaryKey ="id";
    protected $fillable=['color','price','sale','product_id'];
    public function detailsType(){
        return $this->belongsTo('App\Model\ProductsModel','product_id','id');
    }

}
