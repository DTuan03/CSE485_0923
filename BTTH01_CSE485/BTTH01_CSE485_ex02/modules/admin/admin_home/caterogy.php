<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý thể loại</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> 
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<?php
    $conn = mysqli_connect('localhost','root','','btth_cse485_ex02');
?>

<?php
    $sql = "SELECT * FROM `theloai`";
    $result = mysqli_query($conn,$sql);
    $list_tl = array();
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            $list_tl[] = $row;
        }
    }
?>

<body>
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
                                <a href="" class="nav-link font-weight-bold">Trang chủ</a>
                            </li>
                            <li class="nav-item active">
                                <a href="" class="nav-link">Trang ngoài</a>
                            </li>
                            <li class="nav-item active">
                                <a href="" class="nav-link">Thể loại</a>
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

        <div class="row mt-5 mx-5 d-block">
            <div class="col-md-2">
                <button class="btn btn-success">Thêm mới</button>
            </div>

            <?php
                if(!empty($list_tl)){
            ?>
                    <table class="table mt-2 table-borderless table-data">
                        <thead class="border-bottom">
                            <th>#</th>
                            <th>Tên thể loại</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach($list_tl as $theloai){
                            ?>
                                <tr class="border-bottom">
                                <td class="font-weight-bold"><?php echo $theloai['ma_tloai'] ?></td>
                                <td><?php echo $theloai['ten_tloai'] ?></td>
                                <td><i class="fas fa-edit" style="color: blue;"></i></td>
                                <td><i class="fas fa-trash" style="color: blue;"></i></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
            <?php
                }
            ?>

        </div>

        <div class="row">
            <div class="col-md-12 text-center border-top border-2 py-3 font-weight-bold" style="position: fixed; bottom: 0; width: 100%">
                <span>TLU'S MUSIC GARDEN</span>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>