<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm thể loại</title>
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
        <div class="row">
            <div class="navcontent p-0 shadow">
                <nav class="navbar navbar-expand-lg bg-light navbar-light">
                    <span class="navbar-brand nav-link pl-4">Administration</span>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#my_navbar" aria-expanded="false" aria-label="toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse" id="my_navbar">
                        <ul class="navbar-nav">
                            <!-- kich hoat phan tu -->
                            <li class="nav-item active">
                                <a href="?mod=admin_home&act=home" class="nav-link">Trang chủ</a>
                            </li>
                            <li class="nav-item active">
                                <a href="?mod=admin_home&act=home" class="nav-link">Trang ngoài</a>
                            </li>
                            <li class="nav-item active">
                                <a href="?mod=admin_home&act=caterogy" class="nav-link">Thể loại</a>
                            </li>
                            <li class="nav-item active">
                                <a href="" class="nav-link">Tác giả</a>
                            </li>
                            <li class="nav-item active">
                                <a href="" class="nav-link">Bài viết</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>