<?php
require_once APP_ROOT . '/model/Docter.php';
class Insert
{
    public function insert()
    {
        $nameDocter = $_POST['nameDocter'];
        $specialty = $_POST['specialty'];
        try {
            $conn = mysqli_connect('localhost', 'root', '', 'phongmach');
            $sql = "INSERT INTO bacsi(tenBacSi,chuyenKhoa) VALUES ('{$nameDocter}','{$specialty}')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: " . DOMAIN . "/public/Index.php?success");
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
