<section class="admin__content">
    <div class="categories">
        <div class="content">
            <h3 class="user__title">Sửa sản phẩm</h3>
        </div>
    </div>

    <!--  -->
    <div class="table__admin">
        <div class="content">
            <form action="http://localhost:403/Guitar/index.php?controller=admin&action=update&id=<?php echo $idProduct ?>" method="POST" enctype="multipart/form-data">
                <ul class="insert__lists">
                    <li class="insert__item">
                        <div class="insert__title">
                            <label for="" class="insert__label">Title</label>
                        </div>
                        <div class="insert__input">
                            <input type="text" class="form-control" name="Title" required="required" value="<?php echo $product['title']; ?>" placeholder="Nhập tên sản phẩm" maxlength="255">
                        </div>
                    </li>
                    <li class="insert__item">
                        <div class="insert__title">
                            <label for="" class="insert__label">Image</label>
                        </div>
                        <div class="insert__input">
                            <input type="file" class="form-control" name="Image" value="<?php echo $product['image']; ?>" placeholder="image.jpg" maxlength="255">
                        </div>
                    </li>
                    <li class="insert__item">
                        <div class="insert__title">
                            <label for="" class="insert__label">Price</label>
                        </div>
                        <div class="insert__input">
                            <input type="number" class="form-control" name="Price" required="required" value="<?php echo $product['price']; ?>" placeholder="Nhập giá sản phẩm" maxlength="255">
                        </div>
                    </li>
                    <li class="insert__item">
                        <div class="insert__title">
                            <label for="" class="insert__label">Price - Sale</label>
                        </div>
                        <div class="insert__input">
                            <input type="number" class="form-control" name="Price_sale" value="<?php echo $product['price_sale']; ?>" placeholder="Nhập giá sale sản phẩm" maxlength="255">
                        </div>
                    </li>
                    <li class="insert__item">
                        <div class="insert__title">
                            <label for="" class="insert__label">Số lượng</label>
                        </div>
                        <div class="insert__input">
                            <input type="number" class="form-control" name="Quantity" value="<?php echo $product['quantity']; ?>" placeholder="Nhập số lượng" maxlength="255">
                        </div>
                    </li>
                    <li class="insert__item">
                        <div class="insert__title">
                            <label for="" class="insert__label">Category_id</label>
                        </div>
                        <select name="Category_id" class="insert__select">
                            <option value="<?php echo $product['category_id']; ?>"><?php echo $product['category_name']; ?>
                            </option>
                            <?php foreach($categories as $category): ?>
                            <option value="<?= $category['id'] ?>" class="insert__option"><?= $category['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </li>
                </ul>
                <button type="submit" name="sbm" class="btn btn-primary" style="float: left;font-weight: 500;padding: 2px 4px;text-transform: none;">Sửa</button>
                <a href="http://localhost:403/Guitar/index.php?controller=admin&action=show" class="btn btn-primary" style="float: left;font-weight: 500;padding: 2px 4px; margin-left: 10px;text-transform: none;">Quay lại</a>
            </form>
        </div>
    </div>
</section>