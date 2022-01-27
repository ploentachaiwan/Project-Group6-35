<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddadminController extends Controller
{
    public function addadmin()
    {
        return view('admin.admin.addadmin');
    }
}
