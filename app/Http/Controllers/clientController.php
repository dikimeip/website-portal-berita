<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BeritaModel;

class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semua = BeritaModel::orderBy('created_at','DESC')
                ->where('status','aktif')
                ->take(4)
                ->get();
        $ekonomi =  BeritaModel::orderBy('created_at','DESC')
                    ->where('kategori_id',4)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $olahraga =  BeritaModel::orderBy('created_at','DESC')
                    ->where('kategori_id',5)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $politik =  BeritaModel::orderBy('created_at','DESC')
                    ->where('kategori_id',6)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        $tekno =  BeritaModel::orderBy('created_at','DESC')
                    ->where('kategori_id',7)
                    ->where('status','aktif')
                    ->take(4)
                    ->get();
        return view('user.dasboard',compact('semua','ekonomi','olahraga','politik','tekno')) ;
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
        //
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
