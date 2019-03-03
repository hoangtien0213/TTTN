<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Model\ProductsModel;

class ProductsController extends Controller
{
    public function getProducts(){
        $data['productlist']=ProductsModel::all();
        return view('admin.products.list',$data);
    }
    public function requestProductAdd(){
        $dsTheLoai = Category::all();
        return view('admin.products.add', ['dsTheLoai' => $dsTheLoai]);
    }
    public function requestProductEdit(){
        $dsTheLoai = Category::all();
        return view('admin.products.edit', ['dsTheLoai' => $dsTheLoai]);
    }
    public function ProductDetails(){
        return view('admin.product_details.list');
    }
    public function ProductDetailsEdit(){
        return view('admin.product_details.edit');
    }
    public function ProductDetailsAdd(){
        return view('admin.product_details.add');
    }
    public  function ProductImages()
    {
        return view('admin.product_images.list');
    }
    public  function ProductImagesEdit()
    {
        return view('admin.product_images.edit');
    }
    public  function ProductImagesAdd()
    {
        return view('admin.product_images.add');
    }
    public function destroy($id)
    {
        $product_type=ProductsModel::findOrFail($id);
        $product_type->delete();
        return back()->with('message','Bạn đã xóa thành công');
    }
}
