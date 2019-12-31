@extends('template.master')
@section('isi')
<h1 class="text-center">KOMENTAR</h1>
<br><hr>
@if(Session::has('success'))
	<div class="alert alert-success">
		<p>{{Session::get('success')}}</p>
	</div>
@endif
<table class="table table-striped">
	<tr class="table-info">
		<th>NAMA</th>
		<th>EMAIL</th>
		<th>KOMENTAR</th>
		<th>STATUS</th>
		<th>TANGGAL</th>
		<th>AKSI</th>
	</tr>
	@foreach($komen as $k)
	<tr>
		<td>{{$k->nama}}</td>
		<td>{{$k->email}}</td>
		<td>{{$k->keterangan}}</td>
		<td>{{$k->status}}</td>
		<td>{{$k->tanggal}}</td>
		<td>
			<a href="{{route('user.edit_komen',$k->id)}}" class="btn btn-info btn-sm">EDIT</a>
			<a href="{{route('user.hapus_komen',$k->id)}}" onclick="return confirm('Hapus Komentar..??')" class="btn btn-danger btn-sm" >HAPUS</a>
		</td>
	</tr>
	@endforeach
</table>
{{$komen->links()}}
@endsection