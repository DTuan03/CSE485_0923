<?php
require_once APP_ROOT . '/model/BenhNhan.php';
class Insert
{
    public function insert()
    {
        $tenBenhNhan = $_POST['tenBenhNhan'];
        $ngayKham = $_POST['ngayKham'];
        $trieuChung = $_POST['trieuChung'];
        $idBacSi = $_POST['idBacSi'];
        try {
            $conn = mysqli_connect('localhost', 'root', '', 'phongmach');
            $sql = "INSERT INTO benhnhan(tenBenhNhan, ngayKham, trieuChung, idBacSi) VALUES ('{$tenBenhNhan}','{$ngayKham}','{$trieuChung}','{$idBacSi}'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: " . DOMAIN . "/public/index.php?success");
            }
        } catch (PDOException $e) {
            echo "Them du lieu khong thanh cong";
        }
    }
}
