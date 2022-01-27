<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Typeproduct;
use Image;
use Illuminate\Support\Str;

class AddProductController extends Controller
{
    public function addproduct(){
        $types = Typeproduct::all();
        return view('admin.product.addproduct', compact('types'));
    }

    public function create(Request $request)
    {
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
        $product = new product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->typeproduct_at = $request->typeproduct_at;

        if ($request->hasFile('image')) {
            $filemane = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/images/', $filemane);
            Image::make(public_path() . '/admin/images/' . $filemane);
            $product->image = $filemane;
        } else {
            $product->image = 'NOPIC.jpg';
        }

        $product->save();
        return redirect()->route('product.index');
       

    }
}
