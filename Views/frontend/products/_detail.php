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
                    <a href="index.php?controller=category&action=show&id=<?= $product['category_id']; ?>" class="breackcrumb__link">
                        <span><?= $product['category_name']; ?></span>
                    </a>
                </li>
                <li class="breackcrumb__item">
                    <a href="#" class="breackcrumb__link">
                        <span><?= $product['title']; ?></span>
                    </a>
                </li>
            </ul>


            <!-- Đây còn chi tiết 1 sản phẩm -->
            <div class="product__picture">
                <div class="product__image">
                    <?php 
                        $productImage = !empty($product['image']) ? $product['image'] : 'no-img.jpg';
                    ?>
                    <img class="product__img" src="./assets/img/imgProducts/<?= $productImage ?>" alt="<?= $product['title'] ?>">
                </div>
            </div>

            <div class="product__information">
                <section class="product__title all">
                    <h1 itemprop="name" class="product__name"><?= $product['title']; ?></h1>
                    <span class="detail__name">(Mã: <?= $product['id'] ?>)</span>
                    <span class="detail__name">(Tình trạng: 
                        <?php if($product['quantity'] > 0): ?>
                            <span style="color: green;">
                                Còn hàng
                            </span>
                        <?php else: ?>
                            <span style="color: red;">
                                Hết hàng
                            </span>
                        <?php endif; ?>
                        )
                    </span>
                    <div class="clear">
                        <div class="product__review">
                            <label for="" class="full"></label>
                            <label for="" class="full"></label>
                            <label for="" class="full"></label>
                            <label for="" class="full"></label>
                            <label for="" class="full"></label>
                        </div>
                        <span class="detail__rate">Chất lượng sản phẩm</span>
                    </div>
                    <div class="product__social">
                        <button>
                            <i class="fa-solid fa-thumbs-up"></i>
                            Like
                        </button>
                        <button>Chia sẻ</button>
                    </div>
                </section>

                <div class="product__quantity">
                    <label for="">Số lượng mua: </label>
                    <input type="number" name="num" id="quantity" min="1" value="1">
                </div>
                <div class="product__price">
                    <span>
                        Giá bán:
                        <strong><?= number_format($product['price']) ?> VND</strong>
                    </span>
                </div>
                <div class="product__moInfor">
                    <label class="product__moInfor--label" for="">Quà tặng:</label>
                    <ul class="moInfor__lists">
                        <li class="moInfor__item">
                            Kiếm tiền Online thu nhập khủng cùng Store
                            <a href="">[Tìm hiểu]</a>
                        </li>
                        <li class="moInfor__item">
                            Tặng ngay 20% học phí khi đăng ký học tại store
                            <a href="">[Tìm hiểu]</a>
                        </li>
                        <li class="moInfor__item">
                            Miễn phí đăng bán nhạc cụ không còn nhu cầu sử dụng
                            <a href="">[Tìm hiểu]</a>
                        </li>
                        <li class="moInfor__item">
                            Tặng khóa học guitar đệm hát cơ bản online
                            <a href="">[Xem demo]</a>
                        </li>
                    </ul>
                </div>
                <div class="product__policy">
                    <ul class="policy__lists">
                        <li class="policy__item">
                            Đổi trả tẹt ga trong 7 ngày đầu tiên 
                            <a href="">[Tìm hiểu ngay]</a>
                        </li>
                        <li class="policy__item">
                            1 đổi 1 nếu sản phẩm lỗi trong tháng đầu tiên 
                            <a href="">[Tìm hiểu ngay]</a>
                        </li>
                        <li class="policy__item">
                            Phát hiện hàng giả, hàng nhái, bạn trả hàng và nhận thêm 100% giá trị đơn hàng
                            <a href="">[Tìm hiểu ngay]</a>
                        </li>
                    </ul>
                </div>
                <div class="product__order">
                    <a href="index.php?controller=cart&action=store&id=<?= $product['id'] ?>" class="btnAdd">
                        Thêm vào giỏ hàng
                        <span>(Mua càng nhiều, ưu đãi càng lớn)</span>
                    </a>
                    <a href="" class="btnNow">
                        Mua ngay
                        <span href="">(Giao hàng tận nơi)</span>
                    </a>
                </div>
            </div>
            <!-- ----- -->

            <?php if (!empty($products)): ?>
            <div class="navcate">
                <h2 class="navcate__title">
                    <a href="" class="navcate__link">Sản phẩm liên quan</a>
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
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php else: ?>
                <h1 style="text-align: left; color: #288AD6;">Không có sản phẩm liên quan</h1> 
            <?php endif; ?>
        </div>
    </div>
</div>