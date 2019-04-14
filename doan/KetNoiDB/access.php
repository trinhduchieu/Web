<?php

include_once 'connection.php';

function runSQL($sql) {
    $con = ketnoidb("localhost", "root", "", "shopgame");
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
    return runSQL($sql);
}
?>