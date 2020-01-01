@extends('template.user')
@section('isi')
<div class="row">
	<div class="col-md-8">
		<b class="label label-info"><b>EKONOMI NEWS</b></b>
		<hr>
		<div class="panel">
			<div class="panel">
				<!-- ekonomi -->
					<br>
					<div class="row">
						<a href="" style="color:black">
							<div class="col-md-3">
								<img style="width: 100px;height: 100px;margin: 25px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}">
							</div>
							<div class="col-md-9">
								<h4>ok</h4>
							  	<p><b>212121 ok </b></p>
							  	<p>loren	</p>
							</div>
						</a>
					</div>
			</div>	
		</div>
	</div>
	<div class="col-md-4">
		<!-- new news -->
		<b class="label label-info"><b>TOP NEWS</b></b>
		<hr>
		<div class="row">
			<a href="" style="color: black">
				<div class="col-md-6">
					<div class="panel panel-default">
					  <div class="panel-body">
					  	<img style="width: 100%;height: 100px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}"><br>
					  	<p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</b></p>
					  </div>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>
@endsection