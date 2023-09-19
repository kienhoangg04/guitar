<section class="admin__content">
    <div class="categories">
        <div class="content">
            <ul class="cate__lists">
                <li class="cate__item">
                    <a href="index.php?controller=admin&action=show&id=0">All Product</a>
                </li>
                <?php foreach($menus as $menu): ?>
                <li class="cate__item">
                    <a href="index.php?controller=admin&action=show&id=<?= $menu['id']; ?>"><?= $menu['name']; ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <!--  -->
    <div class="content" style="margin-top: 10px">
        <h3 style="float: left; color: #1e90ff; font-size: 1.9em;">Danh sách sản phẩm</h3>
        <a href="http://localhost:403/Guitar/index.php?controller=admin&action=viewInsert" class="btn btn-primary" style="float: right; font-weight: 500;padding: 2px 4px; margin-right: 10px;text-transform: none;">Thêm sản phẩm</a>
    </div>
    <!--  -->
    <div class="table__admin">
        <div class="content">
            <form action="">
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Giá sale</th>
                            <th>Số lượng</th>
                            <th>Ảnh</th>
                            <th>Danh mục</th>
                            <th>Xử lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($products as $product): ?>
                        <tr>
                            <td>
                                <span><?= $product['id'] ?></span>
                            </td>
                            <td>
                                <span><?= $product['title'] ?></span>
                            </td>
                            <td>
                                <span>
                                    <?= number_format($product['price'],0,',','.') ?> VND
                                </span>
                            </td>
                            <td>
                                <span>
                                    <?= number_format($product['price_sale'],0,',','.') ?> VND
                                </span>
                            </td>
                            <td>
                                <span>
                                    <?= number_format($product['quantity']) ?>
                                </span>
                            </td>
                            <td>
                                <div class="img">
                                    <?php 
                                        $productImage = !empty($product['image']) ? $product['image'] : 'no-img.jpg';
                                    ?>
                                    <img src="./assets/img/imgProducts/<?= $productImage ?>" alt="">
                                </div>
                            </td>
                            <td><?= $product['category_name'] ?></td>
                            <td>
                                <a onclick="return Del()" href="http://localhost:403/Guitar/index.php?controller=admin&action=deleteProduct&id=<?= $product['id'] ?>">Xóa</a>
                                <a href="http://localhost:403/Guitar/index.php?controller=admin&action=viewUpdate&id=<?= $product['id'] ?>">| Sửa</a>
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