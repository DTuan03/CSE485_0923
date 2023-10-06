<?php
require_once APP_ROOT.'/model/Patient.php';

class View{

    public function view(){
        try{
        //Kêt noi database
            $conn = mysqli_connect('localhost','root','','phongmach');

        //Truy van du lieu
            $sql = "SELECT * FROM benhnhan";
            $stmt = mysqli_query($conn,$sql);

        //Xu ly ket qua
            $patients = [];
            while($row = mysqli_fetch_assoc($stmt)){
                $patient = new Patient($row['id'], $row['tenBenhNhan'], $row['ngayKham'],$row['trieuChung'], $row['idBacSi']);
                $patients[] = $patient;
            }
            return $patients;
        } catch (PDOException $e) {
            echo $benhNhan = [];
        }
    }
}