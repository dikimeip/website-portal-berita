@extends('template.user')
@section('isi')
<h1><b>{{$news->judul}}</b></h1>
<p>Penulias : <b>{{$news->author}}</b> ,{{$news->tanggal}}</p>
<hr>
<div class="row">
	<div class="col-md-8">
		<img style="width: 600px;height: 300px" src="{{asset('foto/'.$news->foto)}}">
		<p style="margin-top: 40px;">{{$news->isi}}</p>
	</div>
</div>

@endsection