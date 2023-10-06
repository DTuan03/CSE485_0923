<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> 
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body>
    <?php
    $conn = mysqli_connect('localhost','root','','btth_cse485_ex02');
    ?>
    <div class="container-fluid">
        <div class="row sticky-top">
            <div class="navcontent p-0 shadow">
                <nav class="navbar navbar-expand-lg bg-light navbar-light">
                    <span class="navbar-brand nav-link pl-4" style="width: 200px;"><img src="img/1music-for-life-logo.png" alt="" style="width: 100%; height: 100%;"></span>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#my_navbar" aria-expanded="false" aria-label="toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse" id="my_navbar">
                        <ul class="navbar-nav">
                            <!-- kich hoat phan tu -->
                            <li class="nav-item active">
                                <a href="?mod=home&act=home" class="nav-link font-weight-bold">TRANG CHỦ</a>
                            </li>
                            <li class="nav-item active mr-auto">
                                <a href="?mod=home&act=login" class="nav-link">ĐĂNG NHẬP</a>
                            </li>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-3 mt-4 mb-4">
                        <input type="text" placeholder="Nội dung cần tìm" class="boder">
                        <button class="border-1 border-info text-info rounded-2 bg-white">Tìm</button>
                    </div>
                </nav>
            </div>
        </div>