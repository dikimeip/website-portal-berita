@extends('template.master')
@section('isi')
<h1 class="text-center">BERITA</h1>
<br>
<div class="row">
	<div class="col-md-8">
		<a href="{{route('user.tambahberita')}}" class="btn btn-info">TAMBAH BERITA</a>
	</div>
	<div class="col-md-4">
		<form action="" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="Masukan Judul Berita">
			</div>
		</form>
	</div>
</div>
@if(Session::has('success'))
	<div class="alert alert-success">
		<p>{{Session::get('success')}}</p>
	</div>
@endif
<br>

<table class="table table-striped">
	<tr class="table-info">
		<th>JUDUL</th>
		<th>AUTHOR</th>
		<th>KATEGORI</th>
		<th>TANGGAL</th>
		<th>AKSI</th>
	</tr>
	@foreach($data as $d)
	<tr>
		<td>{{$d->judul}}</td>
		<td>{{$d->author}}</td>
		<td>{{$d->kategori->nama}}</td>
		<td>{{$d->tanggal}}</td>
		<td>
			<a href="{{route('user.detail_berita',$d->id)}}" class="btn btn-info btn-sm">DETAIL</a>
			<a href="" class="btn btn-warning btn-sm">HAPUS</a>
			<a href="" class="btn btn-success btn-sm">EDIT</a>
		</td>
	</tr>
	@endforeach
</table>

@endsection
