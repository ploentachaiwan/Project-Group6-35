<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Typeproduct;
use Illuminate\Http\Request;

class TypeproductContrller extends Controller
{
    public function index(){
        $type_products = Typeproduct::all();
        return view('admin.typeproduct.index', compact('type_products'));
    }

    public function create(){
        return view('admin.typeproduct.addtypeproduct');
    }

    public function store(Request $request){
        $typeproduct = new Typeproduct;
        $typeproduct->name = $request->name;
        $typeproduct->save();
        return redirect()->route('typeproduct.index');
    }

    public function edit($id){
        $type_product = Typeproduct::find($id);
        return view('admin.typeproduct.form_edit_typeproduct', compact('type_product'));
    }

    public function update(Request $request, $id){
        $type_product = Typeproduct::find($id);
        $type_product->name = $request->type_product_name;
        $type_product->save();
        return redirect()->route('typeproduct.index');
    }

    public function destroy($id)
    {
        Typeproduct::find($id)->delete();
        return redirect()->route('typeproduct.index');
    }
    
   
}
