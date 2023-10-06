<?php
require_once('../config/config.php');
require_once APP_ROOT . '/service/patient/Update.php';
class Update
{
    public function index()
    {
        $updateService = new Update();
        $updates = $updateService->update();
        include APP_ROOT . '/controller/patient/View.php';
    }
};

$updateController = new Update;
$updateController->index();
