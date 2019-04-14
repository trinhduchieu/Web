<?php
echo '<h2>Login Form</h2>

<form method="" action="" name="formdangnhap">
  <div class="imgcontainer">
    <img src="img/user.jpg" alt="Avatar" class="avatar">
  </div>

    <label for="uname"><b>Tên gmail</b></label>
    <input type="text" placeholder="Nhập gmail..." name="uname" required>

    <label for="psw"><b>Mật khẩu</b></label>
    <input type="password" placeholder="Mật khẩu..." name="psw" required>
        
    <button type="submit">Đăng nhập</button>
    <button><a href="?id=dangki">Đăng ký</button></a>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Nhớ mật khẩu
    </label>
</form>';
?>