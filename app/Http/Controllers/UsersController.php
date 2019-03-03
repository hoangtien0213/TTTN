<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\UserModel;

class UsersController extends Controller
{
    public function getUser(){
        $data['userlist']=UserModel::all();
        return view('admin.users.list',$data);
    }
}
