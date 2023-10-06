<?php
    require_once('../config/config.php');
    require_once APP_ROOT.'/service/BacSi/update.php';
    class UpdateController{
        public function index(){
            $updateService = new Update();
            $updates = $updateService->update();
            include APP_ROOT.'/controller/BacSi/view.php';
        }
    };
    
$updateController = new UpdateController;
$updateController->index();