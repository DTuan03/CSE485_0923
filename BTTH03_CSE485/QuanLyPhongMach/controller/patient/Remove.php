<?php
require_once('../config/config.php');
require_once APP_ROOT . '/service/patient/Remove.php';
class Remove
{
    public function index()
    {
        $removeService = new Remove();
        $removes = $removeService->remove();
        include APP_ROOT . '/controller/patient/View.php';
    }
};

$RemoveController = new Remove();
$RemoveController->index();
