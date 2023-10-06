<?php
require_once('../config/config.php');
require_once APP_ROOT . '/service/docter/Insert.php';
class InsertController
{
    public function index()
    {
        require_once APP_ROOT . '/view/docter/Insert.php';
        $insertService = new Insert();
        $insert = $insertService->insert();
    }
};

$insert = new InsertController();
$insert->index();
