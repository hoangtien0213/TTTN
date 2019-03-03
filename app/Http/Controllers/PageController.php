<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
class PageController extends BaseController
{
    public function getHome(){
return view('pages.index');
    }
    public function getLaptops(){
        return view('pages.laptops');
    }
    public function getPhone(){
        return view('pages.phones');
    }
    public function getPhuKien(){
        return view('pages.phukien');
    }
    public function getCamera(){
        return view('pages.cameras');
    }
    public function getStore(){
        return view('pages.store');
    }
    public function getCheckout(){
        return view('pages.Checkout');
    }
    public function getProduct(){
        return view('pages.product');
    }
}
