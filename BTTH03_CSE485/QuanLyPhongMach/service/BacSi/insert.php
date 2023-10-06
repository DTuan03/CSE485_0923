<?php
require_once APP_ROOT . '/model/BacSi.php';
class Insert
{
    public function insert()
    {
        $tenBacSi = $_POST['tenBacSi'];
        $chuyenKhoa = $_POST['chuyenKhoa'];
        try {
            $conn = mysqli_connect('localhost', 'root', '', 'phongmach');
            $sql = "INSERT INTO bacsi(tenBacSi,chuyenKhoa) VALUES ('{$tenBacSi}','{$chuyenKhoa}')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: " . DOMAIN . "/public/index.php?success");
            }
        } catch (PDOException $e) {
            echo "Them du lieu khong thanh cong";
        }
    }
}
