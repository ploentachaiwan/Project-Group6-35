<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Homepage;


class HomepageContrller extends Controller
{
    public function index()
    {
        $homepage = Homepage::all();
        return view('admin.homepage.index', compact('homepage'));
    }
    public function addhomepage()
    {

        return view('admin.homepage.addhomepage');
    }

    public function create(Request $request)
    {
        // วิธีการเพิ่มรูปลง storage
        $image_name = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();

        $request->file('image')->storeAs('public/homepage', $image_name);

        $path = '/storage/homepage/' . $image_name;
        // จบวิธีการเพิ่มรูปลง storage

        $homepage = new Homepage;
        $homepage->test = $request->test;
        $homepage->popular = $request->popular;
        $homepage->name = $request->name;
        $homepage->image = $path;
        $homepage->price = $request->price;
        $homepage->save();
        return redirect()->route('homepage.index');
    }
    public function edit($id)
    {
        $homepage = Homepage::find($id);
        return view('admin.homepage.edithomepage', compact('homepage'));
    }

    public function update(Request $request, $id)
    {

        $homepage = Homepage::find($id);
        $homepage->test = $request->test;
        $homepage->popular = $request->popular;
        $homepage->name = $request->name;

        $homepage->price = $request->price;

        if ($request->file('image')) {
            // วิธีการเพิ่มรูปลง storage
            $image_name = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();

            $request->file('image')->storeAs('public/homepage', $image_name);

            $path = '/storage/homepage/' . $image_name;
            // จบวิธีการเพิ่มรูปลง storage
            $homepage->image = $path;
        }
        $homepage->save();
        return redirect()->route('homepage.index');
    }

    public function del($id)
    {
        $homepage =  Homepage::find($id);
        $homepage->delete();
        return redirect()->route('homepage.index');
    }
}
