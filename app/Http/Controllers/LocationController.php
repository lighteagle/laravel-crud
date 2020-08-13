<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(Type $var = null)
    {
        $data_location = \App\Location::all();

        return view('location.index',['data_location'=>$data_location]);
    }
    public function create(Request $request)
    {
        \App\Location::create($request->all());
        return redirect('/location')->with('sukses', 'Data berhasil di-input');
    }
}
