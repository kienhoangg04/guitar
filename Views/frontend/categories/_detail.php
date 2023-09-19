<!-- <div class="app"> -->
    <div class="container">
        <div class="grid__container">
            <div class="row">
                <ul class="breackcrumb__lists">
                    <li class="breackcrumb__item">
                        <a href="index.php?controller=home" class="breackcrumb__link">
                            <span>Trang Chủ</span>
                        </a>
                    </li>
                    <li class="breackcrumb__item">
                        <a href="#" class="breackcrumb__link">
                            <span><?= $category['name']; ?></span>
                        </a>
                    </li>
                </ul>
            </div>

            <!--  -->
            <ul class="service__lists">
                <li class="service__item">
                    <p title="Sản phẩm chính hãng">
                        <i class="service__icon fa-solid fa-thumbs-up"></i>
                        <small class="service__title">Sản phẩm chính hãng</small>
                    </p>
                </li>
                <li class="service__item">
                    <i class="service__icon fa-solid fa-credit-card"></i>
                    <span class="service__title">Thanh toán linh hoạt</span>
                </li>
                <li class="service__item">
                    <i class="service__icon fa-solid fa-square-check"></i>
                    <span class="service__title">Giá thành tốt</span>
                </li>
                <li class="service__item">
                    <i class="service__icon fa-solid fa-dollar-sign"></i>
                    <span class="service__title">Hỗ trợ trả góp</span>
                </li>
                <li class="service__item">
                    <i class="service__icon fa-solid fa-truck"></i>
                    <span class="service__title">Giao hàng toàn quốc</span>
                </li>
            </ul>
        
            <!--  -->
            <?php if(!empty($products)): ?>
            <div class="container__product all mt10">
                <div class="navcate">
                    <h2 class="navcate__title">
                        <a href="" class="navcate__link"><?= $category['name']; ?></a>
                    </h2>
                    <b class="navcate__saparate"></b>
                </div>

                <ul class="product__lists">
                    <?php foreach ($products as $product): ?>
                    <li class="product__item columns25 product02__item">
                        <div class="item__lipro">
                            <figure class="reponsive-img">
                                <a href="index.php?controller=product&action=show&id=<?= $product['id']?>" class="item__lipro--link">
                                    <?php 
                                        $productImage = !empty($product['image']) ? $product['image'] : 'no-img.jpg';
                                    ?>
                                    <img src="./assets/img/imgProducts/<?= $productImage ?>" alt="" class="item__lipro--img">
                                </a>
                            </figure>

                            <div class="item__info">
                                <h4 class="item__info-title">
                                    <a href="" class="item__lipro--link" title="Bộ Đàn Guitar Điện Yamaha ERG121GPII (Chính Hãng Full Box 100%)">
                                        <?= $product['title']; ?>
                                    </a>
                                </h4>
                                <div class="item__info-price">
                                    <span class="price__c fl"><?= number_format($product['price']) ?> VNĐ</span>
                                    <?php if (!empty($product['price_sale'])): ?>
                                    <span class="price__o fl"><?= number_format($product['price_sale']) ?> VND</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- hover 1 -->
                            <figure class="pro__info">
                                <h4 class="pro__info--title"><?= $product['title']; ?></h4>
                                <span class="des__price-c"><?= number_format($product['price']) ?> VNĐ</span>
                                <div class="pro__info--des info-gif clear">
                                    <span class="des__title">
                                        Kiếm tiền Online thu nhập khủng cùng 1993 Store 
                                        <a href="" class="des__link" target="_blank">[Tìm hiểu]</a>
                                    </span>
                                    <span class="des__title">
                                        Tặng ngay 20% học phí khi đăng ký học tại 1993 store 
                                        <a href="" class="des__link" target="_blank">[Tìm hiểu]</a>
                                    </span>
                                    <span class="des__title">
                                        Miễn phí đăng bán nhạc cụ không còn nhu cầu sử dụng
                                        <a href="" class="des__link">[Xem demo]</a>
                                    </span>
                                    <span class="des__title">
                                        Tặng khóa học guitar đệm hát cơ bản online 
                                        <a href="" class="des__link"> [Tìm hiểu]</a>
                                    </span>
                                </div>
                                <div class="pro__info--des clear">
                                    <label for="" class="des__label">Sản phẩm chính hãng</label>
                                    <label for="" class="des__label">Giá thành tốt</label>
                                    <label for="" class="des__label">Thanh toán linh hoạt</label>
                                    <label for="" class="des__label">Giá thành tốt</label>
                                    <label for="" class="des__label">Giao hàng toàn quốc</label>
                                </div>
                                <!-- <div class="pro__btn">
                                    <a href="#" class="btn btn-xs btn-primary">Demo</a>
                                    <a href="#" class="btn btn-xs btn-primary">So sánh</a>
                                </div> -->
                            </figure>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php else: ?>
                <h1 style="text-align: center;color: var(--text2-color);">Không có sản phẩm nào</h1>
            <?php endif; ?>
        </div>
    </div> 
<!-- </div>