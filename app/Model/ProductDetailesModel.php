<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductDetailesModel extends Model
{
    protected $table ="product_details";
    protected $primaryKey ="id";
    protected $fillable=['color','price','sale','product_id'];

}
