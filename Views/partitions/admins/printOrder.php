<!-- order success of customer -->
<section class="container" style="min-height: 696px;">
    <div class="form__order" style="margin-top: 70px;left: -50px;">
        <div class="order">
            <div class="order__customer"style="margin-top: 15px;">
                <div class="customer__head">
                    <span>Thông tin đặt hàng</span>
                </div>
                <div class="customer__body">
                    <ul class="customer__lists">
                        <li class="customer__item">
                            Mã đơn hàng:
                            <strong><?= $prints[0]['code'] ?? null?></strong>
                        </li>
                        <li class="customer__item">
                            Tên khách hàng:
                            <strong><?= $prints[0]['customer_name'] ?? null?></strong>
                        </li>
                        <li class="customer__item">
                            Địa chỉ nhận hàng: 
                            <strong style="color: #3898DC;"><?= $prints[0]['customer_address'] ?? null?></strong>
                        </li>
                        <li class="customer__item">
                            Số điện thoại:
                            <strong><?= $prints[0]['customer_phone'] ?? null?></strong>
                        </li>
                        <li class="customer__item">
                            Ghi chú:
                            <strong><?= $prints[0]['customer_note'] ?? null?></strong>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="order__products">
                <div class="customer__head">
                    <span>Thông tin sản phẩm</span>
                </div>
                <?php $tatol = 0;$quantity = 0; ?>
                <?php foreach($prints as $print): ?>
                <div class="box__product">
                    <div class="product__infor" style="width: 100%;">
                        <div class="pro__head">
                            <div class="pro__title">
                                <span><?= $print['product_name'] ?></span>
                            </div>
                            <div class="pro__price">
                                <span><?= number_format($print['product_price'],0,',','.') ?> VND</span>
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
                                    <strong><?= $print['product_qty'] ?></strong>
                                </span>
                            </div>
                            <?php $tatol += $print['product_qty'] *  $print['product_price'];$quantity += $print['product_qty'];?>
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
                <span style="float: left;">
                    Tổng số lượng:
                    <strong style="color:red"><?= $quantity ?></strong>
                </span>
            </div>
        </div>
    </div>
    <div class="box__order--success" style="top: 52px; left: 300px;">
        <div class="order__success">
            <span>Chi tiết đơn hàng</span>
        </div>
    </div>
    <a href="http://localhost:403/Guitar/index.php?controller=order" style="position: absolute;bottom: 0;">Back</a>
</section>