<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ProductsModel;
use App\Model\ProductDetailesModel;

class ProductDetailsController extends Controller
{
    public function ProductDetails($id){
        $product = ProductsModel::findOrFail($id);
        $product_details = ProductDetailesModel::where('product_id','=',$product->id)->get();
        return view('admin.product_details.list')->with(['product'=> $product,'detailsList'=>$product_details]);
    }
    public function ProductDetailsEdit(){
        return view('admin.product_details.edit');
    }
    public function ProductDetailsAdd($id){
        return view('admin.product_details.add')->with('id',$id);
    }
    public function AddDetails(AddDetails $request)
    {
        $details = new ProductDetailesModel();
        $details->color = $request->txtMau;
        $details->price=$request->txtGia;
        $details->sale=$request->txtGiamGia;
        $details->product_id=$request->product_id;

        // Create a url slug from name of product type

        $details->save();

        return redirect()->route('product/details/{id}')->with('add-success', 'Bạn đã thêm thành công');
    }
}
