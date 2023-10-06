<?php
require_once APP_ROOT . '/model/Docter.php';

class Remove
{
    public function remove()
    {
        if (isset($_GET['id']))
            $id = $_GET['id'];
        try {
            $conn = mysqli_connect('localhost', 'root', '', 'phongmach');;
            $sql = "DELETE FROM bacsi WHERE id = $id";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: " . DOMAIN . "/public/Index.php?success=$id");
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
