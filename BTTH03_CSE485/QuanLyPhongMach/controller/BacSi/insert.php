<?php
require_once('../config/config.php');
require_once APP_ROOT . '/service/BacSi/insert.php';
class InsertController
{
    public function index()
    {
        require_once APP_ROOT . '/view/BacSi/insert.php';
        $insertService = new Insert();
        $insert = $insertService->insert();
    }
};

$InsertController = new InsertController;
$InsertController->index();
