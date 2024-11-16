<!DOCTYPE html>
<html lang="en"> 
<head>
    <?php include 'View/assets/layouts/headerpage_Admin.php' ?>
</head>
<body>
    <div id="app">
        <?php include 'View/assets/layouts/menupage_Admin.php' ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Bảng Người Dùng</h3>                           
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Quản lý người dùng</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Danh Sách Người Dùng</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Contextual classes start -->
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Danh Sách Người Dùng
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>        
                                        <th>Email</th>
                                        <th>Tên</th>               
                                        <th>Địa Chỉ</th>
                                        <th>Số Điện Thoại</th>
                                        <th>Hoạt Động</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                   foreach ($data as $r) {
                                    ?>
                                     <tr>
                                <td><?php echo $r['email']?></td>
                                <td><?php echo $r['name']?></td>
                                <td><?php echo $r['address']?></td>
                                <td><?php echo $r['phone']?></td>
                                <td>
                                  <a href="index.php?controller=nguoidung&action=deletenguoidung&id=<?php echo $r['email'] ?>" type="submit" data-toggle="tooltip" title="" class="btn btn-primary btn-round ml-auto" data-original-title="Remove" onclick="return confirm('Bạn muốn xóa người dùng <?php echo $r['email']?> không ?')" style="background-color: #CDCDB4;color: black">
                                                     <svg class="bi" width="1em" height="1em" fill="currentColor">
                                                      <use
                                                       xlink:href="View/assets/vendors/bootstrap-icons/bootstrap-icons.svg#trash-fill" />
                                                     </svg>
                                                    Xóa
                                                </a>
                           
                                </td>
                                </tr>
                                <?php
                            }
                            ?>
                                    <!-- <span class="badge bg-danger">Không Hoạt Động</span> --> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
                <!-- Contextual classes end -->                
            </div>

            <footer>
                <?php include 'View/assets/layouts/footerpage_Admin.php' ?>
            </footer>
        </div>
    </div>
    
</body>

</html>