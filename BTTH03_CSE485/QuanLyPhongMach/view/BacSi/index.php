<?php
require_once APP_ROOT . '/view/inc/header.php';
?>
<div class="row mx-3">
    <h3 class="text-center my-3">Quản lý danh bác sĩ</h3>
    <a href="<?= DOMAIN . '/public/index.php?mod=view&route=BacSi&act=insert' ?>"><button class="mb-3 bg-success text-white border-0 rounded-2">Thêm mới</button></a>
    <table class="table mr-5">
        <thead>
            <tr>
                <th>Mã bác sĩ</th>
                <th>Tên bác sĩ</th>
                <th>Chuyên khoa</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($bacSis as $bacSi) {
            ?>
                <tr>
                    <td><?= $bacSi->getId() ?></td>
                    <td><?= $bacSi->getTenBacSi() ?></td>
                    <td><?= $bacSi->getChuyenKhoa() ?></td>
                    <td><a href="<?= DOMAIN . '/public/index.php?mod=view&route=BacSi&act=update&id=' . $bacSi->getId() . '&tenBacSi=' . $bacSi->getTenbacSi() . '&chuyenKhoa=' . $bacSi->getChuyenKhoa() ?>"><i class="bi bi-pencil-square"></i></a>
                        <button class="bg-white rounded-0 border-0 color-info " onclick="Del();"><i class="bi bi-trash3"></i></button>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<script>
    function Del(){
        var confirmation = confirm("Bạn có chắc chắn muốn xóa không?");
        if (confirmation) {
            window.location.href = "<?= DOMAIN . '/public/index.php?mod=controller&route=BacSi&act=remove&id=' . $bacSi->getId() ?>";
        } 
    }
</script>
<?php
require_once APP_ROOT . '/view/inc/footer.php';
?>