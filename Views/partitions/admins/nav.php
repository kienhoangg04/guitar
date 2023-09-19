<nav class="admin">
	<div class="admin__box">
            <a href="" class="admin__img">
                <img src="./assets/img/admin_img/User_icon.png" alt="">
            </a>
            <a href="" class="admin__name"><?= $_SESSION['user']['user_name'] ?></a>
        </div>

        <ul class="admin__lists">
            <li class="admin__item">
                <a href="index.php?controller=admin">
                    <i class="fa-solid fa-house"></i>
                    Trang Chủ
                </a>
            </li>
            <li class="admin__item">
                <a href="index.php?controller=admin&action=show&id=0">
                    <i class="fa-brands fa-product-hunt"></i>
                    Quản Lý Sản Phẩm
                </a>
            </li>
            <li class="admin__item">
                <a href="index.php?controller=admin&action=user">
                    <i class="fa-solid fa-user"></i>
                    Quản Lý Người Dùng
                </a>
            </li>
            <li class="admin__item">
                <a href="http://localhost:403/Guitar/index.php?controller=order">
                    <i class="fa-solid fa-money-bill-wave"></i>
                    Quản Lý Đơn Hàng
                </a>
            </li>
            <li class="admin__item">
                <a href="http://localhost:403/Guitar/index.php?controller=home">
                    <i class="fa-solid fa-eye"></i>
                    Xem Sản Phẩm
                </a>
            </li>
            <li class="admin__item">
                <a href="http://localhost:403/Guitar/logout.php">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Đăng Xuất
                </a>
            </li>
        </ul>
    </div>
</nav>