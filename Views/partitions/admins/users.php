<section class="admin__content">
    <div class="categories">
        <div class="content">
            <h3 class="user__title">Danh sách người dùng</h3>
        </div>
    </div>

    <!--  -->
    <div class="content" style="margin-top: 10px">
        <a href="http://localhost:403/Guitar/index.php?controller=admin&action=viewInsertUser" class="btn btn-primary" style="float: right; font-weight: 500;padding: 2px 4px; margin-right: 10px;text-transform: none;">Thêm người dùng</a>
    </div>
    <!--  -->
    <div class="table__admin">
        <div class="content">
            <form action="">
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Full Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Xử lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                        <tr>
                            <td>
                                <span><?= $user['id'] ?></span>
                            </td>
                            <td>
                                <span><?= $user['user_name'] ?></span>
                            </td>
                            <td>
                                <span>
                                    <?= $user['email'] ?>
                                </span>
                            </td>
                            <td>
                                <span><?= $user['password'] ?></span>
                            </td>
                            <td>
                                <span><?= $user['fullname'] ?></span>
                            </td>
                            <td>
                                <span><?= $user['phone'] ?></span>
                            </td>
                            <td>
                                <span><?= $user['address'] ?></span>
                            </td>
                            <td>
                                <a onclick="return Del()" href="http://localhost:403/Guitar/index.php?controller=admin&action=deleteUser&id=<?= $user['id'] ?>">Xóa</a>
                                <a href="http://localhost:403/Guitar/index.php?controller=admin&action=viewUpdateUser&id=<?= $user['id'] ?>">| Sửa</a>
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