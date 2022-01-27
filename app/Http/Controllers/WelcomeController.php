<?php

namespace App\Http\Controllers;

use App\Product;
use App\Typeproduct;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        $types = Typeproduct::all();
        $products = Product::when($request->type, function($query) use($request){
            return $query->where('typeproduct_at', $request->type);
        })->get();

        return view('welcome', compact('types','products'));
    }
}
