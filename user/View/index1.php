<!doctype html>
<html class="no-js" lang="en">

<head>
        <?php include 'View/layout/headerpage.php'?>
    </head>
        <body>
            <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline">
                                <br><br><br><br>
                                <h3>BookStoreSTU</h3>
                            </div>
                            <ul class="breadcrumb-bg">
                                <li class="home-bread">Trang chủ</li>
                                <li>Search</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

<div class="row">
                    <div class="pricing-content">
                         <?php
                        foreach($data as $r) {

                         ?>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="pri_table_list">
                                <div class="top-price-inner">
                                   <div class="rates">
                                        <span class="prices">5%</span><span class="users">Giảm</span>
                                    </div>
                                    <span class="per-day"><img src="admin/back-end/View/assets/upload/<?php echo $r['img']?>"></span>
                                </div>
                                <ol class="pricing-text">
                                    <li class="check"><?php echo $r['book_name'] ?></li>
                                    <li class="check"><?php echo $r['price'] ?> VND</li>
                                </ol>
                                <div class="price-btn blue">
                                    <a class="blue" href="index.php?controller=book&action=detail&id=<?php echo $r['book_id'] ?>" style="width: 201px;">Thông tin sản phẩm</a>
                                    
                                </div>
                            </div>
                        </div>
                         <?php
                }
                ?>
    
                    </div>
                </div>
            </div>
        </div>
        <!-- team area end -->
        <!-- Start Footer Area -->
        <?php include 'View/layout/footerpage.php' ?>
        <!-- End Footer area -->
        
        <!-- all js here -->

        <!-- jquery latest version -->
        <script src="View/js/vendor/jquery-1.12.4.min.js"></script>
        <!-- bootstrap js -->
        <script src="View/js/bootstrap.min.js"></script>
        <!-- owl.carousel js -->
        <script src="View/js/owl.carousel.min.js"></script>
          <!-- stellar js -->
        <script src="View/js/jquery.stellar.min.js"></script>
        <!-- magnific js -->
        <script src="View/js/magnific.min.js"></script>
        <!-- wow js -->
        <script src="View/js/wow.min.js"></script>
        <!-- meanmenu js -->
        <script src="View/js/jquery.meanmenu.js"></script>
        <!-- Form validator js -->
        <script src="View/js/form-validator.min.js"></script>
        <!-- plugins js -->
        <script src="View/js/plugins.js"></script>
        <!-- main js -->
        <script src="View/js/main.js"></script>
    </body>

<!-- Mirrored from rockstheme.com/rocks/aievari-live/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 08:28:19 GMT -->
</html>