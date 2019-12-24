@extends('template.master')
@section('isi')
<h1 class="text-center">TAMBAH BERTIA</h1>
<br>
<form>
	<div class="form-group">
		<label>MASUKAN JUDUL BERITA</label>
		<input type="text" name="judul" class="form-control">
	</div>
	<div class="form-group">
		<label>MASUKAN AUTHOR BERITA</label>
		<input type="text" name="author" class="form-control">
	</div>
	<div class="form-group">
		<label>MASUKAN ISI BERITA</label>
		<textarea class="texteditor"></textarea>
	</div>
	<div class="form-group">
		<label>MASUKAN KATEGORI</label>
		<select name="kategori" class="form-control">
			@foreach($data as $d)
			<option value="{{$d->id}}">{{$d->nama}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>MASUKAN FOTO</label>
		<input type="file" name="foto" class="form-control">
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>
@endsection