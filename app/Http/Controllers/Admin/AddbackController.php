<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddbackController extends Controller
{
    public function addback()
    {
        return view('admin.background.addback');
    }
}
