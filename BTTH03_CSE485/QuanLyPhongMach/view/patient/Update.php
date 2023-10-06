<?php
require_once APP_ROOT . '/inc/header.php';
?>
<div class="container-fliud">
    <div class="row mt-4 d-block text-center">
        <div class="col-md-4 d-inline-block">
            <h4 class="text-center text-success text-uppercase">Sửa thông tin bệnh nhân</h4>
            <form action="<?= DOMAIN . '/public/Index.php?mod=controller&route=patient&act=Update' ?>" method="POST" class="mt-4">
                <div class="mb-3">
                    <label for="" class="form-label">Mã bệnh nhân</label>
                    <input type="text" name="idPatient" class="w-75" value="<?= $_GET['id'] ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tên bệnh nhân</label>
                    <input type="text" name="namePatient" class="w-75" value="<?= $_GET['namePatient'] ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Mã bác sĩ đảm nhận</label>
                    <input type="text" name="idDocter" class="w-75" value="<?= $_GET['idDocter'] ?>">
                </div>
                <button type="submit" name="submit" class="btn mt-3 border-success rounded-2 float-right mr-4">Sửa</button>
            </form>
            <button type="submit" name="submit" onclick="goBack()" class="btn mt-3 border-success rounded-2 float-right mr-4">Quay lại</button>
            <script>
                function goBack() {
                    // Thực hiện các tác vụ khi button được bấm
                    window.location.href = "<?= DOMAIN . '/public/Index.php?mod=controller&route=patient&act=View' ?>";
                }
            </script>
        </div>
    </div>
<?php
require_once APP_ROOT . '/inc/footer.php';
?>