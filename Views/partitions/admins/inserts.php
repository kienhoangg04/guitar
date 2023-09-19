<section class="admin__content">
    <div class="categories">
        <div class="content">
            <h3 class="user__title">Thêm sản phẩm</h3>
        </div>
    </div>

    <!--  -->
    <div class="table__admin">
        <div class="content">
            <form action="http://localhost:403/Guitar/index.php?controller=admin&action=insert" method="POST" enctype="multipart/form-data">
                <ul class="insert__lists">
                    <li class="insert__item">
                        <div class="insert__title">
                            <label for="" class="insert__label">Title</label>
                        </div>
                        <div class="insert__input">
                            <input type="text" class="form-control" name="Title" required="required" values placeholder="Nhập tên sản phẩm" maxlength="255">
                        </div>
                    </li>
                    <li class="insert__item">
                        <div class="insert__title">
                            <label for="" class="insert__label">Image</label>
                        </div>
                        <div class="insert__input">
                            <input type="FILE" name="Image" class="form-control" values placeholder="image.jpg" maxlength="255">
                        </div>
                    </li>
                    <li class="insert__item">
                        <div class="insert__title">
                            <label for="" class="insert__label">Price</label>
                        </div>
                        <div class="insert__input">
                            <input type="number" class="form-control" name="Price" required="required" values placeholder="Nhập giá sản phẩm" maxlength="255">
                        </div>
                    </li>
                    <li class="insert__item">
                        <div class="insert__title">
                            <label for="" class="insert__label">Price - Sale</label>
                        </div>
                        <div class="insert__input">
                            <input type="number" class="form-control" name="Price_sale" values placeholder="Nhập giá sale sản phẩm" maxlength="255">
                        </div>
                    </li>
                    <li class="insert__item">
                        <div class="insert__title">
                            <label for="" class="insert__label">Số lượng</label>
                        </div>
                        <div class="insert__input">
                            <input type="number" class="form-control" name="Quantity" values placeholder="Nhập số lượng" maxlength="255">
                        </div>
                    </li>
                    <li class="insert__item">
                        <div class="insert__title">
                            <label for="" class="insert__label">Category_Id</label>
                        </div>
                        <select name="Category_id" class="insert__select">
                            <option value="">Chọn danh mục</option>
                            <?php foreach($categories as $category): ?>
                            <option value="<?= $category['id'] ?>" class="insert__option"><?= $category['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </li>
                </ul>
                <button name="sbm" type="submit" class="btn btn-primary" style="float: left;font-weight: 500;padding: 2px 4px;text-transform: none;">Thêm</button>
                <a href="http://localhost:403/Guitar/index.php?controller=admin&action=show" class="btn btn-primary" style="float: left;font-weight: 500;padding: 2px 4px; margin-left: 10px;text-transform: none;">Quay lại</a>
            </form>
        </div>
    </div>
</section>