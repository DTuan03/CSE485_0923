<?php
    require 'inc/header.php';
?>

<?php
$mod = !empty($_GET['mod'])?$_GET['mod']:'admin_home';
$act = !empty($_GET['act'])?$_GET['act']:'home';

$path = "admin/{$mod}/{$act}.php";

require $path;
?>


<?php
    require 'inc/footer.php';
?>