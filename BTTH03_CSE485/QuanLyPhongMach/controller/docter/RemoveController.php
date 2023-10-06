<?php
require_once('../config/config.php');
require_once APP_ROOT . '/service/docter/Remove.php';
class RemoveController
{
    public function index()
    {
        $removeService = new Remove();
        $removes = $removeService->remove();
        include APP_ROOT . '/controller/docter/ViewController.php';
    }
};

$remove = new RemoveController();
$remove->index();
