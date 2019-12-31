@extends('template.master')
@section('isi')
<h1>EDIT KOMENTAR</h1>
<br>
<form action="{{route('user.do_editkomen',$data->id)}}" method="post">
	{{csrf_field()}}
	<div class="form-group">
		<textarea class="form-control" name="isi" readonly="">{{$data->keterangan}}</textarea>
	</div>
	<div class="form-group">
		<input type="text" name="nama" readonly="" value="{{$data->nama}}"  class="form-control">
	</div>
	<div class="form-group">
		<input type="email" name="email" readonly="" class="form-control" value="{{$data->email}}" >
	</div>
	<div class="form-group">
		<select class="form-control" name="status">
			<option>{{$data->status}}</option>
			<option>aktif</option>
			<option>non aktif</option>
		</select>
	</div>
	<input type="submit" value="KIRIM" class="btn btn-info">
</form>
@endsection