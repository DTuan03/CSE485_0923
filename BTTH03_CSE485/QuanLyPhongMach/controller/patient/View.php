<?php
require_once('../config/config.php');
require_once APP_ROOT . '/service/patient/View.php';
class View
{
    public function index()
    {
        $viewService = new View();
        $views = $viewService->view();
        include APP_ROOT . '/view/patient/Index.php';
    }
};

$ViewController = new View();
$ViewController->index();
