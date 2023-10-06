<?php

    class BenhNhan{
        private $id;
        private $tenBenhNhan;
        private $ngayKham;
        private $trieuChung;
        private $idBacSi;

        public function __construct($id,$tenBenhNhan,$ngayKham,$trieuChung,$idBacSi)
        {
            $this->id = $id;
            $this->tenBenhNhan = $tenBenhNhan;
            $this->ngayKham = $ngayKham;
            $this->trieuChung = $trieuChung;
            $this->idBacSi = $idBacSi;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }

        public function setTenBenhNhan($tenBenhNhan){
            $this->tenBenhNhan = $tenBenhNhan;
        }

        public function getTenBenhNhan(){
            return $this->tenBenhNhan;
        }

        public function setNgayKham($ngayKham){
            $this->ngayKham = $ngayKham;
        }

        public function getNgayKham(){
            return $this->ngayKham;
        }

        public function setTrieuChung($trieuChung){
            $this->trieuChung = $trieuChung;
        }

        public function getTrieuChung(){
            return $this->trieuChung;
        }
        public function setIdBacSi($idBacSi){
            $this->idBacSi = $idBacSi;
        }

        public function getIdBacSi(){
            return $this->idBacSi;
        }
    }