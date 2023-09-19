<section class="admin__content">
    <div class="categories">
        <div class="content">
            <h3 class="user__title">Sửa thông tin người dùng</h3>
        </div>
    </div>

    <!--  -->
    <div class="table__admin">
        <div class="content">
            <form action="http://localhost:403/Guitar/index.php?controller=admin&action=updateUser&id=<?php echo $idUser ?>" method="POST">
                <ul class="insert__lists">
                    <li class="insert__item">
                        <div class="insert__title">
                            <label for="" class="insert__label">User_name</label>
                        </div>
                        <div class="insert__input">
                            <input type="text" class="form-control" name="User_Name" required="required" value="<?php echo $user['user_name']; ?>" placeholder="Nhập user name" maxlength="50">
                        </div>
                    </li>
                    <li class="insert__item">
                        <div class="insert__title">
                            <label for="" class="insert__label">Nhập email</label>
                        </div>
                        <div class="insert__input">
                            <input type="text" class="form-control" name="Email" required="required" value="<?php echo $user['email']; ?>" placeholder="Nhập email đăng nhập" maxlength="50">
                        </div>
                    </li>
                    <li class="insert__item">
                        <div class="insert__title">
                            <label for="" class="insert__label">Mật khẩu</label>
                        </div>
                        <div class="insert__input">
                            <input type="text" class="form-control" name="Password" required="required" value="<?php echo $user['password']; ?>" placeholder="Nhập mật khẩu" maxlength="50">
                        </div>
                    </li>
                    <li class="insert__item">
                        <div class="insert__title">
                            <label for="" class="insert__label">Họ tên</label>
                        </div>
                        <div class="insert__input">
                            <input type="text" class="form-control" name="FullName" value="<?php echo $user['fullname']; ?>" placeholder="Nhập họ và tên" maxlength="50">
                        </div>
                    </li>
                    <li class="insert__item">
                        <div class="insert__title">
                            <label for="" class="insert__label">Số điện thoại</label>
                        </div>
                        <div class="insert__input">
                            <input type="text" class="form-control" name="Phone" value="<?php echo $user['phone']; ?>" placeholder="Nhập điện thoại liên hệ" maxlength="50">
                        </div>
                    </li>
                    <li class="insert__item">
                        <div class="insert__title">
                            <label for="" class="insert__label">Địa chỉ</label>
                        </div>
                        <div class="insert__input">
                            <input type="text" class="form-control" name="Address" value="<?php echo $user['address']; ?>" placeholder="Nhập địa chỉ liên hệ" maxlength="50">
                        </div>
                    </li>
                </ul>
                <button name="sbm" type="submit" class="btn btn-primary" style="float: left;font-weight: 500;padding: 2px 4px;text-transform: none;">Sửa</button>
                <a href="http://localhost:403/Guitar/index.php?controller=admin&action=user" class="btn btn-primary" style="float: left;font-weight: 500;padding: 2px 4px; margin-left: 10px;text-transform: none;">Quay lại</a>
            </form>
        </div>
    </div>
</section>