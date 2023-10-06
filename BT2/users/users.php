<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usres_php</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="users.css">
    <!-- day month year -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <!-- thanh cuon - Accordion-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">       
</head>
<body style="background-color:#F0F0F0; font-family: 'poppins', sans-serif;"> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="main-wrapper d-flex justify-content-between">
                    <!-- logo -->
                    <div class="logo nav-header position-fixed bg-white sticky-top">
                        <a href="" class="text-decoration-none d-flex justify-content-center align-items-center mt-3 mb-3">
                            <img src="img/Group 57098-1.png" alt="" style="height: 38px; width: 58px;">
                            <img src="img/Group 57116.png" alt="" style="height: 34px; width: 116px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-3 bg-white left-part mt-5">
                <?php
                    include "./add/menu.php";
                ?>
            </div>

            <div class="col-md-7 partMain">
                <div class="row partFirst">
                    <div class="col-md-6 user-form">
                        <button type="button" class="btn btn-outline-light"><i class="bi bi-list"></i></button>
                        <span class="">Users</span>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group search-form">
                            <span class="input-group-text box-search"><i class="bi bi-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search here...">
                        </div>
                    </div>
                </div>

                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            <span class="text-filter">Filter</span>
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <div class="row partSec">
                                    <div class="col-md-3">
                                        <input type="text" name="" placeholder="Email" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="" placeholder="Mobile" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <select name="" class="form-control">
                                            <option value="0">Select Group</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-success filter-form"><i class="bi bi-search"></i>Filter</button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-success clear-form">Clear</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
                <div class="partThree">
                    <div class="row part-hearder">
                        <div class="col-md-1"></div>
                        <div class="col-md-6">
                            <h3 class="text-users">Users</h3>
                        </div>
                        <div class="col-md-2">
                        <button type="button" class="btn btn-success delete-form">Delete</button>
                        </div>
                        <div class="col-md-3">
                            <div class="btn-group btn-addusers">
                                <button type="button" class="btn btn-color">ADD Blog</button>
                                <button type="button" class="btn btn-color"><i class="bi bi-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row table-part">
                        <div class="col-md-12 table-responsive overflow-auto">
                            <table class="table table-lg table-size">
                                <thead>
                                    <tr>
                                        <th>
                                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                        </th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Groups</th>
                                        <th>Mobile</th>
                                        <th>Date Of Birth</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."></td>
                                        <td>ABCDEF</td>
                                        <td>ABCDEF@gmail.com</td>
                                        <td>Girl</td>
                                        <td>Manage</td>
                                        <td>03344045***</td>
                                        <td>23-04-2003</td>
                                        <td>
                                            <div class="circle"></div>
                                        </td>
                                        <td>
                                            <div class="sweetalert">
                                                <div class="d-flex">
                                                    <a href="" class="btn btn-secondary shadow btn-xs sharp me-1"><i class="bi bi-shield-shaded"></i></a>
                                                    <a href="" class="btn btn-primary shadow btn-xs sharp me-1"><i class="bi bi-pencil"></i></a>
                                                    <a href="" class="btn btn-danger shadow btn-xs sharp sweet-success-cancel"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                    <td><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."></td>
                                        <td>ABCD</td>
                                        <td>ABCD@gmail.com</td>
                                        <td>Girl</td>
                                        <td>Manage</td>
                                        <td>03344045***</td>
                                        <td>23-04-2003</td>
                                        <td>
                                            <div class="circle"></div>
                                        </td>
                                        <td>
                                            <div class="sweetalert">
                                                <div class="d-flex">
                                                    <a href="" class="btn btn-secondary shadow btn-xs sharp me-1"><i class="bi bi-shield-shaded"></i></a>
                                                    <a href="" class="btn btn-primary shadow btn-xs sharp me-1"><i class="bi bi-pencil"></i></a>
                                                    <a href="" class="btn btn-danger shadow btn-xs sharp sweet-success-cancel" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row partPagination">
                        <div class="col-md-1"></div>
                        <div class="col-md-7">
                            Page 1 of 4.
                        </div>
                        <div class="col-md-4">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true" class="pagePag">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true"class="pagePag">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-1 part-rigt">
                <?php
                include "./add/menu-child.php"
                ?>
            </div>
        </div>
    </div>

<!-- Button trigger modal
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Delete</button>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-xVjVeu7gF75w1lgE+Bc2wK7qio4D4jqru/YBNtgFakxxJFxF0bhxyzyJw05j0fne" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <!-- day month year -->
</body>
</html>