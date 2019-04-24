<?php

include_once 'connection.php';

function sqlQuery($sql) {
    $con = ketnoidb("localhost", "root", "", "shopgame");
    mysqli_set_charset($con, 'UTF8');
    $result = mysqli_query($con, $sql);
    if ($result) {
        return $result;
    } else {
        echo 'Du lieu rong';
        return 0;
    }
}

function getAllSanPham()
{
    $sql= "SELECT * FROM sanpham";
    return sqlQuery($sql);
}
function sanPhamNoiBat()
{
    $sql = "SELECT * FROM sanpham where SoLuong <= 10";
    return sqlQuery($sql);
}
function getChiTietSanPha ()
{
    $sql = "SELECT * FROM chitietsanpham";
    return $sqlQuery($sql);
} 
function updateSanPham($maSP , $tenSP ,$moTa  , $hinhAnh, $soLuong , $gia){
    $sql= "UPDATE sanpham SET TenSP='".$tenSP."',HinhAnh='".$hinhAnh."',SoLuong='".$soLuong."',DonGia='".$gia."' WHERE MaSP='".$maSP."';";
}
//func
?>