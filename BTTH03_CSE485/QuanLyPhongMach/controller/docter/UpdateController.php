<?php
require_once('../config/config.php');
require_once APP_ROOT . '/service/docter/Update.php';
class UpdateController
{
    public function index()
    {
        $updateService = new Update();
        $updates = $updateService->update();
        include APP_ROOT . '/controller/docter/ViewController.php';
    }
};

$updateController = new UpdateController();
$updateController->index();
