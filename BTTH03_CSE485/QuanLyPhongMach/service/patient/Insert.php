<?php
require_once APP_ROOT . '/model/Patient.php';
class Insert
{
    public function insert()
    {
        $nameDocter = $_POST['nameDocter'];
        $date = $_POST['date'];
        $symptom = $_POST['symptom'];
        $idDocter = $_POST['idDocter'];
        try {
            $conn = mysqli_connect('localhost', 'root', '', 'phongmach');
            $sql = "INSERT INTO benhnhan(tenBenhNhan, ngayKham, trieuChung, idBacSi) VALUES ('{$nameDocter}','{$date}','{$symptom}','{$idDocter}'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: " . DOMAIN . "/public/Index.php?success");
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
