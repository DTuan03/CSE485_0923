<?php
require_once APP_ROOT . '/view/inc/header.php';
?>
<div class="container-fliud">
    <div class="row mt-4 d-block text-center">
        <div class="col-md-4 d-inline-block">
            <h4 class="text-center text-success text-uppercase">Nhập thông tin bác sĩ cần thêm</h4>
            <form action="<?= DOMAIN . '/public/index.php?mod=controller&route=BacSi&act=insert' ?>" method="POST" class="mt-4">
                <div class="mb-3">
                    <label for="" class="form-label">Tên bác sĩ</label>
                    <input type="text" name="tenBacSi" class="w-75">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Chuyên khoa</label>
                    <input type="text" name="chuyenKhoa" class="w-75">
                </div>
                <button type="submit" name="submit" class="btn mt-3 border-success rounded-2 float-right mr-4">Thêm</button>
            </form>
            <button type="submit" name="submit" onclick="goBack()" class="btn mt-3 border-success rounded-2 float-right mr-4">Quay lại</button>
            <script>
                function goBack() {
                    // Thực hiện các tác vụ khi button được bấm
                    window.location.href = "<?= DOMAIN . '/public/index.php?mod=controller&route=BacSi&act=view' ?>";
                }
            </script>
        </div>
    </div>

    <?php
    require_once APP_ROOT . '/view/inc/footer.php';
    ?>