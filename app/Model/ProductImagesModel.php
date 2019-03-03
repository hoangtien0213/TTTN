<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductImagesModel extends Model
{
    protected $table ="product_images";
    protected $primaryKey ="id";
    protected $fillable=['title','alt','slug','product_id'];
}
