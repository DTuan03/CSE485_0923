<?php
$sql = "SELECT `tieude` FROM `baiviet` LIMIT 5";
$result = mysqli_query($conn,$sql);
$list = array();
// $row[] = mysqli_fetch_row($result);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $list[] = $row;
    }
}
?>
<div class="row">
            <div class="col-md-12 p-0">
                <img src="img/anh_nav.PNG" alt="" class="img-fluid w-100">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mt-2 mb-2">
                <p class="text-center text-info">TOP BÀI HÁT YÊU THÍCH</p>
            </div>
        </div>
        <div class="row mb-2">
                <?php
                    if(!empty($list)){
                    foreach($list as $chitiet){
                ?>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="product-item border pl-2 rounded-2">
                        <div class="">
                            <img class="img-fluid rounded-2" src="../../img/cayLa.jpg" alt="">
                        </div>
                        <div class="text-center my-2">
                            <a href="?mod=home&act=detail" class="text-decoration-none"><?php echo $chitiet['tieude']?></a>
                        </div>
                    </div>
                </div>

                <?php
                     }
                    }
                ?>
        </div>