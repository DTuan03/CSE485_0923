<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body style="background-color: #dbe3e0;">
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 mb-5 bg-body-tertiary rounded">
                <div class="container-fluid">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active fw-bold" aria-current="page" href="<?php echo DOMAIN . "/public/indexDoctor.php" ?>">Bác sĩ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="">Bệnh nhân</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h3 class="text-center text-uppercase text-success my-3">DANH SÁCH BỆNH NHÂN</h3><br> 
                <a href="<?php echo DOMAIN . "/public/indexPatient.php?action=Add" ?>" class = 'btn btn-success'>Thêm mới</a>
                <br><br>
                <table class="table table-success table-striped-columns">
                    <thead>
                        <tr>
                            <th>Mã bệnh nhân</th>
                            <th>Tên bệnh nhân</th>
                            <th>Ngày khám</th>   
                            <th>Triệu chứng</th>
                            <th>Mã bác sĩ</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($datas as $data){
                        ?>
                        <tr>
                            <td><?php echo $data->getIdPatient()?></td>
                            <td><?php echo $data->getNamePatient()?></td>
                            <td><?php echo $data->getDatePatient()->format('Y-m-d')?></td>
                            <td><?php echo $data->getSymptom()?></td>
                            <td><?php echo $data->getIdDoctor()?></td>
                            <td>
                                <a href="<?php echo DOMAIN . '/public/indexPatient.php?action=Edit&id='.$data->getIdPatient()?>"><i class="bi bi-pencil"></i>Sửa</a>
                            </td>
                            <td>
                                <form action="<?php echo DOMAIN . "/public/indexPatient.php?action=Delete"?>" method="post">
                                    <input hidden name="id" type="text" value="<?php echo $data->getIdPatient()?>"/>
                                        <button class="btn" onclick="return Del('<?php echo $data->getNamePatient()?>')"><i class="bi bi-trash3"></i>Xóa</button>
                                </form>
                            </td>
                        </tr>
                        <?php 
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        function Del(name){
            return confirm("Ban co chac muon xoa lop khong: " + name + "?");
        }
    </script>
</body>
</html>