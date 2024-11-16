
<!doctype html>
<html class="no-js" lang="en">
  
<!-- Mirrored from rockstheme.com/rocks/aievari-live/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 08:27:42 GMT -->
<head>
    <?php include 'View/layout/headerpage.php' ?>
    <link rel="stylesheet" href="profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
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
                                <li>Thông tin cá nhân</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
         
    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"></span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right" align="center">Trang cá nhân của bạn</h4>
                </div>
                

                <div class="row mt-2">
                    <?php  
                    foreach($khachhang as $r){
                    
                    echo' <p"><span> Tên: &nbsp'.$r["name"].'</span></p>';

                    echo' <p"><span>Email cá nhân: &nbsp'.$r["email"].'</span></p>';
                    echo' <p"><span>Địa chỉ cá nhân: &nbsp'.$r["address"].'</span></p>';
                    echo' <p"><span>Số điện thoại: &nbsp'.$r["phone"].'</span></p>';
                }
                    ?>






                    
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right" align="center">Thay đổi thông tin cá nhân</h4>
                </div>
                
                <div>
                    <form method="POST" action="index.php?controller=thongtincanhan&action=suathongtin">
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Tên mới</label><input type="text" name="name" class="form-control" placeholder="Enter your name" value=""></div>
                    <div class="col-md-12"><label class="labels">Địa chỉ mới</label><input type="text" name="address" class="form-control" placeholder="Enter address" value=""></div>
                    <div class="col-md-12"><label class="labels">Số điện thoại</label><input type="text" name="phone" class="form-control" placeholder="Enter phone number" value=""></div>
                <br>
                
            </div><div class="mt-5 text-center"><br><button class="btn btn-primary profile-button" type="submit">Lưu thông tin</button></div>
        </form>
        </div>
        
    </div>
</div>

</div>
</div>

    <!-- all js here -->
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

<!-- Mirrored from rockstheme.com/rocks/aievari-live/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 08:27:42 GMT -->
</html>