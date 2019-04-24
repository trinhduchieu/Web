<?php
include 'KetNoiDB/access.php';
function getData(){
    $result = getAllSanPham();
    while ($row = mysqli_fetch_array($result)) {
        echo "<div class='responsive'>
            <div class='gallery'>
                <div>
                    <img class='img' src=".$row["hinhanh"].">
                    <div class='title'>".$row["TenSP"]."</div>
                    <div class='price'>"."Giá : ".$row["DonGia"]."</div>
                    <div class='amount'>"."Số lượng : ".$row["SoLuong"]."</div>
                    <div><button type='button' class='btn btn-outline-success btnthemgio'>Thêm vào giỏ<i class='fa fa-shopping-cart'></i></button></div>
                </div>
            </div>
        </div>";
    }
}


include 'Header.php';
echo '<div class="container">
		<div class="row">
			<div class="col-sm-3 left">
				<li><img src="img/anh1.PNG" class="img-responsive center-block" alt="anh1"></li>
				<li><img src="img/anh2.PNG" class="img-responsive center-block" alt="anh2"></li>
				<li><img src="img/anh3.PNG" class="img-responsive center-block" alt="anh3"></li>
				<li><img src="img/anh4.PNG" class="img-responsive center-block" alt="anh4"></li>
			</div>
			<div class="col-sm-9 right">
				<!--Slideshow-->
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
						<li><a href="?page=noibat">Nổi bật</a></li>
						<li><a href="#">Bán chạy</a></li>
						<li><a href="#">Origin</a></li>
						<li><a href="#">Battle.net</a></li>
						<li><a href="#">Khuyến mãi</a></li>
					</ul>	
				</nav>';
if (isset($_GET["page"])) {
    $page = $_GET['page'];
    if ($page == "dangki")
        include "dangkitaikhoan.php";
    if ($page == "dangnhap")
    	include "dangnhap.php";
    else if ($page == "home") {
        getData();
    }
} else {
    getData();
}
echo '</div>
	</div>
</div>
<div class="container-fluid">
	<div class = "jumbotron jumbotron-fluid footer">
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
			<div class="col-sm-4 col-md-4 col-lg-4 text-center">
				<h3>Ủng hộ chúng tôi</h3>
				<i class="fab fa-twitter"   style="font-size: 40px;color:#1c1cbc"></i>
				<i class="fab fa-facebook"  style="font-size: 40px;color:#1c1cbc"></i>
				<i class="fab fa-instagram" style="font-size: 40px;color:#d82fd3"></i>
				<i class="fab fa-youtube"   style="font-size: 40px;color:#f90025"></i>
			</div> 
		</div> 
	</div> 
</div>';
?>