@extends('template.master')
@section('isi')
<h1 class="text-center">BERITA</h1>
<br>
<div class="row">
	<div class="col-md-8">
		<a href="" class="btn btn-info">TAMBAH BERITA</a>
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
@endsection