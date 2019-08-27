<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use App\Category;
use ProductSize;
use Session;

class ProductController extends Controller
{

    public function index()
    {
        // $products = Product::orderBy('created_at','desc')->paginate(10);
        $products=Product::all();
        return view('admin.products.index', ['products' => $products]);
    }

    public function detailProductId(Product $product)
    {
        $productDetail = $product->productDetail;
        // dd($productDetail);
        $images = $product->images;
        // dd($images);
        return view('admin.products.detail',compact('productDetail','images','product'));
   
    }
    public function edit($id){
        $categories = Category::where('parent_id', '!=', null)->pluck('name', 'id');
        $product    = Product::find($id);

        return view('admin.products.edit', compact('categories', 'product'));
    }

    public function create()
    {
        $categories = Category::where('parent_id', '!=', null)->pluck('name', 'id');
        return view('admin.products.create', compact('categories','faker'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token','_method');
        $product=Product::find($id);
        $product->update($data);
        Session::flash('success','Cập nhật thành công!');

        return redirect()->route('admin.products.index');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        
        Session::flash('success','Xóa thành công!');
        return redirect()->back();
    }
}
