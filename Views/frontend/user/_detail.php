<div class="container">
    <div style="padding-left: 200px; padding-right: 200px;">
        <form action="http://localhost/Guitar/index.php?controller=user&action=update" method="POST" name="login_form" style="min-height: 400px;">
            <div class="login_register">
                <div class="user_title">
                    <span class="user_title--text">Thông tin cá nhân</span>
                </div>
                <ul class="lists_register">
                    <li class="item_register">
                        <div class="userInfor__title">
                            <label class="register_label" for="">
                                Họ và tên
                                <span class="required">*</span>
                            </label>
                        </div>
                        <div class="register_input">
                            <input type="text" class="form-control" name="Name" required="required" value="<?= $user['fullname'] ?? null ?>" placeholder="Nhập họ và tên" maxlength="50">
                        </div>
                    </li>
                    <li class="item_register">
                        <div class="userInfor__title">
                            <label class="register_label" for="">
                                Giới tính
                            </label>
                        </div>
                        <div class="register_input">
                            <div class="sex__group">
                                <input type="hidden" id="paymentValues" name="sexId" value="2">
                                <label for="byNam" class="radioSex">
                                    <input type="radio" id="byNam" name="sex" value="Nam" checked="true">
                                    <span class="outer">
                                        <span class="inner"></span>
                                    </span>
                                    <i>Nam</i>
                                </label>
                                <label for="byNu" class="radioSex">
                                    <input type="radio" id="byNu" name="sex" value="Nữ">
                                    <span class="outer">
                                        <span class="inner"></span>
                                    </span>
                                    <i>Nữ</i>
                                </label>
                            </div>
                        </div>
                    </li>
                    <li class="item_register">
                        <div class="userInfor__title">
                            <label class="register_label" for="">
                                Số điện thoại
                                <span class="required">*</span>
                            </label>
                        </div>
                        <div class="register_input">
                            <input type="text" class="form-control" name="Phone" required="required" value="<?= $user['phone'] ?? null ?>" placeholder="Nhập điện thoại liên hệ" maxlength="50">
                        </div>
                    </li>
                    <li class="item_register">
                        <div class="userInfor__title">
                            <label class="register_label" for="">
                                Email
                                <span class="required">*</span>
                            </label>
                        </div>
                        <div class="register_input">
                            <input type="text" class="form-control" name="Email" required="required" value="<?= $user['email'] ?? null ?>" placeholder="Nhập email đăng nhập" maxlength="50">
                        </div>
                    </li>
                    <li class="item_register">
                        <div class="userInfor__title">
                            <label class="register_label" for="">
                                Ngày sinh
                                <!-- <span class="required">*</span> -->
                            </label>
                        </div>
                        <div class="register_input">
                            <input type="date" class="form-control" name="Birthday" values maxlength="50">
                        </div>
                    </li>
                    <li class="item_register">
                        <div class="userInfor__title">
                            <label class="register_label" for="">
                                Địa chỉ
                            </label>
                        </div>
                        <div class="register_input">
                            <input type="text" class="form-control" name="Address" required="required" value="<?= $user['address'] ?? null ?>" placeholder="Nhập địa chỉ" maxlength="150">
                        </div>
                    </li>
                    <li class="item_register">
                        <div class="userInfor__title"></div>
                        <div class="register_input">
                            <button name="sbm" class="btn btn-danger">Cập nhật</button>
                        </div>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</div>