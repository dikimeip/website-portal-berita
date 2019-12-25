@extends('template.master')
@section('isi')
<h1 class="text-center">EDIT BERITA</h1>
<br>
<form action="{{route('user.edit_berita',$berita->id)}}" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	<div class="form-group">
		<label>MASUKAN JUDUL BERITA</label>
		<input type="text" name="judul" class="form-control" required="" value="{{$berita->judul}}" >
	</div>
	<div class="form-group">
		<label>MASUKAN AUTHOR BERITA</label>
		<input type="text" name="author" class="form-control" required="" value="{{$berita->author}}" >
	</div>
	<div class="form-group">
		<label>MASUKAN ISI BERITA</label>
		<textarea class="form-control" name="isi" required="">{{$berita->isi}}</textarea>
	</div>
	<div class="form-group">
		<label>MASUKAN KATEGORI</label>
		<select name="kategori" class="form-control">
			<option value="{{$berita->kategori->id}}">{{$berita->kategori->nama}}</option>
			@foreach($data as $d)
			<option value="{{$d->id}}">{{$d->nama}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>MASUKAN FOTO</label>
		<img src="{{asset('foto/'.$berita->foto)}}">
		<input type="file" name="foto" class="form-control">
	</div>
	<div class="form-group">
		<label>TOP NEWS</label>
		<select name="news" class="form-control">
			<option>{{$berita->top_news}}</option>
			<option>aktif</option>
			<option>tidak aktif</option>
		</select>
	</div>
	<div class="form-group">
		<label>STATUS</label>
		<select name="status" class="form-control">
			<option>{{$berita->status}}</option>
			<option>aktif</option>
			<option>tidak aktif</option>
		</select>
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>
@endsection