<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrdersModel extends Model
{
    protected $table ="orders";
    protected $primaryKey ="id";
    protected $fillable=['order_date','slug','parent_id'];

}
