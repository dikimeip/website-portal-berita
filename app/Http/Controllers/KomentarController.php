<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KomentarModel;
use Session;

class KomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $komen = KomentarModel::orderBy('created_at','DESC') ->paginate(10);
        return view('admin.komentar',compact('komen')) ;
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
        $data = KomentarModel::find($id);
        return view('admin.edit_komen',compact('data')) ;
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
        $komen = KomentarModel::find($id);
        $komen->status = $request->status;
        $komen->save();
        if ($komen) {
            Session::flash('success','Update Finish');
            return redirect()->route('user.komen') ;
        } else {
            Session::flash('success','Update Failed');
            return redirect()->route('user.komen') ;
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
        $komen = KomentarModel::find($id);
        $komen->delete();
        if ($komen) {
            Session::flash('success','Hapus Finish');
            return redirect()->route('user.komen') ;
        } else {
            Session::flash('success','Hapus Failed');
            return redirect()->route('user.komen') ;
        }
    }
}
