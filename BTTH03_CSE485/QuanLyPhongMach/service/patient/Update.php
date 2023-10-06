<?php
require_once APP_ROOT . '/model/Patient.php';

class Update
{
    public function update()
    {
        if (isset($_POST['id'])) {
            $id = (int)$_POST['id'];
            $namePatient = $_POST['namePatient'];
            $date = $_POST['date'];
            $symptom = $_POST['symptom'];
            $idDocter = $_POST['idDocter'];
        }
        if (isset($_POST['submit'])) {
            try {
                $conn = mysqli_connect('localhost', 'root', '', 'phongmach');
                $sql = "UPDATE benhnhan SET tenBenhNhan='{$namePatient}',ngayKham='{$date}',trieuChung='{$symptom}',idBacSi='{$idDocter}' WHERE id = $id";
                $stmt = mysqli_query($conn, $sql);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
}
