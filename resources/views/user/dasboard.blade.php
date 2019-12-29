@extends('template.user')
@section('isi')
<b class="label label-info"><b>BREAKING NEWS</b></b>
<hr>
<div class="row">
@foreach ($semua as $s)
	<div class="col-md-3">
		<div class="panel panel-default">
			<a href="" style="color: black">
			  <div class="panel-body">
			  	<img style="width: 250px;height: 200px" class="img-rounded img-responsive" src="{{asset('foto/'.$s->foto)}}">
			  	<h4>{{$s->judul}}</h4>
			  	<p><b>{{$s->author}} {{$s->tanggal}} </b></p>
			  	<p>{{substr($s->isi,0,100)}}</p>
			  </div>
			</a>
		</div>
	</div>
@endforeach
</div>
<div class="row">
	<div class="col-md-8">
		<b class="label label-info"><b>EKONOMI NEWS</b></b>
		<hr>
		<div class="panel">
			<div class="panel">
				<!-- ekonomi -->
					<br>
				@foreach ($ekonomi as $e)
					<div class="row">
						<a href="" style="color:black">
							<div class="col-md-3">
								<img style="width: 100px;height: 100px;margin: 25px" class="img-rounded img-responsive" src="{{asset('foto/'.$e->foto)}}">
							</div>
							<div class="col-md-9">
								<h4>{{$e->judul}}</h4>
							  	<p><b>{{$e->author}} {{$e->tanggal}} </b></p>
							  	<p>{{substr($s->isi,0,100)}}</p>
							</div>
						</a>
					</div>
				@endforeach
			</div>
			<!-- olahraga -->
			<br>
			<b class="label label-info"><b>OLAHRAGA NEWS</b></b>
			<hr>
			@foreach($olahraga as $o)
				<div class="row">
					<a href="" style="color: black">
						<div class="col-md-3">
							<img style="width: 100px;height: 100px;margin: 25px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}">
						</div>
						<div class="col-md-9">
							<h4>{{$o->judul}}</h4>
						  	<p><b>{{$o->author}} {{$o->tanggal}}</b></p>
						  	<p>{{substr($o->isi,0,100)}}</p>
						</div>
					</a>
				</div>
			@endforeach
			<!-- politik -->
			<br>
			<b class="label label-info"><b>POLITIK NEWS</b></b>
			<hr>
			<div class="row">
				<div class="col-md-3">
					<img style="width: 100px;height: 100px;margin: 25px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}">
				</div>
				<div class="col-md-9">
					<h4>judul berita</h4>
				  	<p><b>ADMIN 12-06-2019</b></p>
				  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  	tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<img style="width: 100px;height: 100px;margin: 25px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}">
				</div>
				<div class="col-md-9">
					<h4>judul berita</h4>
				  	<p><b>ADMIN 12-06-2019</b></p>
				  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  	tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<img style="width: 100px;height: 100px;margin: 25px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}">
				</div>
				<div class="col-md-9">
					<h4>judul berita</h4>
				  	<p><b>ADMIN 12-06-2019</b></p>
				  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  	tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<img style="width: 100px;height: 100px;margin: 25px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}">
				</div>
				<div class="col-md-9">
					<h4>judul berita</h4>
				  	<p><b>ADMIN 12-06-2019</b></p>
				  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  	tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<!-- tekonologi -->
			<br>
			<b class="label label-info"><b>TEKNOLOGI NEWS</b></b>
			<hr>
			<div class="row">
				<div class="col-md-3">
					<img style="width: 100px;height: 100px;margin: 25px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}">
				</div>
				<div class="col-md-9">
					<h4>judul berita</h4>
				  	<p><b>ADMIN 12-06-2019</b></p>
				  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  	tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<img style="width: 100px;height: 100px;margin: 25px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}">
				</div>
				<div class="col-md-9">
					<h4>judul berita</h4>
				  	<p><b>ADMIN 12-06-2019</b></p>
				  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  	tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<img style="width: 100px;height: 100px;margin: 25px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}">
				</div>
				<div class="col-md-9">
					<h4>judul berita</h4>
				  	<p><b>ADMIN 12-06-2019</b></p>
				  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  	tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<img style="width: 100px;height: 100px;margin: 25px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}">
				</div>
				<div class="col-md-9">
					<h4>judul berita</h4>
				  	<p><b>ADMIN 12-06-2019</b></p>
				  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  	tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>

		</div>
	</div>
	<div class="col-md-4">
		<!-- new news -->
		<b class="label label-info"><b>NEW NEWS</b></b>
		<hr>
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
				  <div class="panel-body">
				  	<img style="width: 100%;height: 100px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}"><br>
				  	<p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit</b></p>
				  </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
				  <div class="panel-body">
				  	<img style="width: 100%;height: 100px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}"><br>
				  	<p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit</b></p>
				  </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
				  <div class="panel-body">
				  	<img style="width: 100%;height: 100px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}"><br>
				  	<p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit</b></p>
				  </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
				  <div class="panel-body">
				  	<img style="width: 100%;height: 100px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}"><br>
				  	<p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit</b></p>
				  </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
				  <div class="panel-body">
				  	<img style="width: 100%;height: 100px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}"><br>
				  	<p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit</b></p>
				  </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
				  <div class="panel-body">
				  	<img style="width: 100%;height: 100px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}"><br>
				  	<p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit</b></p>
				  </div>
				</div>
			</div>
		</div>
		<!-- top news -->
		<br>
		<b class="label label-info"><a href=""><b>TOP NEWS</b></a></b>
		<hr>
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
				  <div class="panel-body">
				  	<img style="width: 100%;height: 100px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}"><br>
				  	<p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit</b></p>
				  </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
				  <div class="panel-body">
				  	<img style="width: 100%;height: 100px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}"><br>
				  	<p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit</b></p>
				  </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
				  <div class="panel-body">
				  	<img style="width: 100%;height: 100px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}"><br>
				  	<p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit</b></p>
				  </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
				  <div class="panel-body">
				  	<img style="width: 100%;height: 100px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}"><br>
				  	<p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit</b></p>
				  </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
				  <div class="panel-body">
				  	<img style="width: 100%;height: 100px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}"><br>
				  	<p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit</b></p>
				  </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
				  <div class="panel-body">
				  	<img style="width: 100%;height: 100px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}"><br>
				  	<p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit</b></p>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection