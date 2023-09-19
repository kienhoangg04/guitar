<!-- order success of customer -->
<div class="container">
    <div class="grid__container">
        <div class="row">
            <ul class="breackcrumb__lists">
                <li class="breackcrumb__item">
                    <a href="index.php" class="breackcrumb__link">
                        <span>Trang Chủ</span>
                    </a>
                </li>
                <li class="breackcrumb__item">
                    <a href="#" class="breackcrumb__link">
                        <span>Đặt hàng thành công</span>
                    </a>
                </li>
            </ul>
        </div>



        <div class="form__order">
            <div class="order">
                <div class="order__thank">
                    <p>Cảm ơn Bạn 
                        <strong><?= $user['fullname'] ?? null?></strong>    
                    đã cho shop được phục vụ. Trong vòng 45p, nhân viên của Shop sẽ gửi tin nhắn hoặc gọi điện xác nhận đặt hàng tới Bạn.</p>
                </div>
    
                <div class="order__customer">
                    <div class="customer__head">
                        <span>Thông tin đặt hàng</span>
                    </div>
                    <div class="customer__body">
                        <ul class="customer__lists">
                            <li class="customer__item">
                                Địa chỉ nhận hàng: 
                                <strong style="color: #3898DC;"><?= $user['address'] ?? null?></strong>
                            </li>
                            <li class="customer__item">
                                Số điện thoại:
                                <strong><?= $user['phone'] ?? null?></strong>
                            </li>
                            <li class="customer__item">
                                Thang toán:
                                <strong><?= $user['payment'] ?? null?></strong>
                            </li>
                        </ul>
                    </div>
                    <div class="order__footer">
                        <span>Khi cần hỗ trợ vui lòng gọi 096 398 8183 hoặc 096 938 183 (Từ 9h00 - 22h00)</span>
                    </div>
                </div>
    
                <div class="order__products">
                    <div class="customer__head">
                        <span>Thông tin sản phẩm</span>
                    </div>
                    <?php $tatol = 0; ?>
                    <?php foreach($products as $product): ?>
                    <div class="box__product">
                        <div class="pro__img">
                            <?php 
                                $productImage = !empty($product['image']) ? $product['image'] : 'no-img.jpg';
                            ?>
                            <img src="./assets/img/imgProducts/<?= $productImage ?>" alt="">
                        </div>
    
                        <div class="product__infor">
                            <div class="pro__head">
                                <div class="pro__title">
                                    <span><?= $product['title'] ?></span>
                                </div>
                                <div class="pro__price">
                                    <span><?= number_format($product['price'],0,',','.') ?> VND</span>
                                </div>
                            </div>
    
                            <div class="pro__body">
                                <div class="pro__category">
                                    <!-- <span>Loại: 
                                        <strong>Guitar</strong>
                                    </span> -->
                                </div>
    
                                <div class="pro__quantity">
                                    <span>Số lượng: 
                                        <strong><?= $product['qty'] ?></strong>
                                    </span>
                                </div>
                                <?php $tatol += $product['qty'] *  $product['price'];?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="order_tatol">
                    <span>
                        Tổng tiền:
                        <strong style="color:red"><?= number_format($tatol,0,',','.') ?> VND</strong>
                    </span>
                </div>
    
                <div class="order__out">
                    <div class="order__link">
                        <a href="http://localhost:403/Guitar/index.php" class="btn btn-primary">Mua thêm sản phẩm khác</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="box__order--success">
            <div class="order__success">
                <i class="fa-solid fa-check"></i>
                <span>Đặt hàng thành công</span>
            </div>
        </div>
    </div>
</div>