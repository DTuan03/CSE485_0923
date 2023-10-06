<?php
require_once('../config/config.php');
require_once APP_ROOT . '/service/docter/View.php';
class ViewController
{
    public function index()
    {
        $viewService = new View();
        $views = $viewService->view();
        include APP_ROOT . '/view/docter/Index.php';
    }
};

$viewController = new ViewController();
$viewController->index();
