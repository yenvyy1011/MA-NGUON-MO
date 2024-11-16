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
                                <li>Chi tiết</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
         <!-- Team area start -->	
  <!-- Left Column / Headphones Image -->
  <section class="section">
      <?php
                        foreach($data as $r) {

                         ?>
                         <br><br><br>
<main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            

            <div class="card">
                <div class="container-fliud">
                    
                        <div class="wrapper row">
                            <div class="preview col-md-6">
                                <div class="preview-pic tab-content">
                                    
                                        <img src="admin/back-end/View/assets/upload/<?php echo $r['img']?>" max-width:100%
    height:400px>
                                </div>
                                
                            </div>
                            <div class="details col-md-6">
                                <h3 class="product-title"><?php echo $r['book_name'] ?></h3>
                                <div class="rating">
                                    <div class="stars">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <span class="review-no">999 reviews</span>
                                </div>
                                <p><?php echo $r['description'] ?></p>
                                <form class="form form-horizontal"  method = "POST" action = "index.php?controller=cart&action=add">
      <input type="number" id="quantity" name="quantity[<?php echo $r['book_id'] ?>]" class="quantity form-control input-number" value="1" min="1" max="100">
      <button type="submit" class="cart-btn">Add to cart</button>
  </form>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            
        </div>
        <!-- End block content -->
    </main>
    <?php
}
?>
                       
 
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