@extends('template.master')
@section('isi')
<h1 class="text-center">Kategori</h1>
<br>
<div class="row">
	<div class="col-md-8">
		<button class="btn btn-info">TAMBAH</button>
	</div>
	<div class="col-md-4">
		<form>
			<div class="form-group">
				<input type="text" name="cari" class="form-control">
			</div>
		</form>
	</div>
</div>
<br>
<table class="table table-striped  table-success">
	<tr class="table-info">
		<th>NO</th>
		<th>NAMA</th>
		<th>KELAS</th>
	</tr>
	<tr>
		<td>1</td>
		<td>ANDI</td>
		<td>3A</td>
	</tr>
</table>
@endsection