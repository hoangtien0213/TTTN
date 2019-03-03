<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 3/2/2019
 * Time: 6:28 PM
 */

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use App\Model\CategoriesModel;


class CategoriesController
{
    public function getCategories(){
        $data['categorieslist']=CategoriesModel::all();
        return view('admin.categories.list',$data);
    }
    public function categoriesAdd(){
        return view('admin.categories.add');
    }
}