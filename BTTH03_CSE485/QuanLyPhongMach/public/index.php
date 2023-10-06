<?php
require_once('../config/config.php');

$mod = isset($_GET['mod'])?$_GET['mod']:'controller';
$route = isset($_GET['route'])?$_GET['route']:'BacSi';
$act = isset($_GET['act'])?$_GET['act']:'view';

$path = APP_ROOT.'/'.$mod.'/'.$route.'/'.$act.'.php';

require_once ($path);
