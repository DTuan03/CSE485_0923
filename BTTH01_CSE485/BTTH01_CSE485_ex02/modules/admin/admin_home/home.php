<?php
    require '../inc/header.php'
?>

<?php
$sql1 = "SELECT `ma_tloai` FROM `theloai`";
$sql2 = "SELECT `ma_tgia` FROM `tacgia`";
$sql3 = "SELECT `ma_bviet` FROM `baiviet`";
$sql4 = "SELECT `username` FROM `user`";

$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);
$result4 = mysqli_query($conn, $sql4);

$list = array();
$num_rows1 = mysqli_num_rows($result1);
$num_rows2 = mysqli_num_rows($result2);
$num_rows3 = mysqli_num_rows($result3);
$num_rows4 = mysqli_num_rows($result4);


?>

<div class="row mt-5 d-block text-center">
            <div class="col-md-2 text-center rounded mr-4 d-inline-block" style="border: 1px solid darkgray;">
                <p class=" text-info">Người dùng</p>
                <p class="display-6"><?php echo $num_rows4?></p>
            </div>
            <div class="col-md-2 text-center rounded mr-4 d-inline-block" style="border: 1px solid darkgray;">
                <p class=" text-info">Thể loại</p>
                <p class="display-6"><?php echo $num_rows1?></p>
            </div>
            <div class="col-md-2 text-center rounded mr-4 d-inline-block" style="border: 1px solid darkgray;">
                <p class=" text-info">Tác giả</p>
                <p class="display-6"><?php echo $num_rows2?></p>
            </div>
            <div class="col-md-2 text-center rounded mr-4 d-inline-block" style="border: 1px solid darkgray;">
                <p class=" text-info">Bài viết</p>
                <p class="display-6"><?php echo $num_rows3?></p>
            </div>
        </div>