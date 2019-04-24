<?php
include 'KetNoiDB/access.php';
function getData(){
    $result = sanPhamNoiBat();
    while ($row = mysqli_fetch_array($result)) {
        echo "<div class='responsive'>
        <div class='gallery'>
        <div>
        <img class='img' src=".$row["hinhanh"].">
        <div class='title'>".$row["TenSP"]."</div>
        <div class='price'>".$row["DonGia"]."</div>
        <div class='amount'>"."Số lượng : ".$row["SoLuong"]."</div>
        <button class='btn btn-success'>Thêm vào giỏ</button>
        </div>
        </div>
        </div>";
    }
}
?>
