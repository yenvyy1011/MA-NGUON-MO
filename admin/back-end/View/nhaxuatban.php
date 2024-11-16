
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
                            <h3>Bảng Nhà Xuất Bản</h3>
                            
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Quản lý nhà xuất bản</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Nhà xuất bản</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

               

                <!-- Contextual classes start -->
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Danh Sách Nhà Xuất Bản
                        </div>
                        <div class="card-header">
                        <a href="index.php?controller=themnhaxuatban" class="btn btn-primary btn-round ml-auto fas fa-add" name="themnhaxuatban" style="background-color: silver;color: black" ><svg class="bi" width="1em" height="1em" fill="currentColor">
                                                      <use
                                                       xlink:href="View/assets/vendors/bootstrap-icons/bootstrap-icons.svg#plus-circle" />
                                                     </svg> Thêm Nhà Xuất Bản</a>
                   
                        </div>
                        <form action="index.php" method=get>
                         <input type="hidden" name='controller' value='nhaxuatban'>
                         <input type="hidden" name='action' value='search'>
                         <input type="text" name="kw" style="margin-left: 50px;"><input type="submit" style="margin-left: 20px" value="Tìm kiếm">
                        </form>
                        <br>
                        <div class="card-body">
                        
                            <table class="table table-striped" id="table1">
                            
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên Nhà Xuất Bản</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                foreach ($data as $r) {
                                ?> 
                                <tr>
                                <td><?php echo $r['pub_id']?></td>
                                <td><?php echo $r['pub_name']?></td>
                               
                                <td>
                                  <a href="index.php?controller=nhaxuatban&action=deletenhaxuatban&id=<?php echo $r['pub_id'] ?>" type="submit" data-toggle="tooltip" title="" class="btn btn-primary btn-round ml-auto" data-original-title="Remove" onclick="return confirm('Bạn muốn xóa nhà xuất bản <?php echo $r['pub_id'] ?> không ?')" style="background-color: #CDCDB4;color: black"> 
                                                     <svg class="bi" width="1em" height="1em" fill="currentColor">
                                                      <use
                                                       xlink:href="View/assets/vendors/bootstrap-icons/bootstrap-icons.svg#trash-fill" />
                                                     </svg>
                                                    Xóa

                                                </a>
                            <a href="index.php?controller=nhaxuatban&action=updatenhaxuatban&id=<?php echo $r['pub_id'] ?>" type="submit" data-toggle="tooltip" title="" class="btn btn-primary btn-round ml-auto" data-original-title="Edit Task" style="background-color: #CDCDB4;color: black" >
                                                     <svg class="bi" width="1em" height="1em" fill="currentColor">
                                                      <use
                                                       xlink:href="View/assets/vendors/bootstrap-icons/bootstrap-icons.svg#pencil-square" />
                                                     </svg>
                                                    Sửa
                                                </a>
                                </td>
                                </tr>
                                <?php
                            }
                                    ?>
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