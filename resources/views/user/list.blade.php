@extends('template.user')
@section('isi')
<div class="row">
	<div class="col-md-8">
		<b class="label label-info"><b>LIST NEWS</b></b>
		<hr>
		<div class="panel">
			<div class="panel">
				<!-- ekonomi -->
				@foreach ($ekonomi as $e)
					<div class="row">
						<a href="{{route('user.show_news',$e->id)}}" style="color:black">
							<div class="col-md-3">
								<img style="width: 100px;height: 100px;margin: 25px" class="img-rounded img-responsive" src="{{asset('foto/'.$e->foto)}}">
							</div>
							<div class="col-md-9">
								<h4>{{$e->judul}}</h4>
							  	<p><b>{{$e->author}} {{$e->tanggal}} </b></p>
							  	<p>{{substr($e->isi,0,100)}}</p>
							</div>
						</a>
					</div>
				@endforeach
			</div>	
		</div>
	</div>
	<div class="col-md-4">
		<!-- new news -->
		<b class="label label-info"><b>TOP NEWS</b></b>
		<hr>
		<div class="row">
			@foreach($semua as $tp)
			<a href="{{route('user.show_news',$tp->id)}}" style="color: black">
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