<?php
require_once('../config/config.php');
require_once APP_ROOT . '/service/BacSi/view.php';
class ViewController
{
    public function index()
    {
        $bacSiService = new ViewService();
        $bacSis = $bacSiService->view();
        include APP_ROOT . '/view/BacSi/index.php';
    }
};

$ViewController = new ViewController;
$ViewController->index();
