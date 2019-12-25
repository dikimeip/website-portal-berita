@extends('template.master')
@section('isi')
<h1 class="text-center" >DETAIL BERITA</h1>
<br>
<p><b>JUDUL BERITA</b></p>
<P>{{$data->judul}}</P>
<p><b>AUTHOR BERITA</b></p>
<P>{{$data->author}}</P>
<p><b>TANGGAL BERITA</b></p>
<P>{{$data->tanggal}}</P>
<p><b>ISI BERITA</b></p>
<P>{{$data->isi}}</P>
<p><b>BERITA POPULER</b></p>
<P>{{$data->top_news}}</P>
<p><b>STATUS BERITA</b></p>
<P>{{$data->status}}</P>
<p><b>KATEGORI BERITA</b></p>
<P>{{$data->kategori->nama}}</P>
<p><b>FOTO BERITA</b></p>
<P><img style="width: 100px" src="{{asset('foto/'.$data->foto)}}"></P>
@endsection