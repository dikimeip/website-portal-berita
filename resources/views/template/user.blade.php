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
      <a class="navbar-brand" href="{{route('user.show')}}">DC NEWS</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{route('user.show')}}">HOME</a></li>
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
    		 <form class="form-inline" style="margin-top: 5px">
			    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			  </form>
    	</li>
    	
    </ul>
  </div>
</nav>

<div class="container" style="margin-top: 80px">
	@yield('isi')
</div>

<nav class="navbar navbar-inverse navbar-button" style="margin-bottom: 0px;margin-top: 50px;color: white">
	<div class="container">
		<div class="row" style="margin-top: 40px;margin-bottom: 40px">
			<div class="col-md-4">
				<p class="text-center"><b>ABOUT DC NEWS</b></p>
				<p>{{$about->tentang}}</p>
			</div>
			<div class="col-md-4">
				<p class="text-center"><b>KONTAK DC NEWS</b></p>
				<ul>
					<li>Whatsapp : {{$about->kontak}}</li>
					<li>Phone : {{$about->kontak}}</li>
					<li>Email : {{$about->email}}</li>
					<li>Alamat : {{$about->alamat}}</li>
				</ul>
			</div>
			<div class="col-md-4">
				<p class="text-center"><b>KATEGORI DC NEWS</b></p>
				<ul>
					<li>EKONOMI</li>
					<li>OLAHRAGA</li>
					<li>POLITIK</li>
					<li>TEKNOLOGI</li>
				</ul>
			</div>
		</div>
		<p class="text-center"><b>CREATED DC IT CORP </b></p>
	</div> 
</nav>
<script src="{{asset('vendor/jquery-3.2.1.min.js')}} "></script>
 <script src="{{asset('vendor/bootstrap-4.1/popper.min.js')}} "></script>
 <script src="{{asset('vendor/bootstrap-4.1/bootstrap.min.js')}} "></script>
</body>
</html>