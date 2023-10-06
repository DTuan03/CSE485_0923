<?php
require_once APP_ROOT . '/model/BacSi.php';

class Update
{
    public function update()
    {
        if (isset($_POST['id'])) {
            $id = (int)$_POST['id'];
            $tenBacSi = $_POST['tenBacSi'];
            $chuyenKhoa = $_POST['chuyenKhoa'];
        }
        if (isset($_POST['submit'])) {
            try {
                $conn = mysqli_connect('localhost', 'root', '', 'phongmach');
                $sql = "UPDATE bacsi SET tenBacSi='{$tenBacSi}', chuyenKhoa='{$chuyenKhoa}' WHERE id = {$id}";
                $stmt = mysqli_query($conn, $sql);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
}
