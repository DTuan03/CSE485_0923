<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 my-3 rounded-2" style="background-color: #999999;">
        <div class="row text-white shadow-sm pb-2">
            <span style="font-size: 150%;">Sign Up</span>
        </div>
        <div class="row">
            <form action="?mod=home&act=login" method="POST">
                <div class="form-group">
                    <label for="fullname">Họ tên</label>
                    <input type="fullname" name="fullname" class="form-control">
                    <label for="user">Tên người dùng</label>
                    <input type="user" name="user" class="form-control">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                    <div class="d-flex justify-content-end"> <!-- Sử dụng class "justify-content-end" -->
                        <button type="submit" class="btn btn-warning mt-4">Sign Up</a></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>