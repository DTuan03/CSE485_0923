<?php
require_once APP_ROOT . '/view/inc/header.php';
?>
<div class="container-fliud">
    <div class="row mt-4 d-block text-center">
        <div class="col-md-4 d-inline-block">
            <h4 class="text-center text-success text-uppercase">Nhập thông tin bệnh nhân cần thêm</h4>
            <form action="<?= DOMAIN . '/public/index.php?mod=controller&route=Students&act=insert' ?>" method="POST" class="mt-4">
                <div class="mb-3">
                    <label for="" class="form-label">Tên bệnh nhân</label>
                    <input type="text" name="tenBenhNhan" class="w-50"><br>
                    <label for="" class="form-label">Ngày khám</label>
                    <input type="email" name="ngayKham" class="w-50"><br>
                    <label for="" class="form-label">Triệu chứng</label>
                    <input type="date" name="trieuChung" class="w-50"><br>
                    <label for="" class="form-label">Mã bác sĩ đảm nhận</label>
                    <input type="text" name="idBacSi" class="w-50">
                </div>
                <button type="submit" name="submit" class="btn mt-3 border-success rounded-2 float-right mr-4">Thêm</button>
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