<section class="admin__content">
    <div class="categories">
        <div class="content">
            <h3 class="user__title">Đơn hàng</h3>
        </div>
    </div>

    <!-- 
    <div class="content" style="margin-top: 10px">
        <a href="#" class="btn btn-primary" style="float: right; font-weight: 500;padding: 2px 4px; margin-right: 10px;text-transform: none;">Thêm đơn hàng</a>
    </div> -->
    <!--  -->
    <div class="table__admin">
        <div class="content">
            <form action="">
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th>Mã Đơn Hàng</th>
                            <th>Tên Khách Hàng</th>
                            <th>Số Điện Thoại</th>
                            <th>Địa Chỉ</th>
                            <th>Ghi Chú</th>
                            <th>Thanh Toán</th>
                            <th>Quản Lý</th>
                            <th>Xử lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($customers as $customer): ?>
                        <tr>
                            <td>
                                <span><?= $customer['code'] ?></span>
                            </td>
                            <td>
                                <span><?= $customer['customer_name'] ?></span>
                            </td>
                            <td>
                                <span>
                                    <?= $customer['customer_phone'] ?>
                                </span>
                            </td>
                            <td>
                                <span><?= $customer['customer_address'] ?></span>
                            </td>
                            <td>
                                <span><?= $customer['customer_note'] ?></span>
                            </td>
                            <td>
                                <span><?= $customer['customer_payment'] ?></span>
                            </td>
                            <td>
                                <?php if($customer['status'] == 1){
                                    echo '<a href="http://localhost:403/Guitar/index.php?controller=order&action=show&id='.$customer['id'].'">Đơn hàng mới</a>';
                                }else{
                                    echo '<a href="http://localhost:403/Guitar/index.php?controller=order&action=show&id='.$customer['id'].'">Đã xem</a>';
                                }
                                ?>
                            </td>
                            <td>
                                <a href="http://localhost:403/Guitar/index.php?controller=order&action=print&id=<?= $customer['id'] ?>">In đơn</a>
                                <!-- <a onclick="return Del()" href="">| Xóa</a> -->
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</section>
<script>
    function Del()
    {
        return confirm("Bạn có muốn xóa?")
    }
</script>