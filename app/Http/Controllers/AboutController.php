<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TentangModel;
use Session;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TentangModel::find(1);
        return view('admin.edit_about',compact('data')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $TentangModel = TentangModel::find($id);
        $TentangModel->tentang = $request->tentang;
        $TentangModel->kontak = $request->kontak;
        $TentangModel->alamat = $request->alamat;
        $TentangModel->email = $request->email;
        $TentangModel->save();
        if ($TentangModel) {
            Session::flash('success','Success Update Data');
            return redirect()->route('user') ;
        } else {
            Session::flash('success','Success Update Data');
            return redirect()->route('user') ;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
