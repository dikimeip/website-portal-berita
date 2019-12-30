@extends('template.master')
@section('isi')
<h1 class="text-center">ABOUT</h1>
<form action="{{route('user.edit_about',$data->id)}}" method="post" >
	{{csrf_field()}}
	<div class="form-group">
		<label>TENTANG DC NEWS</label>
		<textarea class="form-control" name="tentang" required="">{{$data->tentang}}</textarea>
	</div>
	<div class="form-group">
		<label>KONTAK DC NEWS</label>
		<input type="text" name="kontak" class="form-control" required="" value="{{$data->kontak}}" >
	</div>
	<div class="form-group">
		<label>ALAMAT DC NEWS</label>
		<input type="text" name="alamat" class="form-control" required="" value="{{$data->alamat}}" >
	</div>
	<div class="form-group">
		<label>EMAIL DC NEWS</label>
		<input type="text" name="email" class="form-control" required="" value="{{$data->email}}" >
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>
@endsection