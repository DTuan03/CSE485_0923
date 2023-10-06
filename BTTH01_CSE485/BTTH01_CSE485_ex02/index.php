<?php
require 'modules/home/inc/header.php';
?>

<?php
$mod = !empty($_GET['mod'])?$_GET['mod']:'home';
$act = !empty($_GET['act'])?$_GET['act']:'home';

$path = "modules/{$mod}/{$act}.php";

require $path;
?>

<?php
require 'modules/home/inc/footer.php';
?>