<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BeritaModel;
use App\KategoriModel;
use Session;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BeritaModel::all();
        return view('admin.berita',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=KategoriModel::all();
        return view('admin.tambah_berita',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('foto');
        $org = $file->getClientOriginalName();
        $path = 'foto';
        $file->move($path,$org);

        $BeritaModel = new BeritaModel;
        $BeritaModel->kategori_id = $request->kategori;
        $BeritaModel->judul = $request->judul;
        $BeritaModel->author = $request->author;
        $BeritaModel->tanggal = date('Y-m-d');
        $BeritaModel->isi = $request->isi;
        $BeritaModel->foto = $org;
        $BeritaModel->top_news = 'aktif';
        $BeritaModel->status = 'aktif' ;
        $BeritaModel->save();
        if ($BeritaModel) {
            Session::flash('success','Success Tambah Data');
            return redirect()->route('user.berita');
        } else {
            Session::flash('success','Failed Tambah Data');
            return redirect()->route('user.berita');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = BeritaModel::find($id);
        return view('admin.show_berita',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = KategoriModel::all();
        $berita = BeritaModel::find($id);
        return view('admin.edit_berita',compact('data','berita'));
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
        $foto = $request->file('foto');
        if ($foto == "") {
            $BeritaModel = BeritaModel::find($id);
            $BeritaModel->kategori_id = $request->kategori;
            $BeritaModel->judul = $request->judul;
            $BeritaModel->author = $request->author;
            $BeritaModel->isi = $request->isi;
            $BeritaModel->top_news =  $request->news;
            $BeritaModel->status =  $request->status;
            $BeritaModel->save();

           if ($BeritaModel) {
                Session::flash('success','Success Ubah Data');
                return redirect()->route('user.berita');
            } else {
                Session::flash('success','Failed Ubah Data');
                return redirect()->route('user.berita');
            }
        } else {
           
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
