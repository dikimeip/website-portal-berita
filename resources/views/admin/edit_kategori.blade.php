@extends('template.master')
@section('isi')
<h1 class="text-center">UBAH DATA</h1>
<br>
<form action="{{route('user.do_edit_kategori',$data->id)}}" method="post">
	{{csrf_field()}}
	<div class="form-group">
		<label>Masukan Nama Kategori</label>
		<input type="text" name="nama" class="form-control" required="" value="{{$data->nama}}">
	</div>
	<div class="form-group">
		<label>Masukan Keterangan Kategori</label>
		<textarea class="form-control" name="ket" required="" style="height: 150px">{{$data->keterangan}}</textarea>
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info btn-sm">
</form>
@endsection