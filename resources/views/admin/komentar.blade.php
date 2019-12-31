@extends('template.master')
@section('isi')
<h1 class="text-center">KOMENTAR</h1>
<div class="row">
	<div class="col-md-8"></div>
	<div class="col-md-4">
		<form>
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="Masukan Nama User">
			</div>
		</form>
	</div>
</div>
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
			<a href="" onclick="return confirm('Hapus Komentar..??')" class="btn btn-danger btn-sm" >HAPUS</a>
		</td>
	</tr>
	@endforeach
</table>
{{$komen->links()}}
@endsection