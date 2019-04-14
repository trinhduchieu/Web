<?php
include_once 'access.php';
?>
<body>
    <h3>Danh sach cac don hang</h3>
    	<table>
		<td>STT</td>
		<td>Mã sản phẩm</td>
		<td>Tên sản phẩm</td>
		<td>Đơn giá</td>
		<td>Số lượng</td>
		    <?php
        $tt = 0;
        $result = getAllSanPham();
        while ($row = mysqli_fetch_array($result)) {
            $tt++;
            $ma = $row['MaSP'];
            echo "<tr>";
            echo "<td>" . $tt . "</td>";
            echo "<td>" . $row['MaSP'] . "</td>";
            echo "<td>" . $row['TenSP'] . "</td>";
            echo "<td>" . $row['DonGia'] . "</td>";
            echo "<td>" . $row['SoLuong'] . "</td>";
        }
        ?>
    </table>