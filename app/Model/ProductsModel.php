<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    protected $table ="products";
    protected $primaryKey ="id";
    protected $fillable=['title','des','quantity','category_id'];
}
