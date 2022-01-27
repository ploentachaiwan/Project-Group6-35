<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Typeproduct;
use Illuminate\Http\Request;

class AddTypeproductController extends Controller
{
    public function addtypeproduct(){
        return view('admin.typeproduct.addtypeproduct');
    }

    public function create(Request $request)
    {
        // dd($request);
        $typeproduct = new Typeproduct;
        $typeproduct->name = $request->name;
        $typeproduct->save();
        return redirect()->route('admin.typeproduct.addtypeproduct');
       

    }
}
