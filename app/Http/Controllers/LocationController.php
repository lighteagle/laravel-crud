<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_location = \App\Location::where('name','LIKE','%'.$request->cari.'%')->get();
        } else {
            $data_location = \App\Location::all();
        }
        return view('location.index',['data_location'=>$data_location]);
    }
    public function create(Request $request)
    {
        \App\Location::create($request->all());
        return redirect('/location')->with('sukses', 'Data berhasil di-input');
    }
    public function edit($id)
    {
        $location = \App\Location::find($id);
        return view('location/edit',['location'=>$location]);
    }
    public function update(Request $request,$id)
    {
        $location = \App\Location::find($id);
        $location->update($request->all());
        return redirect('/location')->with('sukses','Data berhasil di-update');
    }
    public function delete($id)
    {
        $location = \App\Location::find($id);
        $location->delete($location);
        return redirect('/location')->with('sukses','Data berhasil di-delete');
    }

}
