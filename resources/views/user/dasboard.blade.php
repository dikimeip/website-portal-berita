@extends('template.user')
@section('isi')
<b class="label label-info"><b>BERITA TERBARU</b></b>
<hr>
<div class="row">
@foreach ($semua as $s)
	<div class="col-md-3">
		<a href="" style="color: black;text-decoration: none;">
			<div class="panel panel-default">
			  <div class="panel-body">
			  	<img style="width: 250px;height: 200px" class="img-rounded img-responsive" src="{{asset('foto/'.$s->foto)}}">
			  	<h4>{{$s->judul}}</h4>
			  	<p><b>{{$s->author}} {{$s->tanggal}} </b></p>
			  	<p>{{substr($s->isi,0,100)}}</p>
			  </div>
			</div>
		</a>
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
			@foreach($politik as $p)
			<div class="row">
				<a href="" style="color: black">
					<div class="col-md-3">
						<img style="width: 100px;height: 100px;margin: 25px" class="img-rounded img-responsive" src="{{asset('foto/'.$p->foto)}}">
					</div>
					<div class="col-md-9">
						<h4>{{$p->judul}}</h4>
						 <p><b>{{$p->author}} {{$p->tanggal}}</b></p>
						 <p>{{substr($p->isi,0,100)}}</p>
					</div>
				</a>
			</div>
			@endforeach
			<!-- tekonologi -->
			<br>
			<b class="label label-info"><b>TEKNOLOGI NEWS</b></b>
			<hr>
			@foreach($tekno as $tek)
			<div class="row">
				<a href="" style="color: black">
					<div class="col-md-3">
						<img style="width: 100px;height: 100px;margin: 25px" class="img-rounded img-responsive" src="{{asset('foto/'.$tek->foto)}}">
					</div>
					<div class="col-md-9">
						<h4>{{$tek->judul}}</h4>
						 <p><b>{{$tek->author}} {{$tek->tanggal}}</b></p>
						 <p>{{substr($tek->isi,0,100)}}</p>
					</div>
				</a>
			</div>
			@endforeach

		</div>
	</div>
	<div class="col-md-4">
		<!-- new news -->
		<b class="label label-info"><b>TOP NEWS</b></b>
		<hr>
		<div class="row">
		@foreach($tops as $tp)
			<a href="" style="color: black">
				<div class="col-md-6">
					<div class="panel panel-default">
					  <div class="panel-body">
					  	<img style="width: 100%;height: 100px" class="img-rounded img-responsive" src="{{asset('foto/'.$tp->foto)}}"><br>
					  	<p><b>{{substr($tp->judul,0,20)}}</b></p>
					  </div>
					</div>
				</div>
			</a>
			@endforeach
		</div>
		
	</div>
</div>
@endsection