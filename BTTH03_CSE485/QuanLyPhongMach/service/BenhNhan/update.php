<?php
require_once APP_ROOT . '/model/BenhNhan.php';

class Update
{
    public function update()
    {
        if (isset($_POST['id'])) {
            $id = (int)$_POST['id'];
            $tenBenhNhan = $_POST['tenBenhNhan'];
            $ngayKham = $_POST['ngayKham'];
            $trieuChung = $_POST['trieuChung'];
            $idBacSi = $_POST['idBacSi'];
        }
        if (isset($_POST['submit'])) {
            try {
                //Buoc 1: Ket noi DBServer
                $conn = mysqli_connect('localhost', 'root', '', 'phongmach');

                // $sql = "UPDATE lop SET tenLop = '$tenLop' WHERE id='$id'";
                $sql = "UPDATE benhnhan SET tenBenhNhan='{$tenBenhNhan}',ngayKham='{$ngayKham}',trieuChung='{$trieuChung}',idBacSi='{$idBacSi}' WHERE id = $id";
                $stmt = mysqli_query($conn, $sql);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
}
