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
                                <a href="" class="nav-link">Trang chủ</a>
                            </li>
                            <li class="nav-item active">
                                <a href="" class="nav-link">Trang ngoài</a>
                            </li>
                            <li class="nav-item active">
                                <a href="" class="nav-link font-weight-bold">Thể loại</a>
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
            <p class="font-weight-bold text-center display-6">SỬA THÔNG TIN THỂ LOẠI</p>
            <div class="input-group mb-3">
                <span class="input-group-text">Mã thể loại</span>
                <input type="text" class="form-control" placeholder="">
            </div>
            <div class="input-group">
                <span class="input-group-text">Tên thể loại</span>
                <input type="text" class="form-control" placeholder="">
            </div>
            <div class="d-flex justify-content-end mt-3">
                <button class="btn btn-success">Lưu lại</button>
                <p class="m-1"></p>
                <button class="btn btn-warning">Quay lại</button>
            </div>
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