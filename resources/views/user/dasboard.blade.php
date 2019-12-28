<!DOCTYPE html>
<html>
<head>
	<title>DC NEWS</title>
	 <link href=" {{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="all">
</head>
<body>

<!-- <nav class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<div class="navbar-brand">
				<b>DC NEWS</b>
			</div>
		</div>
		<ul class="nav navbar-nav">
			<li>HOME</li>
			<li>EKONOMI</li>
			<li>OLAHRAGA</li>
			<li>POLITIK</li>
			<li>TEKNOLOGI</li>
		</ul>
	</div>
</nav> -->
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
    <script src="{{asset('vendor/jquery-3.2.1.min.js')}} "></script>

 <script src="{{asset('vendor/bootstrap-4.1/popper.min.js')}} "></script>
 <script src="{{asset('vendor/bootstrap-4.1/bootstrap.min.js')}} "></script>
</body>
</html>