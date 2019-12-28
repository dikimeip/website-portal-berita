<!DOCTYPE html>
<html>
<head>
	<title>DC NEWS</title>
	 <link href=" {{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="all">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">DC NEWS</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">HOME</a></li>
      <li><a href="#">EKONOMI</a></li>
      <li class="dropdown">
      	<a href="#" data-toggle="dropdown" class="dropdown-toggle">
      		OLAHRAGA <span class="caret"></span>
      	</a>
      	<ul class="dropdown-menu">
      		<li><a href="">SEPAK BOLA</a></li>
      		<li><a href="">BASKET</a></li>
      		<li><a href="">TENIS</a></li>
      		<li><a href="">VOLI</a></li>
      	</ul>
      </li>
      <li><a href="#">POLITIK</a></li>
      <li><a href="">TEKNOLOGI</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    	<li>
    		<form>
	    		<div class="form-group" style="padding-top: 10px">
	    			<input type="text" name="cari" placeholder="Masukan Nama Berita" class="form-control">
	    		</div>
	    	</form>
    	</li>
    	
    </ul>
  </div>
</nav>
<div class="container" style="margin-top: 80px">
	<b>BREAKING NEWS</b>
	<hr>
	<div class="row">
		<div class="col-md-3">
			<div class="panel panel-default">
			  <div class="panel-body">
			  	<img style="width: 250px;height: 200px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}">
			  </div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="panel panel-default">
			  <div class="panel-body">
			  	<img style="width: 250px;height: 200px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}">
			  </div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="panel panel-default">
			  <div class="panel-body">
			  	<img style="width: 250px;height: 200px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}">
			  </div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="panel panel-default">
			  <div class="panel-body">
			  	<img style="width: 250px;height: 200px" class="img-rounded img-responsive" src="{{asset('foto/admin.png')}}">
			  </div>
			</div>
		</div>
	</div>
</div>

<script src="{{asset('vendor/jquery-3.2.1.min.js')}} "></script>
 <script src="{{asset('vendor/bootstrap-4.1/popper.min.js')}} "></script>
 <script src="{{asset('vendor/bootstrap-4.1/bootstrap.min.js')}} "></script>
</body>
</html>