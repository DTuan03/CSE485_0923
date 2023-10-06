<?php
require_once APP_ROOT . '/model/Docter.php';

class Update
{
    public function update()
    {
        if (isset($_POST['id'])) {
            $id = (int)$_POST['id'];
            $nameDocter = $_POST['nameDocter'];
            $specialty = $_POST['specialty'];
        }
        if (isset($_POST['submit'])) {
            try {
                $conn = mysqli_connect('localhost', 'root', '', 'phongmach');
                $sql = "UPDATE bacsi SET tenBacSi='{$nameDocter}', chuyenKhoa='{$specialty}' WHERE id = {$id}";
                $stmt = mysqli_query($conn, $sql);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
}
