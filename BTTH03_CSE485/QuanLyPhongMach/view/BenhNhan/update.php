<?php
require_once APP_ROOT . '/view/inc/header.php';
?>
<div class="container-fliud">
    <div class="row mt-4 d-block text-center">
        <div class="col-md-4 d-inline-block">
            <h4 class="text-center text-success text-uppercase">Sửa thông tin bệnh nhân</h4>
            <form action="<?= DOMAIN . '/public/index.php?mod=controller&route=Studentss&act=update' ?>" method="POST" class="mt-4">
                <div class="mb-3">
                    <label for="" class="form-label">Mã bệnh nhân</label>
                    <input type="text" name="idBenhNhan" class="w-75" value="<?= $_GET['id'] ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tên bệnh nhân</label>
                    <input type="text" name="tenBenhNhan" class="w-75" value="<?= $_GET['tenBenhNhan'] ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Mã bác sĩ đảm nhận</label>
                    <input type="text" name="idBacSi" class="w-75" value="<?= $_GET['idBacSi'] ?>">
                </div>
                <button type="submit" name="submit" class="btn mt-3 border-success rounded-2 float-right mr-4">Sửa</button>
            </form>
            <button type="submit" name="submit" onclick="quaylai()" class="btn mt-3 border-success rounded-2 float-right mr-4">Quay lại</button>
            <script>
                function quaylai() {
                    // Thực hiện các tác vụ khi button được bấm
                    window.location.href = "<?= DOMAIN . '/public/index.php?mod=controller&route=BenhNhan&act=view' ?>";
                }
            </script>
        </div>
    </div>
<?php
require_once APP_ROOT . '/view/inc/footer.php';
?>