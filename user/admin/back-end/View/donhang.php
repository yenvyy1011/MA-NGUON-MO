
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
                            <h3>Bảng Đơn Hàng</h3>
                            
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Bảng Điều khiển</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Đơn Hàng</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

               

                <!-- Contextual classes start -->
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Danh Sách Đơn Hàng
                        </div>
                        
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Mã đơn đặt hàng</th>
                                      <th>Email</th>
                                      <th>Ngày đặt hàng</th>
                                      <th>Tên người nhận hàng</th>
                                      <th>Người nhận hàng thêm</th>
                                      <th>điện thoại người nhận hàng</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                       foreach ($data as $r) {
                                    ?>
                                    <tr>
                                <td><?php echo $r['order_id']?></td>
                                <td><?php echo $r['email']?></td>
                                <td><?php echo $r['order_date']?></td>
                                <td><?php echo $r['consignee_name']?></td>
                                <td><?php echo $r['consignee_add']?></td>
                                <td><?php echo $r['consignee_phone']?></td>
                                <td><?php echo $r['status']?></td>
                                
                                <td>
                                  <a href="index.php?controller=donhang&action=deletedonhang&id=<?php echo $r['order_id'] ?>" type="submit" data-toggle="tooltip" title="" class="btn btn-primary btn-round ml-auto" data-original-title="Remove" onclick="return confirm('Bạn muốn xóa đơn hàng <?php echo $r['order_id'] ?> này không ?')" style="background-color: #CDCDB4;color: black">
                                                     <svg class="bi" width="1em" height="1em" fill="currentColor">
                                                      <use
                                                       xlink:href="View/assets/vendors/bootstrap-icons/bootstrap-icons.svg#trash-fill" />
                                                     </svg>
                                                    Xóa
                                                </a>
                          <!--  <a href="sanphameditpage.php?id=<?php echo $r['order_id'] ?>" type="submit" data-toggle="tooltip" title="" class="btn btn-primary btn-round ml-auto" data-original-title="Edit Task" >
                                                     <svg class="bi" width="1em" height="1em" fill="currentColor">
                                                      <use
                                                       xlink:href="View/assets/vendors/bootstrap-icons/bootstrap-icons.svg#pencil-square" />
                                                     </svg>
                                                    Sửa
                                                </a> -->
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