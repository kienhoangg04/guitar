<!-- <div class="app"> -->
    <div class="background">
    <div style="padding-left: 300px; padding-right: 300px;">
        <form action="index.php?controller=login&action=login" method="POST" name="login_form" style="min-height: 300px;margin-top: 100px;">
            <div class="login_register">
                <div class="text-right mt10">
                    <i style="color: #fff">Chưa có tài khoản?</i>
                    <a href="index.php?controller=register" class="ml10 btn btn-primary">Đăng ký</a>
                </div>
                <!-- <div class="login_title">
                    <span class="login_title--text">Đăng nhập nhanh bằng tài khoản mạng xã hội</span>
                </div>
                <div class="login_socials mt10 mb20 text-center">
                    <a href="" class="btn">
                        <i style="margin-right: 10px;" class="fa-brands fa-facebook-f"></i>
                        Đăng nhập bằng Facebook
                    </a>
                    <a href="" class="btn">
                        <i style="margin-right: 10px;" class="fa-brands fa-google"></i>
                        Đăng nhập bằng Google
                    </a>
                </div> -->
                <div class="login_title">
                    <span class="login_title--text">Đăng nhập bằng tài khoản</span>
                </div>
                <ul class="lists_register">
                    <li class="item_register">
                        <!-- <div class="register_title">
                            <label class="register_label" for="">
                                Email
                                <span class="required">*</span>
                            </label>
                        </div>
                        <div class="register_input">
                            <input type="text" class="form-control" name="Email" required="required" values placeholder="Nhập email đăng nhập" maxlength="50">
                        </div> -->
                        <div class="register_title">
                        <label class="register_label" for="">
                            User Name
                            <span class="required">*</span>
                        </label>
                        </div>
                        <div class="register_input">
                            <input type="text" class="form-control" name="User_Name" required="required" values placeholder="Nhập user name" maxlength="50">
                            <span class="form-message"><?php echo (isset($message)?$message:''); ?></span>
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
                        <div class="register_title"></div>
                        <div class="register_input">
                            <button type="submit" name="btnLogin" class="btn btn-danger btn-primary">Đăng nhập</button>
                            <a href="" class="register_link btn">
                                <i class="fa-solid fa-lock"></i>
                                Quên mật khẩu
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</div>