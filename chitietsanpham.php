<?php
include 'KetNoiDB/access.php';
function getCTSP(){
    $result = getChiTietSanPham();
    while ($row = mysqli_fetch_array($result)) {
        echo "<div class='chitietsp'>
            <div class='gallery'>
                <div>
                    <div class='masp'>"."Mã sản phẩm : ".$row["MaSP"]."</div>
                    <div class='mancc'>"."Mã nhà cung cấp : ".$row["MaNCC"]."</div>
                    <div class='theloai'>"."Thể loại : ".$row["TheLoai"]."</div>
                     <div class='cauhinh'>"."Cấu hình : ".$row["CauHinh"]."</div>
                      <div class='theloai'>"."DungLuong : ".$row["DungLuong"]."</div>
                    <div><button type='button' class='btn btn-outline-success btnthemgio'>Thêm vào giỏ<i class='fa fa-shopping-cart'></i></button></div>
                </div>
            </div>
        </div>";
    }
}