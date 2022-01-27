<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserContrller extends Controller
{
    public function index(){
        $user = User::all();
        return view('admin.user.index',compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edituser',compact('user'));
    }
}
