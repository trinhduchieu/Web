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
    <link rel="stylesheet" type="text/css" href="css/dangkytaikhoan.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <script type="text/javascript" src="javascript/js.js"></script>
</head>
<body>
    <?php
    include_once 'home.php';       
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        if($page=="home.php")
            include_once 'home.php';
        if($page == "product")
            include_once 'chitietsanpham.php';
        if($page== "noibat")
            include_once 'sanphamnoibat.php';
    }
    ?>
</body>
</html>