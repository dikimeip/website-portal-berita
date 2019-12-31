@extends('template.user')
@section('isi')
<h1><b>{{$news->judul}}</b></h1>
<p>Penulias : <b>{{$news->author}}</b> ,{{$news->tanggal}}</p>
<hr>
<div class="row">
	<div class="col-md-8">
		<img style="width: 600px;height: 300px" src="{{asset('foto/'.$news->foto)}}">
		<p style="margin-top: 40px;">{{$news->isi}}</p>
		<br><hr>
		<p><b>LEAVE A REPLAY</b></p>
		<form>
			<div class="form-group">
				<textarea class="form-control" name="isi" placeholder="Masukan Komentar"></textarea>
			</div>
			<div class="form-group">
				<input type="text" name="nama" class="form-control" placeholder="Masukan Username">
			</div>
			<div class="form-group">
				<input type="email" name="email" class="form-control" placeholder="Masukan Email">
			</div>
			<input type="submit" value="KIRIM" class="btn btn-info">
		</form>
	</div>
	<div class="col-md-4">
		<b class="label label-info"><b>BERITA TERBARU</b></b>
		<hr>
		@foreach($semua as $a)
		<a href="" style="text-decoration: none;color: black">
			<p><b>{{$a->judul}}</b></p>
			<p>{{$a->tanggal}}</p>
			<br>
		</a>
		@endforeach
	</div>
</div>

@endsection