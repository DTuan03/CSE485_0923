<?php
require_once APP_ROOT . '/view/inc/header.php';
?>
<div class="container-fliud">
    <div class="row mt-4 d-block text-center">
        <div class="col-md-4 d-inline-block">
            <h4 class="text-center text-success text-uppercase">Sửa thông tin bác sĩ</h4>
            <form action="<?= DOMAIN . '/public/index.php?mod=controller&route=BacSi&act=update' ?>" method="POST" class="mt-4">
                <div class="mb-3">
                    <label for="" class="form-label">Mã bác sĩ</label>
                    <input type="text" name="id" class="w-75" value="<?= $_GET['id'] ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tên bác sĩ</label>
                    <input type="text" name="tenBacSi" class="w-75" value="<?= $_GET['tenBacSi'] ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Chuyên khoa</label>
                    <input type="text" name="chuyenKhoa" class="w-75" value="<?= $_GET['chuyenKhoa'] ?>">
                </div>
                <button type="submit" name="submit" class="btn mt-3 border-success rounded-2 float-right mr-4">Sửa</button>
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