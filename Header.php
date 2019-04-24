<?php
echo '<div class="container-fluid">
		<div class = "jumbotron jumbotron-fluid text-center header">
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
						<li><a href="?page=dangki"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						<li><a href="?page=dangnhap"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <!-- Thu các thẻ li vào 1 button -->
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="?page=home">Home</a></li>
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
	</div>'
?>

