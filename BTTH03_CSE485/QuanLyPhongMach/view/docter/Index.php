<?php
require_once APP_ROOT . '/inc/header.php';
?>
<div class="row mx-3">
    <h3 class="text-center my-3">Quản lý danh bác sĩ</h3>
    <a href="<?= DOMAIN . '/public/Index.php?mod=view&route=docter&act=Insert' ?>"><button class="mb-3 bg-success text-white border-0 rounded-2">Thêm mới</button></a>
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
            foreach ($views as $docter) {
            ?>
                <tr>
                    <td><?= $docter->getId() ?></td>
                    <td><?= $docter->getNamedocter() ?></td>
                    <td><?= $docter->getSpecialty() ?></td>
                    <td><a href="<?= DOMAIN . '/public/Index.php?mod=view&route=docter&act=Update&id=' . $docter->getId() . '&nameDocter=' . $docter->getNameDocter() . '&specialty=' . $docter->getSpecialty() ?>"><i class="bi bi-pencil-square"></i></a>
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
            window.location.href = "<?= DOMAIN . '/public/Index.php?mod=controller&route=docter&act=Remove&id=' . $docter->getId() ?>";
        } 
    }
</script>
<?php
require_once APP_ROOT . '/inc/footer.php';
?>