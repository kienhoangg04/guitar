<section class="admin__content">
    <div class="categories">
        <div class="content">
            <h3 class="user__title">Danh sách người dùng</h3>
        </div>
    </div>

    <!--  -->
    <div class="table__admin">
        <div class="content">
            <form action="">
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th>Id sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $tatol = 0; ?>
                        <?php foreach($products as $product): ?>
                        <tr>
                            <td>
                                <span><?= $product['product_id'] ?></span>
                            </td>
                            <td>
                                <span><?= $product['product_name'] ?></span>
                            </td>
                            <td>
                                <span>
                                    <?= number_format($product['product_price'],0,',','.') ?>
                                    VNĐ
                                </span>
                            </td>
                            <td>
                                <span><?= $product['product_qty'] ?></span>
                            </td>
                        </tr>
                        <?php $tatol += $product['product_qty'] * $product['product_price']; ?>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="4">
                                <span>Tổng tiền: <?= number_format($tatol,0,',','.') ?> VND</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <!--  -->
    <div class="content" style="margin-top: 10px">
        <a href="http://localhost:403/Guitar/index.php?controller=order" class="btn btn-primary" style="float: left; font-weight: 500;padding: 2px 4px; margin-top: 10px;text-transform: none;">Quay lại</a>
    </div>
</section>