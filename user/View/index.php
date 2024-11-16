
<!doctype html>
<html class="no-js" lang="en">

<head>
		<?php include 'View/layout/headerpage.php'?>
	</head>
		<body>

		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

        
        <!-- header end -->
        <!-- Start Intro Area -->
		<div class="slide-area fix" data-stellar-background-ratio="0.6">

            <div class="display-table">

                <div class="display-table-cell">

					<div class="container">

						<div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <!-- Start Slider content -->
                                <div class="slide-content text-center">
                                    <h2 class="title2" style="font-size: 50px;">Sách mới</h2>
                                    <div class="layer-1-3">
                                        <a href="index.php?controller=sachmoi" class="ready-btn left-btn" > Xem sản phẩm </a>
                                        
                                    </div>
                                </div>
                                <!-- End Slider content -->
						    </div>
						</div>
					</div>
				</div>
            </div>
		</div>
		<!-- End Intro Area -->
        <!-- Start Count area -->
       
        <!-- End Count area -->
        <!-- Start Invest area -->



        <div class="invest-area bg-color area-padding-2">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
                            <h3>Giới Thiệu</h3>
                            <p>Công ty Bán Sách BookStoreSTU là công ty uy tín thành lập vào Tháng 9 Năm 2021. Có nhiều những tác phẩm và sách giáo khoa có ưu đãi cho sinh viên và học sinh. </p>
						</div>
					</div>
				</div>
               
                <!-- Single Event Area -->
                
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
        <!-- End Invest area -->
        <!-- Start Support-service Area -->
        
        <!-- End Support-service Area -->
        <!-- Start Self-area -->
        <div class="self-area area-padding">
            <div class="container">
                <div class="row">
                    <!-- column end -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="self-content">
							<h4>An investment multi-national firm is a invest money of one or more experts. Provides more profite, We help your satele to future life and then create the road. Grow Money speedly without any risk. </h4>
                            <span class="talk-text">Alex ferneld, CEO</span>
                        </div>
                    </div>
                    <!-- column end -->
                </div>
            </div>
        </div>
        <!-- End Self-area -->
        <!-- Start Work proses Area -->
        
        <!-- End Work proses Area -->
        <!--Start payment-history area -->
        <div class="payment-history-area bg-color fix area-padding-2">
            <div class="container">
               <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
                            <h3>Deposite and withdrawals history</h3>
                            <p>Help agencies to define their new business objectives and then create professional software.</p>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="deposite-content">
                            <div class="diposite-box">
                                <h4>Last deposite</h4>
                                <span><i class="flaticon-005-savings"></i></span>
                                <div class="deposite-table">
                                    <table>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Currency</th>
                                        </tr>
                                        <tr>
                                            <td>Admond sayhel</td>
                                            <td>Jan 02, 2020</td>
                                            <td>$1000</td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>Jonshon</td>
                                            <td>Dec 12, 2019</td>
                                            <td>$5000</td>
                                            <td>USD</td>
                                        </tr>
                                        <tr>
                                            <td>Hopper</td>
                                            <td>Dec 22, 2019</td>
                                            <td>$4000</td>
                                            <td>Ripple</td>
                                        </tr>
                                        <tr>
                                            <td>Admond sayhel</td>
                                            <td>Jan 02, 2020</td>
                                            <td>$3000</td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>Anjel july</td>
                                            <td>Jan 05, 2020</td>
                                            <td>$500</td>
                                            <td>USD</td>
                                        </tr>
                                        <tr>
                                            <td>Lagisha</td>
                                            <td>Jan 12, 2020</td>
                                            <td>$5000</td>
                                            <td>Bitcoin</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="deposite-content">
                            <div class="diposite-box">
                                <h4>Last withdrawals</h4>
                                <span><i class="flaticon-042-wallet"></i></span>
                                <div class="deposite-table">
                                    <table>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Currency</th>
                                        </tr>
                                        <tr>
                                            <td>Arnold</td>
                                            <td>Jan 04, 2020</td>
                                            <td>$1000</td>
                                            <td>USD</td>
                                        </tr>
                                        <tr>
                                            <td>Jhon Abra</td>
                                            <td>Jan 07, 2020</td>
                                            <td>$6000</td>
                                            <td>USD</td>
                                        </tr>
                                        <tr>
                                            <td>Lanisha</td>
                                            <td>Jan 13, 2020</td>
                                            <td>$5000</td>
                                            <td>USD</td>
                                        </tr>
                                        <tr>
                                            <td>Gongales</td>
                                            <td>Jan 12, 2020</td>
                                            <td>$2000</td>
                                            <td>USD</td>
                                        </tr>
                                        <tr>
                                            <td>Admond sayhel</td>
                                            <td>Jan 10, 2020</td>
                                            <td>$1000</td>
                                            <td>USD</td>
                                        </tr>
                                        <tr>
                                            <td>Remond</td>
                                            <td>Jan 02, 2020</td>
                                            <td>$3000</td>
                                            <td>USD</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End payment-history area -->
        <!-- Start Banner Area -->
        <div class="banner-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-all area-80 text-center">
                            <div class="banner-content">
                                <h3>Our investment plan world wide business relations for development</h3>
                                <a class="banner-btn" href="#">Sign up now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Area -->
        <!-- Start Blog Area-->
        
        <!-- End Blog Area-->
        <!-- Start reviews Area -->
        <div class="reviews-area fix area-padding">
            <div class="container">
                <div class="row">
                    <div class="reviews-top">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="testimonial-inner">
                                <div class="review-head">
                                    <h3>Our customer say about our company work</h3>
                                    <p>The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programmes can generate dummy. The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programmes can generate dummy</p>
                                    <a class="reviews-btn" href="#">More reviews</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="reviews-content">
                                <!-- start testimonial carousel -->
                                <div class="testimonial-carousel item-indicator">
                                    <div class="single-testi">
                                        <div class="testi-text">
                                            <div class="clients-text">
                                                <div class="client-rating">
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                </div>
                                                <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                            </div>
                                            <div class="testi-img ">
                                                <img src="View/img/review/1.jpg" alt="">
                                                <div class="guest-details">
                                                    <h4>Hamilton</h4>
                                                    <span class="guest-rev">Clients - <a href="#">General customer</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class="single-testi">
                                        <div class="testi-text">
                                            <div class="clients-text">
                                                <div class="client-rating">
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                </div>
                                                <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                            </div>
                                            <div class="testi-img ">
                                                <img src="View/img/review/2.jpg" alt="">
                                                <div class="guest-details">
                                                    <h4>Angel lima</h4>
                                                    <span class="guest-rev">Clients - <a href="#">General customer</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class="single-testi">
                                        <div class="testi-text">
                                            <div class="clients-text">
                                                <div class="client-rating">
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                </div>
                                                <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                            </div>
                                            <div class="testi-img ">
                                                <img src="View/img/review/3.jpg" alt="">
                                                <div class="guest-details">
                                                    <h4>Arthur Doil</h4>
                                                    <span class="guest-rev">Clients - <a href="#">General customer</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class="single-testi">
                                        <div class="testi-text">
                                            <div class="clients-text">
                                                <div class="client-rating">
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                </div>
                                                <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                            </div>
                                            <div class="testi-img ">
                                                <img src="View/img/review/4.jpg" alt="">
                                                <div class="guest-details">
                                                    <h4>Gabriel Hank</h4>
                                                    <span class="guest-rev">Clients - <a href="#">General customer</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End reviews Area -->
        <!-- Start FAQ area -->
        
        <!-- End FAQ area -->
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

</html>