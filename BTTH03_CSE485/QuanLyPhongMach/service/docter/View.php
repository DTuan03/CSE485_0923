<?php
require_once APP_ROOT.'/model/Docter.php';

class View{

    public function view(){
        try{
            $conn = mysqli_connect('localhost','root','','phongmach');
            $sql = "SELECT * FROM bacsi";
            $stmt = mysqli_query($conn,$sql);
            $docters = [];
            while($row = mysqli_fetch_assoc($stmt)){
                $docter = new Docter($row['id'], $row['tenBacSi'], $row['chuyenKhoa']);
                $docters[] = $docter;
            }
            return $docters;
        } catch (PDOException $e) {
            echo $docter = [];
        }
    }
}