<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="users.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Thư viện CSS Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">

<!-- Thư viện JavaScript Bootstrap (tùy chọn) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-5Bf5b7bUp3GqA/y5k48jL4xofk8B5owXcC+58Cj5aEk4eHcHpiV9tnzP5OKZozf0Av2MaKExfi4kHvllhxXi2Q=="
    crossorigin="anonymous"
    />


</head>
<body>

        <?php

        //Dịch vụ bảo vệ
        session_strart();
        //kiểm tra thông tin đúng thì cho đăng nhập, còn kh giữ nguyên tại
        //ví trí, đưa ra thông báo
        if (!isset($_SESSION['username'])){
            // Chuyển hướng người dùng đến trang đăng nhập
            header("Location: login.php");
            exit; // Kết thúc kịch bản
        }

        //lấy ra mật khẩu băm
        if($stmt->rowCount()>0){
            $user = $stmt->fetch();
            //lay ra mat khau
            $pass_hash = $user[3];
            if(password_verify($pass,$pass_hash)){
                session_start();
                $_SESSUIN['isLogin'] = $user;
                header(header."Location: user_management.php");
            }
            else{
                header(header."Location:login.php?error=not-matched-password");
            }
        }

        ?>
    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                <span>Fiter</span>
            </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <div class="row partSec">
                        <div class="col-md-3">
                            <input type="text" name="" placeholder="Email" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input type="text" name="" placeholder="Mobile" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <br>
                            <select name="" class="form-control">
                                <option value="0">Select Group</option>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <br>
                            <button type="button" class="btn btn-success filter-form"><i class="bi bi-search"></i>Filter</button>
                        </div>
                        <div class="col-md-2">
                            <i class="bi bi-arrow-up-circle"></i><br>
                            <br>
                            <button type="button" class="btn btn-success clear-form">Clear</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <div class="container mt-5">
        <div class="form-group">
            <label for="datePicker">Ngày tháng năm:</label>
            <!-- Sử dụng input với kiểu date để tạo ô điền ngày tháng -->
            <input type="date" class="form-control" id="datePicker">
        </div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                <th class="col-3">Column 1</th>
                <th class="col-6">Column 2</th>
                <th class="col-3">Column 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="col-3">We Heard You Wanted to Add SS…</td>
                <td class="col-6">Data 2</td>
                <td class="col-3">Data 3</td>
                </tr>
                <!--Thêm hàng dữ liệu khác-->
            </tbody>
        </table>
    </div>
    <div class="rounded-circle w-50 h-50 bg-info">
        <p>Text or Content</p>
    </div>

    <i class="fas fa-lock bg-info"></i> <!-- Biểu tượng khóa (quyền truy cập bị khóa) -->
    <i class="fas fa-unlock"></i> <!-- Biểu tượng mở khóa (quyền truy cập đã mở) -->


    <!-- Sử dụng Bootstrap JavaScript (nếu cần thiết) -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>