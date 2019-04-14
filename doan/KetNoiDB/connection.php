<?php
function ketnoidb($sever, $user, $pass, $dbname) {
    $con = mysqli_connect($sever, $user, $pass, $dbname);
    if (!$con) {
        echo "Khong ket noi duoc co so du lieu!!" . mysqli_error($con);
    } else {
        return $con;
    }
}
?>