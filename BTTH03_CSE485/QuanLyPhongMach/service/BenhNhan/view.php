<?php
require_once APP_ROOT.'/model/BenhNhan.php';

class ViewService{

    public function view(){
        try{
        //Kêt noi database
            $conn = mysqli_connect('localhost','root','','phongmach');

        //Truy van du lieu
            $sql = "SELECT * FROM benhnhan";
            $stmt = mysqli_query($conn,$sql);

        //Xu ly ket qua
            $benhNhans = [];
            while($row = mysqli_fetch_assoc($stmt)){
                $benhNhan = new BenhNhan($row['id'], $row['tenBenhNhan'], $row['ngayKham'],$row['trieuChung'], $row['idBacSi']);
                $benhNhans[] = $benhNhan;
            }
            return $benhNhans;
        } catch (PDOException $e) {
            echo $benhNhan = [];
        }
    }
}