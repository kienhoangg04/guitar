<!-- <div class="app"> -->
    <header class="header">
        <!-- Navbar -->
        <nav class="header__navbar">
            <div class="grid">
                <ul class="header__navbar-list">
                    <li class="header__navbar-item">
                        <a href="" class="header__navbar-item-link">Tại sao nên mua hàng chính hãng tại shop?</a>
                    </li>
                    <li class="header__navbar-item">
                        <a href="" class="header__navbar-item-link">Lợi ích khi sử dụng tài khoản mua hàng</a>
                    </li>
                    <li class="header__navbar-item">
                        <a href="" class="header__navbar-item-link">Tra cứu trạng thái đơn hàng</a>
                    </li>
                    <li class="header__navbar-item">
                        <a href="" class="header__navbar-item-link">Kiểm tra hành trình đơn hàng</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <!-- Header with search -->
        <div class="header-with-search">
            <div class="grid">
                <div class="header__logo">
                    <a href="index.php" class="header__logo-link">
                        <img class="header__logo-img"src="./assets/img/header/logo.png" alt="logo"/>
                    </a>
                </div>

                <form action="index.php?controller=search" method="POST">
                    <div class="header__search">
                        <input type="text" class="header__search--input" name="search_products" maxlength="50" placeholder="Bạn cần tìm gì...">
                        <button class="header__search--btn">
                            <i class="sociol__icon fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>

                <div class="header__notifi-box">
                    <ul class="header__notifi-list">
                        <li class="header__notifi-item header__notifi-item--login">

                            <?php if(isset($_SESSION['user'])): ?>
                            <a href="" title="<?= $_SESSION['user']['user_name']; ?>" class="header__notifi--link">
                                <i class="header__notifi--icon fa-solid fa-user"></i>
                                <label class="header__notifi--label">
                                    <?= $_SESSION['user']['email']; ?>
                                    </label>
                            </a>
                            <ul class="user_menu">
                                <?php if(isset($_SESSION['user']) && $_SESSION['user']['level'] == 0): ?>
                                <li class="user_item">
                                    <a href="http://localhost:403/Guitar/index.php?controller=admin" class="user_link">
                                        <i class="fa-solid fa-user-gear"></i>
                                        Quay lại trang admin
                                    </a>
                                </li>
                                <?php else: ?>
                                <li class="user_item">
                                    <a href="http://localhost:403/Guitar/index.php?controller=user" class="user_link">
                                        <i class="user_icon fa-solid fa-user"></i>
                                        Quản lý tài khoản
                                    </a>
                                </li>
                                <?php endif; ?>
                                <li class="user_item">
                                    <a href="http://localhost:403/Guitar/logout.php" class="user_link">
                                        <i class="user_icon fa-solid fa-arrow-right-from-bracket"></i>
                                        Đăng xuất
                                    </a>
                                </li>
                            </ul> 
                            <?php else: ?>
                            <a href="index.php?controller=login" title="Đăng nhập" class="header__notifi--link">
                                <i class="header__notifi--icon fa-solid fa-user"></i>
                                <label class="header__notifi--label">Đăng nhập</label>
                            </a>
                            <a href="index.php?controller=register" title="Đăng ký" class="header__notifi--link">
                                <i class="header__notifi--icon fa-solid fa-user-plus"></i>
                                <label class="header__notifi--label">Đăng ký</label>
                            </a>
                            <?php endif; ?>
                        </li>
                        <li class="header__notifi-item header__notifi-item--cart">
                            <a href="index.php?controller=cart" title="Giỏ hàng" class="header__notifi--link">
                                <i class="header__notifi--icon fa-solid fa-cart-shopping"></i>
                                <span class="header__notifi--label">
                                    <!-- <i class="cart_count">0</i> -->
                                    Giỏ hàng
                                </span>
                            </a>
                        </li>
                        <li class="header__notifi-item header__notifi-item--hotline">
                            <a href="" title="Hotline" class="header__notifi--link">
                                <i class="header__notifi--icon fa-solid fa-phone"></i>
                                <span class="header__notifi-label--hotline">Hotline</span>
                                
                                <label for="" class="header__notifi--label">
                                    <p class="Hotline__phone">0963.444.183 (Thái Nguyên & Hà Nội)</p>
                                    <p class="Hotline__phone">0858.333.125 (Hồ Chí Minh)</p>
                                </label>
                            </a>

                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Header Menu -->
        <div class="header__menu">
            <div class="grid">
                <lu class="header__menu-list">
                    <?php foreach ($menus as $menu): ?>
                    <li class="header__menu-item">
                        <a href="index.php?controller=category&action=show&id=<?= $menu['id']; ?>" class="header__menu--link">
                            <span class="header__menu-span">
                                <?php 
                                    $categoryImage = !empty($menu['image']) ? $menu['image'] : 'no-img.jpg';
                                ?>
                                <img class="header__menu-img" src="./assets/img/header/<?= $categoryImage ?>" alt="<?= $category['name'] ?>">

                            </span>
                            <label class="header__menu-label" for=""><?= $menu['name'] ?></label>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </lu>
            </div>
        </div>
    </header>
<!-- </div> -->