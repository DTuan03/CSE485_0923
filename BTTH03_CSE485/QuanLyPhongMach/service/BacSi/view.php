<?php
require_once APP_ROOT.'/model/BacSi.php';

class ViewService{

    public function view(){
        try{
        //Kêt noi database
            $conn = mysqli_connect('localhost','root','','phongmach');

        //Truy van du lieu
            $sql = "SELECT * FROM bacsi";
            $stmt = mysqli_query($conn,$sql);

        //Xu ly ket qua
            $bacSis = [];
            while($row = mysqli_fetch_assoc($stmt)){
                $bacSi = new BacSi($row['id'], $row['tenBacSi'], $row['chuyenKhoa']);
                $bacSis[] = $bacSi;
            }
            return $bacSis;
        } catch (PDOException $e) {
            echo $lop = [];
        }
    }
}