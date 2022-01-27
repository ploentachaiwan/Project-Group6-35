<?php

namespace App\Http\Controllers\Admin;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use Image;
use Illuminate\Support\Str;
use App\Typeproduct;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('admin.product.index',compact('product'));
    }
    public function store(Request $request){
        $product = new Product;
        $product->id = $request->id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->typeproduct_at = $request->typeproduct_at;
        $product->image = $request->image;
        $product->created_at = $request->created_at;
        $product->updated_at = $request->updated_at;
        $product->save();
        return redirect()->route(' product.index');
    }
    public function edit($id_product){
        $product = Product::find($id_product);
        $types = Typeproduct::all();
        return view('admin.product.editproduct', compact('product', 'types'));
    }

    public function update(Request $request, $id_product){
        $validateData = $request->validate(
            [
                'name' => 'required',
                'typeproduct_at' => 'required',
                'price' => 'required|numeric',
                'image' => 'mimes:jpeg,jpg,png,gif|file|max:12040',
            ],
            [
                'name.required' => 'กรุณาป้อนชื่อสินค้า',
                'typeproduct_at.required' => 'กรุณาป้อนรายละเอียดสินค้า',
                'price.required' => 'กรุณาป้อนราคาสินค้า',
                'price.numeric' => 'ป้อนได้เฉพาะตัวเลขเท่านั้น',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดขนาดไม่เกิน 10MB',

            ]
        );
       
        if ($request->hasFile('image')) {
            $product = Product::find($id_product);
            if ($product->image != 'NOPIC.jpg') {
                File::delete(public_path() . '/admin/images/' . $product->image);
            }
            $filemane = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/images/', $filemane);
            Image::make(public_path() . '/admin/images/' . $filemane);
            $product->image = $filemane;
            $product->name = $request->name;
            $product->price = $request->price;
            $product->typeproduct_at = $request->typeproduct_at;


        }else{
            $product = Product::find($id_product);
            $product->name = $request->name;
            $product->price = $request->price;
            $product->typeproduct_at = $request->typeproduct_at;

        }

        $product->save();
        return redirect()->route('product.index');
    }

    public function destroy($id_product)
    {
        $del = Product::find($id_product);
        $del->delete();
        return redirect()->route('product.index');
    }
}
