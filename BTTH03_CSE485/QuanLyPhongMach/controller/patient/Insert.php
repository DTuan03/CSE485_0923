<?php
require_once('../config/config.php');
require_once APP_ROOT . '/service/patient/Insert.php';
class Insert
{
    public function index()
    {
        require_once APP_ROOT . '/view/patient/Insert.php';
        $insertService = new Insert();
        $insert = $insertService->insert();
    }
};

$InsertController = new Insert();
$InsertController->index();
