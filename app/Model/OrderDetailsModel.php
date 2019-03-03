<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderDetailsModel extends Model
{
    protected $table ="order_details";
    protected $primaryKey ="id";
    protected $fillable=['quantity','total_cost','order_id','product_detail_id'];

}
