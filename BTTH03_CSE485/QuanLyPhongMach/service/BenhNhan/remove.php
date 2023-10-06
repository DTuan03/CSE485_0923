<?php
require_once APP_ROOT . '/model/BenhNhan.php';

class Remove
{
    public function remove()
    {
        if (isset($_GET['id']))
            $id = $_GET['id'];
        try {
            //Buoc 1: Ket noi DBServer
            $conn = mysqli_connect('localhost', 'root', '', 'phongmach');;
            //Buoc 2: Thuc hien truy van
            $sql = "DELETE FROM lop WHERE id = $id";
            $result = mysqli_query($conn,$sql);
            //Buoc 3: Xử lý kết quả
            if ($result) {
                header("Location: " . DOMAIN . "/public/index.php?success=$id");
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
