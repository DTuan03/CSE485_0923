<?php
require_once APP_ROOT . '/view/inc/header.php';
?>
<div class="row mx-3">
    <h3 class="text-center my-3">Quản lý danh sách bệnh nhân</h3>
    <a href="<?= DOMAIN . '/public/index.php?mod=view&route=benhNhan&act=insert' ?>"><button class="mb-3 bg-success text-white border-0 rounded-2">Thêm mới</button></a>
    <table class="table mr-5">
        <thead>
            <tr>
                <th>Mã bệnh nhân</th>
                <th>Tên bệnh nhân</th>
                <th>Ngày khám</th>
                <th>Triệu chứng</th>
                <th>Mã bác sĩ phụ trách</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($benhNhans as $benhNhan) {
            ?>
                <tr>
                    <td><?= $benhNhan->getId() ?></td>
                    <td><?= $benhNhan->getTenbenhNhan() ?></td>
                    <td><?= $benhNhan->getNgayKham() ?></td>
                    <td><?= $benhNhan->getTrieuChung() ?></td>
                    <td><?= $benhNhan->getIdBacSi() ?></td>
                    <td><a href="<?= DOMAIN . '/public/index.php?mod=view&route=BenhNhans&act=update&id=' . $benhNhan->getId() . '&tenBenhNhan=' . $benhNhan->getTenbenhNhan() . '$idBacSi'.$benhNhan->getIdBacSi()  ?>"><i class="bi bi-pencil-square"></i></a>
                        <button class="bg-white rounded-0 border-0" onclick="Del();"><a href="<?= DOMAIN . '/public/index.php?mod=controller&route=BenhNhan&act=remove&id=' . $benhNhan->getId() ?>"><i class="bi bi-trash3"></i></a></button>
                    </td>
                </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<script>
    function Del(name){
        return confirm("Bạn có chắc chắn muốn xóa bệnh nhân không?");
    }
</script>
<?php
require_once APP_ROOT . '/view/inc/footer.php';
?>