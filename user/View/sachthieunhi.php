<!doctype html>
<html class="no-js" lang="en">
	
<!-- Mirrored from rockstheme.com/rocks/aievari-live/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 08:28:01 GMT -->
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
                                <li>Sách Thiếu Nhi</li>
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
                            <h3>Sách Thiếu Nhi</h3>
                            <!--<p></p>-->
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="team-member text-center">

                        <?php 
                        $arrSach = array("Alice ở xứ sở diệu kỳ","Không gia đình (Hector Malot)","Đồi thỏ (Rechard Adams)","Ngôi nhà nhỏ trên thảo nguyên (Laura Ingalls Wilder)");
                        $arrSoluong = array("Xuất bản năm 1865, thoả sức cho trí tưởng tượng bay cao về một thế giới diệu kì nơi có những phép màu cổ tích.",
                            "Xuất bản năm 1878, kể về cậu bé Rê-mi mồ côi cả cha lẫn mẹ từ bé",
                                    "Xuất bản năm 1878, kể về cậu bé Rê-mi mồ côi cả cha lẫn mẹ từ bé.",
                                    "Cuốn truyện tranh gồm 8 câu chuyện nhỏ nhắn và gần gũi. Không phải cứ nhắm mắt ngủ một giấc ngủ là mọi chuyện thành hiện thực đâu” mà Nhờ niềm tin, hy vọng");
                        $arrAnh = array ("55.jpg","66.jpg","76.png","88.jpg");
                        $arrGia = array ("86.500VNĐ","120.000VNĐ","95.000VNĐ","98.000VNĐ");
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
                                        
                                        echo '<li><a href="#" style="width: 150px">Xem Thêm....</a></li>';
                                    echo '</ul>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>  ';
                        }
                        ?>
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