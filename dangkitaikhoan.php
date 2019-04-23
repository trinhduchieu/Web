<?php
echo '

<div class="row">
			<div class="col-md-5">
				<form name="dk" onsubmit="return kiemtra();">
					<h2>Đăng ký</h2>
					<div class="form-group">
						<div class="form-row">
							<div class="col">
								<label>Tên</label>
								<input type="text" class="form-control" placeholder="Tên của bạn" required name="lastname">
							</div>
							<div class="col">
								<label>Họ</label>
								<input type="text" class="form-control" placeholder="Họ của bạn" required name="firstname">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" class="form-control" placeholder="Email của bạn" required name="email">
					</div>
					<div class="form-group">
						<label>Mật khẩu</label>
						<input type="password" class="form-control" placeholder="Password của bạn" required name="pass">
					</div>
					<div class="form-group">
						<label>Nơi sống</label>
						<select class="form-control">
							<option selected>Nơi sống của bạn</option>
							<option>TPHCM</option>
							<option>Hà Nội</option>
							<option>Khác</option>
						</select>
					</div>
					<div class="form-group">
						<label>Giới tính</label>
						<div class="row" data-toggle="buttons">
							<div class="col">
								<label class="btn btn-outline-secondary">Nam
									<input type="radio" name="gioi-tinh" value="Nam">
								</label>
							</div>
							<div class="col">
								<label class="btn btn-outline-secondary">Nữ
									<input type="radio" name="gioi-tinh" value="Nữ">
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<input type="checkbox" required name="">
						<label>Tôi đồng ý điều khoản sử dụng</label>
					</div>
					<div class="form-group">
						<button class="btn btn-success" type="submit">Gửi</button>
					</div>
				</form>
			</div>		
		</div>';
?>
