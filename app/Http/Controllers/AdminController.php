<?php
/**
 * Created by PhpStorm.
 * User: khong
 * Date: 18/01/2019
 * Time: 9:26 SA
 */

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
class AdminController extends BaseController
{
    public function Admin(){
        return view('admin.dashboard');
    }
    public function Setting(){
        return view('admin.settings.list');
    }
    public function productList(){
        return view('admin.products.list');
    }
    public function productAdd(){
        return view('admin.products.add');
    }
    public function userAdd(){
        return view('admin.users.add');
    }
    public function userList(){
        return view('admin.users.list');
    }
    public function userEdit(){
        return view('admin.users.edit');
    }
    public function login(){
        return view('admin.Login.login');
    }
    public function register(){
        return view('admin.Login.register');
    }

    public function categoriesList(){
        return view('admin.categories.list');
    }
}