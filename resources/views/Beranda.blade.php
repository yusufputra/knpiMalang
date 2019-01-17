<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KNPI – Kota Malang</title>
	<link rel="shortcut icon" href="knpi-logo-ok.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="{{asset('/css/Beranda.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
</head>

<body>
@include('head')
	<div class="my-5"></div>
	<div id="jumbotron-slide" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#jumbotron-slide" data-slide-to="0" class="active"></li>
			<li data-target="#jumbotron-slide" data-slide-to="1"></li>
			<li data-target="#jumbotron-slide" data-slide-to="2"></li>
</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="ace-1807511_1280.jpg" alt="" width="1100" height="500">
				<div class="carousel-caption" id="cc1">
					<h3>Categories</h3>
					<br>
					<p>Some Caption Text</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="barack-obama-1174489_960_720.jpg" alt="" width="1100" height="500">
				<div class="carousel-caption" id="cc2">
					<h3>Categories</h3>
					<br>
					<p>Some Caption Text</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="horse-1413604_1280-717x401.jpg" alt="" width="1100" height="500">
				<div class="carousel-caption" id="cc3">
					<h3 class="h3">Categories</h3>
					<br>
					<p>Some Caption Text</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#jumbotron-slide" data-slide="prev"> <span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#jumbotron-slide" data-slide="next"> <span class="carousel-control-next-icon"></span>
		</a>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<h4>Featured News</h4>
			</div>
			</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="featured-news">
					<a href=""><img src="pagatan_beach-wallpaper-2560x2048.jpg" alt="" id="fn-1"></a>
					<div class="carousel-caption" id="capt1">
				Some Caption Here
				</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="featured-news">
					<a href=""><img src="football-461340_1280.jpg" alt="" id="fn-2"></a>
					<div class="carousel-caption" id="capt2">
				Some Caption Here
				</div>
				</div>
		  </div>
			<div class="col-sm-4">
				<div class="featured-news">
					<a href=""><img src="football-801047_1280.jpg" alt="" id="fn-3" class="img-fluid"></a>
					<div class="carousel-caption" id="capt3">
				Some Caption Here
				</div>
				</div>
		  </div>
		</div>
	</div>
  <div class="container-fluid" id="welcome-text">
		<p>Selamat Datang di Situs Resmi KNPI Kota Malang</p>
  </div>
	<section class="main-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h4 id="berita">BERITA TERBARU</h4>
					<div class="row">
						<div class="col-sm-12">
							<div class="news-box">
								<a href=""><img src="pexels-photo-39811.jpeg" alt=""></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="widget-area">
						<aside id="kategori-text">
							<h4>KATEGORI</h4>
						</aside>
					</div>
				</div>
			</div>
		</div>
</section>
@include('footer')
</body>

</html>