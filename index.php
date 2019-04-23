<!DOCTYPE html>
<html>
<head>
	<title>Shop game</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/formdangnhap.css">
	<script type="text/javascript" src="javascript/js.js"></script>
</head>
<body>
	
	<div class = "jumbotron jumbotron-fluid text-center header"><!--header-->
		<div class="row">
			<div class = "col-sm-4 col-md-4 col-lg-4 logo">
				<img src="img/logo.jpg" class="img-responsive center-block">
			</div>
			<div class = "col-sm-4 col-md-4 col-lg-4 timkiemnhanh">
				<form class="navbar-form navbar-center" action="###">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Tìm kiếm..." name="search">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit">
								<i class="glyphicon glyphicon-search"></i>
							</button>
						</div>
					</div>
				</form>
			</div>
			<div class = "col-sm-4 col-md-4 col-lg-4 ">
				<ul class="nav navbar-nav navbar-center">
					<li><a href="?id=dangki"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="?id=dangnhap"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</div>
	</div> <!--end header-->
	
	<nav class="navbar navbar-inverse">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <!-- Thu các thẻ li vào 1 button -->
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav ">
				<li><a href="?id=home">Home</a></li>
				<li><a href="#">Thể loại</a></li>
				<li><a href="#">Steam</a></li>
				<li><a href="#">Origin</a></li>
				<li><a href="#">PUBG</a></li>
				<li><a href="#">Steam Wallet</a></li>
				<li><a href="#">Đại lý mua trực tiếp</a></li>
				<li><a href="#">Thông tin</a></li>
			</ul>	
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 left">
				<li><img src="img/anh1.PNG" class="img-responsive center-block" alt="anh1"></li>
				<li><img src="img/anh2.PNG" class="img-responsive center-block" alt="anh2"></li>
				<li><img src="img/anh3.PNG" class="img-responsive center-block" alt="anh3"></li>
				<li><img src="img/anh4.PNG" class="img-responsive center-block" alt="anh4"></li>
			</div>
			<div class="col-sm-9 right">
				<div class="col-sm-12"><!--Slideshow-->
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<img src="img/slideshow/anh1.jpg" alt="Anh1">
							</div>
							<div class="item">
								<img src="img/slideshow/anh2.jpg" alt="Anh2">
							</div>
							<div class="item">
								<img src="img/slideshow/anh3.jpg" alt="Anh3">
							</div>
						</div>
						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Next</span>
						</a>
					</div> <!--end slideshow-->
					<nav class="navbar navbar-inverse">					
						<ul class="nav navbar-nav menu">
							<li><a href="?id=noibat">Nổi bật</a></li>
							<li><a href="#">Bán chạy</a></li>
							<li><a href="#">Origin</a></li>
							<li><a href="#">Battle.net</a></li>
							<li><a href="#">Khuyến mãi</a></li>
						</ul>	
					</nav>
					<?php 
					if(isset($_GET['id'])) {
						if($_GET['id']=='dangnhap')include 'dangnhap.php';
						if($_GET['id']=='dangki') include'dangkitaikhoan.php';
						if($_GET['id']=='noibat') include'noibat.php';
					}
					?>
				</div>
			</div>
		</div>
		<div class = "jumbotron jumbotron-fluid footer"> <!--footer-->
			<div class="row"> 
				<div class="col-sm-4 col-md-4 col-lg-4 text-center">
					<h3>Thông tin</h3>
					Giới thiệu về Divine Shop<br>
					Game bản quyền là gì?<br>
					Chính sách bảo mật<br>
					Điều khoản dịch vụ
				</div> 
				<div class="col-sm-4 col-md-4 col-lg-4 text-center">
					<h3>Chăm sóc khách hàng</h3>
					Liên hệ<br>
					Sơ đồ trang<br>
					Chế độ bảo hành
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4 text-center ">
					<h3>Ủng hộ chúng tôi</h3>
					<i class='fab fa-twitter'   style="font-size: 40px;color:#1c1cbc"></i>
					<i class='fab fa-facebook'  style="font-size: 40px;color:#1c1cbc"></i>
					<i class='fab fa-instagram' style="font-size: 40px;color:#d82fd3"></i>
					<i class='fab fa-youtube'   style="font-size: 40px;color:#f90025"></i>
				</div> 
			</div> 
		</div> <!--end footer-->
	</body>
	</html>