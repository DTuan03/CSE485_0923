<?php
    require_once('../config/config.php');
    require_once APP_ROOT.'/service/BenhNhan/remove.php';
    class RemoveController{
        public function index(){
            $removeService = new Remove();
            $removes = $removeService->remove();
            include APP_ROOT.'/controller/BenhNhan/view.php';
        }
    };
    
$RemoveController = new RemoveController;
$RemoveController->index();
