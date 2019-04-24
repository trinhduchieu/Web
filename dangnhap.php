<?php
echo '<h2>Đăng nhập tài khoản</h2>
<form method="" action="" name="formdangnhap" class="formdn" >
  <div class="imgcontainer">
    <img src="img/user.jpg" alt="Avatar" class="avatar">
  </div>

    <label for="uname"><b>Tên gmail</b></label>
    <input type="text" placeholder="Nhập gmail..." name="uname" required>

    <label for="psw"><b>Mật khẩu</b></label>
    <input type="password" placeholder="Mật khẩu..." name="psw" required>
        
    <button type="submit">Đăng nhập</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Nhớ mật khẩu
    </label>
</form>
';
?>