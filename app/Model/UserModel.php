<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table ="users";
    protected $primaryKey ="id";
    protected $fillable=['email','name','password','level','telephone','address'];
}
