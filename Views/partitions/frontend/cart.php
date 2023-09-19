<div class="container">
    <div class="grid__container">
        <?php if (isset($_SESSION['cart'])): ?>
        <section class="form__payment clear">
            <form action="index.php?controller=cart&action=update" method="POST">
                <div class="cart colums50 fl">
                    <div class="cart__infor">
                        <strong class="cart__title">Thông tin người mua hàng</strong>
                        <div class="form__group">
                            <input name="fullname" type="text" class="form__control" required="required" value="<?= $user['fullname'] ?? null?>" placeholder="Họ và tên">
                        </div>
                        <div class="form__group">
                            <input name="phone" type="text" class="form__control" required="required" value="<?= $user['phone'] ?? null ?>" placeholder="Số điện thoại">
                        </div>
                        <div class="form__group">
                            <input name="email" type="email" class="form__control" required="required" value="<?= $user['email'] ?? null?>" placeholder="Địa chỉ email">
                        </div>
                        <div class="form__group">
                            <input name="address" type="text" class="form__control" required="required" value="<?= $user['address'] ?? null?>" placeholder="Địa chỉ liên hệ">
                        </div>
                        <div class="form__group">
                            <textarea name="note" class="form__control note" name="Content" id="" rows="5" placeholder="Ghi chú mua hàng"></textarea>
                        </div>
                        <!--  -->
                        <strong class="cart__title">Hình thức thanh toán</strong>
                        <div class="form__group">
                            <input type="hidden" id="paymentValues" name="paymentID" value="2">
                            <label for="byCOD" class="radioPay">
                                <input type="radio" id="byCOD" name="payment" value="COD">
                                <span class="outer">
                                    <span class="inner"></span>
                                </span>
                                <i>Thanh toán khi nhận hàng - COD</i>
                            </label>
                            <label for="byATM" class="radioPay">
                                <input type="radio" id="byATM" name="payment" value="Banking">
                                <span class="outer">
                                    <span class="inner"></span>
                                </span>
                                <i>Thanh toán qua chuyển khoản</i>
                            </label>
                        </div>

                        <!-- Bank box -->
                        <div class="bank__ATM all">
                            <p>Quý khách vui lòng chuyển tiền vào tài khoản sau: </p>
                            <p>
                                Nội dung chuyển tiền: 
                                <strong>Họ tên - Số điện thoại</strong>
                            </p>
                            <p>
                                Ví dụ: 
                                <strong>
                                    <i>Hoàng Trung Kiên - 0336693940</i>
                                </strong>
                            </p>
                            <p>Sau khi thanh toán vui lòng thông báo theo Hotline: 0988776213</p>

                            <ul class="lists__bank">
                                <li class="item__bank">
                                    <div class="detail__bank">
                                        <p>
                                            <Strong>Ngân hàng: Ngân hàng Tcmp công thương Viet Nam (ViettinBank)</Strong>
                                            <p>Chủ tài khoản: Hoàng Trung Kiên</p>
                                            <p>Số tài khoản: 1048.xxxx.3323</p>
                                            <p>Chi nhánh: 179 Lương Ngọc Quyến, Tp.TN</p>
                                        </p>
                                    </div>
                                </li>
                                <li class="item__bank">
                                    <div class="detail__bank">
                                        <p>
                                            <Strong>Ngân hàng: Ngân hàng ngoại thương (VietcomBank)</Strong>
                                            <p>Chủ tài khoản: Nguyễn Văn A</p>
                                            <p>Số tài khoản: 1002.xxxx.2001</p>
                                            <p>Chi nhánh: 254 Đường Láng, Quận Đống Đa, Hà Nội</p>
                                        </p>
                                    </div>
                                </li>
                                <li class="item__bank">
                                    <div class="detail__bank">
                                        <p>
                                            <Strong>Ngân hàng: Ngân hàng nông nghiệp và phát triển nông thôn (AgriBank)</Strong>
                                            <p>Chủ tài khoản: Hoàng Văn B</p>
                                            <p>Số tài khoản: 0403.xxxx.2001</p>
                                            <p>Chi nhánh: 1005 Cách Mạng Tháng 8, Phường 7, Quận Tân Bình. Tp.HCM</p>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <!-- Right -->
                <div class="cart colums50 fl">
                    <div class="header__cart text-center mb20">
                        <p class="cart__title">Đơn đặt hàng</p>
                    </div>
                    <div class="table__cart all mb20">
                    	<form action="index.php?controller=cart&action=update" method="POST">
                            <table class="table table-border">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php $num = 1; $tatol = 0; ?>
                                	<?php foreach($products as $product): ?>
                                    <tr>
                                        <td>
                                            <strong><?= $num++ ?></strong>
                                        </td>
                                        <td>
                                            <div class="img">
                                                <a href="index.php?controller=product&action=show&id=<?= $product['id']?>" title="<?= $product['title'] ?>">
                                                	<?php 
								                        $productImage = !empty($product['image']) ? $product['image'] : 'no-img.jpg';
								                    ?>
                                                    <img src="./assets/img/imgProducts/<?= $productImage ?>" class="img_responsive" alt="<?= $product['title'] ?>">
                                                </a>
                                            </div>
                                            <div class="name">
                                                <a href="index.php?controller=product&action=show&id=<?= $product['id']?>" class="name__pro" title="<?= $product['title'] ?>"><?= $product['title'] ?></a>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="red bold"><?= number_format($product['price'],0,',','.') ?> VND</span>
                                        </td>
                                        <td class="text-center">
                                            <input type="number" name="qty[<?= $product['id'] ?>]" 
                                            min="1" value="<?= $product['qty'] ?>">
                                        </td>
                                        <td class="text-center">
                                        	<?php $price = $product['price'] * $product['qty']; 
                                        	$tatol += $price;?>
                                            <span class="red bold"><?= number_format($price,0,',','.') ?> VND</span>
                                        </td>
                                        <td class="text-center">
                                            <a href="index.php?controller=cart&action=delete&id=<?= $product['id'] ?>">Xóa</a>
                                        </td>
                                    </tr>
                                	<?php endforeach; ?>
                                </tbody>
                            </table>
                            <button name="btnUp" class="btn btn-primary" style="float: right;font-weight: 500;padding: 2px 4px;text-transform: none;">Update</button>
                            <a href="index.php?controller=cart&action=destroy" class="btn btn-primary" style="float: right;font-weight: 500;padding: 2px 4px; margin-right: 10px;text-transform: none;">Delete All</a>
                        </form>
                    </div>
                    <div class="form__group">
                        <p class="pay__tatol bold">Tổng tiền thanh toán:
                            <span class="red"><?= number_format($tatol) ?> VND</span>
                        </p>
                        <p class="pay__tatol">
                            <i>(Phí vận chuyển: sẽ được tính khi xác nhận được đơn hàng)</i>
                        </p>
                    </div>
                    <button name="btnMua" class="btn__payment">Hoàn tất mua hàng</button>
                    <div class="form__group">
                        <a href="index.php?controller=home" class="btn__payment continues">Tiếp tục mua hàng</a>
                    </div>
                </div>
            </form>
        </section>
        <?php else: ?>
            <h1 style="text-align: center; color: #288AD6;">Giỏ hàng trống!</h1>
        <?php endif; ?>
    </div>
</div>
<script>
    const byATM = document.querySelector('#byATM');
    const bank_ATM = document.querySelector('.bank__ATM');
    byATM.onclick = function () {
        bank_ATM.classList.toggle('block');
    }
</script>