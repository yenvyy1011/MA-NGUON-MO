<!doctype html>
<html class="no-js" lang="en">
	
<!-- Mirrored from rockstheme.com/rocks/aievari-live/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 08:28:19 GMT -->
<head>
		<?php include 'View/layout/headerpage.php' ?>
	</head>
		<body>

		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

        
        <!-- header end -->
        <!-- Start breadcumb Area -->
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
                                <li>Sách Giáo Khoa</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
         <!-- Team area start -->
         <div class="team-page-area page-padding-2">
            <div class="container">
               <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
                            <h3>Sách Giáo Khoa</h3>
                            <!--<p></p>-->
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="team-member text-center">
                        <?php 
                        $arrSach = array("Sách giáo khoa lớp 5","Sách giáo khoa Tiếng Anh","Sách giáo khoa lớp 1","Sách Giáo Khoa Lớp Từ 1 Đến 12");
                        $arrSoluong = array("Trọn bộ","Trọn bộ + audio","Trọn bộ","Có bán lẻ");
                        $arrAnh = array ("11.jpg","22.jpg","33.jpg","44.jpg");
                        $arrGia = array ("188.000 VNĐ","138.500 VNĐ","179.300 VNĐ","28.000 VNĐ");
                        for ($i = 0 ; $i < count($arrSach); $i++){
                            echo '<div class="col-md-3 col-sm-6 col-xs-12">';
                            echo '<div class="single-member">';
                                echo '<div class="team-img">';
                                    echo '<a href="#">';
                                        echo '<img src="View/img/team/'.$arrAnh[$i].'" alt="" style="height: 250px;">';
                                    echo '</a>';
                                echo '</div>';
                                echo '<div class="team-content">';
                                    echo '<h5><a href="#">'.$arrSach[$i].'</a></h5>';
                                    echo '<p><i>'.$arrSoluong[$i].'</i></p>';
                                    echo '<ul class="team-hover">';
                                        echo '<li><a href="#" style="width: 150px">'.$arrGia[$i].'</a></li>';
                                     
                                    echo '</ul>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>  ';
                        }
                        ?>
                        <!-- Single team member -->
                        <!-- Single team member -->
                        
                        <!-- Single team member -->
                       
                        <!-- Single team member -->
                         
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
        <script src="View/s/magnific.min.js"></script>
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

<!-- Mirrored from rockstheme.com/rocks/aievari-live/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 08:28:19 GMT -->
</html>