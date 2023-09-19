<!-- <div class="app"> -->
    <div class="background">
    <div style="padding-left: 300px; padding-right: 300px;">
        <form action="index.php?controller=register&action=register" method="POST" name="register_form" style="min-height: 420px;margin-top: 70px;">
        <div class="login_register">
            <div class="text-right mt10">
                <span style="text-size: 14px;color: #fff">Bạn đã có tài khoản?</span>
                <a href="index.php?controller=login" class="ml10 btn btn-primary">Đăng nhập</a>
            </div>
            <div class="login_title">
                <span class="login_title--text">Đăng ký tài khoản</span>
            </div>
            <ul class="lists_register">
                <li class="item_register">
                    <div class="register_title">
                        <label class="register_label" for="">
                            User Name
                            <span class="required">*</span>
                        </label>
                    </div>
                    <div class="register_input">
                        <input type="text" class="form-control" name="User_Name" required="required" values placeholder="Nhập user name" maxlength="50">
                        
                    </div>
                </li>
                <li class="item_register">
                    <div class="register_title">
                        <label class="register_label" for="">
                            Nhập email
                            <span class="required">*</span>
                        </label>
                    </div>
                    <div class="register_input">
                        <input type="text" class="form-control" name="Email" required="required" values placeholder="Nhập email đăng nhập" maxlength="50">
                        <span class="form-message"><?php echo (isset($error['email'])?$error['email']:''); ?></span>
                    </div>
                </li>
                <li class="item_register">
                    <div class="register_title">
                        <label class="register_label" for="">
                            Mật khẩu
                            <span class="required">*</span>
                        </label>
                    </div>
                    <div class="register_input">
                        <input type="password" class="form-control" name="Password" required="required" values placeholder="Nhập mật khẩu" maxlength="50">
                    </div>
                </li>
                <li class="item_register">
                    <div class="register_title">
                        <label class="register_label" for="">
                            Nhập lại Mật khẩu
                            <span class="required">*</span>
                        </label>
                    </div>
                    <div class="register_input">
                        <input type="password" class="form-control" name="RePassword" required="required" values placeholder="Nhập lại mật khẩu" maxlength="50">
                        <span class="form-message"><?php echo (isset($error['password'])?$error['password']:''); ?></span>
                    </div>
                </li>
                <li class="item_register">
                    <div class="register_title">
                        <label class="pdr10 register_label" for="">
                            Họ tên
                        </label>
                    </div>
                    <div class="register_input">
                        <input type="text" class="form-control" name="FullName" values placeholder="Nhập họ và tên" maxlength="50">
                        <span class="form-message"><?php echo (isset($error['fullname'])?$error['fullname']:''); ?></span>
                    </div>
                </li>
                <li class="item_register">
                    <div class="register_title">
                        <label class="pdr10 register_label" for="">
                            Số điện thoại
                        </label>
                    </div>
                    <div class="register_input">
                        <input type="text" class="form-control" name="Phone" values placeholder="Nhập điện thoại liên hệ" maxlength="50">
                        <span class="form-message"><?php echo (isset($error['phone'])?$error['phone']:''); ?></span>
                    </div>
                </li>
                <li class="item_register">
                    <div class="register_title"></div>
                    <div class="register_input">
                        <button type="submit" name="btnRegister"class="btn btn-danger btn-primary">Đăng ký</button>
                    </div>
                </li>
            </ul>
        </div>
        </form>
    </div>
</div>