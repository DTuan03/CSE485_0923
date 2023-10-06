<?php
require_once('../config/config.php');
require_once APP_ROOT . '/service/BenhNhan/view.php';
class ViewController
{
    public function index()
    {
        $viewService = new ViewService();
        $views = $viewService->view();
        include APP_ROOT . '/view/BenhNhan/index.php';
    }
};

$ViewController = new ViewController;
$ViewController->index();
