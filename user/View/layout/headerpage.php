<?php
if(!isset($_SESSION)){
session_start();
}
?>
<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title> BookStoreSTU </title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon -->		
		<link rel="shortcut icon" type="image/x-icon" href="View/img/logo/logo1.png">

		<!-- all css here -->

		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="View/css/bootstrap.min.css">
		<!-- owl.carousel css -->
		<link rel="stylesheet" href="View/css/owl.carousel.css">
		<link rel="stylesheet" href="View/css/owl.transitions.css">
       <!-- Animate css -->
        <link rel="stylesheet" href="View/css/animate.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="View/css/meanmenu.min.css">
		<!-- font-awesome css -->
		<link rel="stylesheet" href="View/css/font-awesome.min.css">
		<link rel="stylesheet" href="View/css/themify-icons.css">
		<link rel="stylesheet" href="View/css/flaticon.css">
		<!-- magnific css -->
        <link rel="stylesheet" href="View/css/magnific.min.css">
		<!-- style css -->
		<link rel="stylesheet" href="View/style.css">
		<!-- responsive css -->
		<link rel="stylesheet" href="View/css/responsive.css">

		<!-- modernizr css -->
		<script src="View/js/vendor/modernizr-2.8.3.min.js"></script>
		<div id="preloader"></div>
        <header class="header-one">
            <!-- Start top bar -->
            <div class="topbar-area fix hidden-xs">
                <div class="container">
                    <div class="row">
                       <div class="col-md-6 col-sm-6">
                           <div class="topbar-left">
                                <ul>
                                    <li><a href="#"><i class="fa fa-envelope"></i> DH51803070@student.stu.edu.vn 
                                        <br>&emsp;&ensp; DH51803559@student.stu.edu.vn </a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i> + 0377648490 <br>&emsp;&ensp;+ 0367431233</a></li>
                                </ul>
							</div>
                        </div>
                        <div class=" col-md-6 col-sm-6">
                            <div class="topbar-right">
                                <div class="top-social">
                                    <ul>
                                             <li><a href="https://www.facebook.com/hahahaha152/"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="https://www.google.com/"><i class="fa fa-google"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                       
                                    </ul> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End top bar -->
            <!-- header-area start -->
            <div id="sticker" class="header-area hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="row">
                                <!-- logo start -->

                                <div class="col-md-3 col-sm-3">
                                    <div class="logo">
                                        <!-- Brand -->
                                        <a class="navbar-brand page-scroll white-logo" href="index.php"> 
                                            <img src="View/img/logo/logo1.png" alt="" style="height: 60px;">
                                        </a>
                                        <a class="navbar-brand page-scroll black-logo" href="index .php">
                                            <img src="View/img/logo/logo1.png" alt=""   style="height: 60px;"  >
                                        </a>
                                    </div>
                                    <!-- logo end -->
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <div class="header-right-link">
                                        <!-- search option end -->
                                        
                                        

                                    </div>
                                    <!-- mainmenu start -->
                                    <nav class="navbar navbar-default">
                                        <div class="collapse navbar-collapse" id="navbar-example">
                                            <div class="main-menu">
                                                <ul class="nav navbar-nav navbar-right">
                                                    <li><a class="pages" href="index.php?controller=trangchu">Trang chủ</a></li>
                                                    <li><a href="index.php?controller=baiviet">Bài vết</a></li>
                                                    <!--<li><a href="investment.html">Investment</a></li>-->
                                                    <li><a class="pages" href="#">Sản phẩm</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="index.php?controller=sachthieunhi">Sách Thiếu Nhi</a></li>
                                                            <li><a href="index.php?controller=sachgiaokhoa">Sách Giáo Khoa</a></li>

                                                            <li><a href="index.php?controller=sachmoi">Sách Mới</a></li>
                                                            
                                                        </ul>
                                                    </li>
                                                    <li><a class="pages" href="index.php?controller=lienhe">Liên hệ</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="index.php?controller=danhgia">Đánh giá</a></li>
                                                           <!-- <li><a href="blog-sidebar.php">Blog Sidebar</a></li>
                                                            <li><a href="blog-details.php">Blog Details</a></li>-->
                                                        </ul>
                                                    </li>

                                                    
                                                     <li><a href="index.php?controller=thongtincanhan">Thông tin cá nhân</a></li>

                                                </ul>

                                            </div>
                                        </div>
                                    </nav>
                                     
                                    </div>
                
                    </div><div>
                <center>
                <form class="form-inline my-2 my-lg-0" action='index.php' >
                                            <input type="hidden" name='controller' value='book'>
                                            <input type="hidden" name='action' value='search'>
                                            <input class="form-control mr-sm-2" type="text" placeholder="Search" name='kw'>
                                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                        </form></center>
                                        <form class="main-font-family text-right">
                   <div><button id="cart">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                <a href="index.php?controller=cart">Giỏ Hàng</a>
            </button>
                        <?php
                            if (!isset($_SESSION["email"])){
                             echo'<i class="bi bi-user"></i>';
                             echo' <a class="s-menu" href="index.php?controller=dangnhap">&ensp; Đăng nhập &ensp;</a>';
                            }else
                            {
                            
                                echo'<i class="bi bi-user"></i>';
                                echo' <a class="s-menu"><span>&nbsp'.$_SESSION["email"].'</span></a>';
                                echo'<i class="bi bi-user"></i>';
                                echo' <a class="s-menu" href="index.php?controller=dangnhap&&action=logout">&ensp; Logout &ensp;</a>';   
                                }  
                            ?> </div>
            &ensp;
                 <div>
                </form></div>
                </div>

            </div>
        </nav>

                                    <!-- mainmenu end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- header-area end -->
            <!-- mobile-menu-area start --><!--Chạy trên điện thoại-->
            <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <div class="logo">
                                    <a href="index-2.html"><img src="View/img/logo/logo1.png" alt="" /></a>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <div class="header-right-link">
                                        <!-- search option end -->
                                        <a class="s-menu" href="index.php?controller=dangnhap">&ensp; Đăng Nhập &ensp;</a>

                                    </div>
                                <nav id="dropdown">
                                    <ul>
                                    <li><a href="index.php?controller=trangchu">Trang chủ</a></li>
                                        <li><a class="pages" href="#">Khuyến Mãi</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.php?controller=khuyenmaihssv">Ưu Đãi Học Sinh, Sinh Viên</a></li>
                                                 <li><a href="index.php?controller=khuyenmaikhach">Ưu Đãi Khách Hàng</a></li>
                                                  <li><a href="index.php?controller=ctkm">Chương trình khuyến mãi</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="pages" href="index.php?controller=sachthieunhi">Sản phẩm</a>
                                            <ul class="sub-menu">
                                              <li><a href="index.php?controller=sachthieunhi">Sách Thiếu Nhi</a></li>
                                                 <li><a href="index.php?controller=sachgiaokhoa">Sách Giáo Khoa</a></li>
                                                    <li><a href="index.php?controller=sachmoi">Sách Mới</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="pages" href="index.php?controller=lienhe">Liên hệ</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.php?controller=danhgia">Đánh giá</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index.php?controller=dangky">Đăng ký</a></li>
                                         <form class="main-font-family text-right">
                    <input type="search">
                    <i class="fas fa-search"></i>
                    <input type="submit" value="Tìm kiếm" size="150">
                </form>
                                    </ul>
                                </nav>
                            </div>					
                        </div>
                    </div>
                </div>
            </div>

            <!-- mobile-menu-area end -->		
        </header>