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
                                <li>Sách Mới</li>
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
                            <h3>Một số loại sách mới</h3>
                            <!--<p></p>-->
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="team-member text-center">
                        <!-- Single team member -->
                        
                        <?php 
                        $arrSach = array("Dám Nghĩ Lớn","Cảm Xúc-Là kẻ thù số một của thành công","Người Giỏi Không Phải Là Người Làm Tất Cả","Giao Tiếp Bất Kỳ Ai");
                        $arrSoluong = array("Qua quyển sách đã được bán ra hơn 4 triệu bản trên khắp thế giới,Tiến sĩ David J. Schwartz, sẽ giải đáp cho bạn lý do tại sao họ lại khác với chúng ta, đó là: Họ dám nghĩ lớn hơn chúng ta gấp 5 lần.",
                            "Cảm Xúc-Là kẻ thù số một của thành công</a></h5>
                                    <p><i>Nếu coi cuộc đời mỗi con người là hàm F(x) thì 4 biến xác định giá trị của hàm số đó là sức khỏe, sự nghiệp, gia đình và bạn bè. Làm thế nào để cân bằng được 4 yếu tố đó và sống một cuộc đời trọn vẹn?",
                                    "Người Giỏi Không Phải Là Người Làm Tất Cả</a></h5>
                                    <p><i>Tác phẩm của tác giả : Donna M. Genett có thể nói là một quyển sách hay về nghệ thuật quản lý. Nó được chuyên môn đánh giá cao về tư tưởng quản lý đó là quản lý theo kiểu giao khoán là phong cách phổ biến hiện nay.",
                                    "Bạn là một người tự ti và ít tiếp xúc với mọi người xung quanh? Đừng lo, cuốn sách của tác giả Jo Condrill – Bennie Bough chắc chắn sẽ là một phương tiện giúp bạn trở nên linh hoạt và cải thiện khả năng giao tiếp của mình một cách đầy tự tin đấy!");
                        $arrAnh = array ("9.jpg","10.jpg","12.jpg","13.jpg");
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
                                        echo '<li><a href="#" style="width: 150px">'.$arrGia[$i].'</a></li>';
                                     
                                    echo '</ul>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>  ';
                        }
                        ?>
                        

                        
                    </div>
                </div>
            </div>
        </div>
                       
                                               <!-- Single team member -->
                        
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