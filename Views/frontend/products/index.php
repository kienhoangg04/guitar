<!-- <div class="app"> -->
    <div class="container">
        <div class="grid__container">
            <div class="container__banner">
                <div class="container__banner-left">
                   <!--  -->
                    <div class="container__sliderShow">
                        <div class="gallery-display-area">
                            <div class="gallery-wrap">
                                <div class="image">
                                    <img class="container__banner-img--left" src="./assets/img/banner/img-1993-1.jpg" alt="">
                                </div>
                                <div class="image">
                                    <img class="container__banner-img--left" src="./assets/img/banner/img-1993-left.jpg" alt="">
                                </div>
                                <div class="image">
                                    <img class="container__banner-img--left" src="./assets/img/banner/img-1993-left1.jpg" alt="">
                                </div>
                                <div class="image">
                                    <img class="container__banner-img--left" src="./assets/img/banner/img-1993-left2.jpg" alt="">
                                </div>
                                <div class="image">
                                    <img class="container__banner-img--left" src="./assets/img/banner/img-1993-left3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container__banner-right">
                    <a href="" class="container__banner-link banner__block">
                        <img src="./assets/img/banner/img-1993-right.jpg" alt="Tuyển sinh Guitar" class="container__banner-img--right">
                    </a>
                </div>
            </div>

            <!-- -- -->
            <div class="container__product all mt10">
                <div class="navcate">
                    <h2 class="navcate__title">
                        <a href="" class="navcate__link">Sản phẩm nổi bật</a>
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
                                    <img src="./assets/img/imgProducts/<?= $productImage ?>" alt="<?= $product['title'] ?>" class="item__lipro--img">
                                </a>
                            </figure>

                            <div class="item__info">
                                <div class="label__wrap">
                                    <span class="label__hot">Hot</span>
                                </div>
                                <h4 class="item__info-title">
                                    <a href="" class="item__lipro--link" title="<?= $product['title'] ?>">
                                        <?= $product['title'] ?>
                                        </a>
                                </h4>
                                <div class="item__info-price">
                                    <span class="price__c fl"><?= number_format($product['price']) ?> VND</span>
                                    <?php if (!empty($product['price_sale'])): ?>
                                    <span class="price__o fl"><?= number_format($product['price_sale'])?> VND</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- hover 1 -->
                            <figure class="pro__info">
                                <h4 class="pro__info--title"><?= $product['title'] ?></h4>
                                <span class="des__price-c"><?= number_format($product['price']) ?> VND</span>
                                <div class="pro__info--des info-gif clear">
                                    <span class="des__title">
                                        Kiếm tiền Online thu nhập khủng cùng Store 
                                        <a href="" class="des__link" target="_blank">[Tìm hiểu]</a>
                                    </span>
                                    <span class="des__title">
                                        Tặng ngay 20% học phí khi đăng ký học tại Store 
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


            <!-- -- -->
            <div class="container__product all mt10">
                <div class="navcate">
                    <h2 class="navcate__title">
                        <a href="" class="navcate__link">Sách | Phụ kiện +</a>
                    </h2>
                    <b class="navcate__saparate"></b>
                </div>

                <ul class="product__lists product__lists2">
                    <?php foreach ($productBooks as $productBook): ?>
                    <li class="product__item product02__item">
                        <div class="item__lipro">
                            <figure class="reponsive-img">
                                <a href="index.php?controller=product&action=show&id=<?= $productBook['id']?>" class="item__lipro--link">
                                    <?php 
                                        $productBookImg = !empty($productBook['image']) ? $productBook['image'] : 'no-img.jpg';
                                    ?>
                                    <img src="./assets/img/imgProducts/<?= $productBookImg ?>" alt="" class="item__lipro--img">
                                </a>
                            </figure>
                            <div class="item__info">
                                <h4 class="item__info-title">
                                    <a href="" class="item__lipro--link" title="Ampli Marshall 1936V-E Tủ mở rộng 140W 140X - M31-1936V-E">
                                        <?= $productBook['title'] ?></a>
                                </h4>
                                <div class="item__info-price">
                                    <span class="price__c"><?= number_format($productBook['price']) ?> VNĐ</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div> 
<!-- </div>