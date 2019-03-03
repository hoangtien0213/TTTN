<?php

namespace App\Http\Controllers;

use App\Model\CategoriesModel;
use App\Http\Requests\AddProduct;
use Illuminate\Http\Request;
use App\Model\ProductsModel;

class ProductsController extends Controller
{
    public function getProducts(){
        $data['productlist']=ProductsModel::with('productType')->get();
        return view('admin.products.list',$data);

    }
    /**Them*/
    public function AddProduct(AddProduct $request)
    {
        $product = new ProductsModel;
        $product->title = $request->txtTenSp;
        $product->des=$request->txtMota;
        $product->quantity=$request->txtSoluong;
        $product->category_id=$request->category_id;

        // Create a url slug from name of product type

        $product->save();

        return redirect()->route('product/list')->with('add-success', 'Bạn đã thêm thành công');
    }
    public function requestProductAdd(){
        $dsTheLoai = CategoriesModel::all();
        return view('admin.products.add', ['dsTheLoai' => $dsTheLoai]);
    }
    public function requestProductEdit($id){
        $dsTheLoai = CategoriesModel::all();
        $product = ProductsModel::findOrFail($id);
        return view('admin.products.edit',['dsTheLoai' => $dsTheLoai])->with('productlist', $product);
    }
    public function update(AddProduct $request, $id)
    {
        $product = ProductsModel::findOrFail($id);
        $product->title = $request->txtTenSp;
        $product->des=$request->txtMota;
        $product->quantity=$request->txtSoluong;
        $product->category_id=$request->category_id;
        $product->save();
        return back()->withInput()->with('success','Sửa thành công!');
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
