<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>SteakShop Restaurant</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/linericon/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/lightbox/simpleLightbox.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/nice-select/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/jquery-ui/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/animate-css/animate.css')}}">
	<!-- main css -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>

	<!--================ Start Header Menu Area =================-->
  <div class="menu-trigger">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<header class="fixed-menu">
		@include('layouts.menu')
	</header>
	<!--================ End Header Menu Area =================-->

	<div class="site-main">
		<!--================ Start Home Banner Area =================-->
		<section class="home_banner_area common-banner">
			<div class="banner_inner">
				<div class="container-fluid no-padding">
					<div class="row fullscreen">

					</div>
				</div>
			</div>
		</section>
		<!-- Start banner bottom -->
		<div class="row banner-bottom common-bottom-banner align-items-center justify-content-center">
			<div class="col-lg-8 offset-lg-4">
				<div class="banner_content">
					<div class="row d-flex align-items-center">
						<div class="col-lg-7 col-md-12">
							<h1>Punto de Venta</h1>
							<p>Actualmente se esta preparando esta parte de la pagina</p>
						</div>
						<div class="col-lg-5 col-md-12">
							<div class="page-link-wrap">
								<div class="page_link">
									<a href="index.html">Home</a>
									<a href="chefs.html">Chefs</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End banner bottom -->
		<!--================ End Home Banner Area =================-->

		<!--================ Start Chef Area =================-->
		<div class="chef-area section_gap">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="left-chef">
							<img class="img-fluid" src="{{asset('img/chef/chef1.jpg')}}" alt="">
						</div>
					</div>
					<div class="col-lg-5 offset-lg-1">
						<div class="left-content">
							<h1>Daily Food Courses with Drinks </h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
							<img src="{{asset('img/chef/signature.png')}}" alt="">
						</div>
					</div>
				</div>
				<div class="row chef-items">
					<div class="col-lg-12 offset-lg-1">
						<div class="row">
							<!-- single chef item -->
							<div class="col-lg-2 col-md-6">
								<div class="single-chef-item">
									<a href="{{asset('img/food/food5.jpg')}}" class="img-popup"><img src="{{asset('img/chef/item1.png')}}" alt=""></a>
								</div>
							</div>
							<!-- single chef item -->
							<div class="col-lg-2 col-md-6">
								<div class="single-chef-item">
									<a href="{{asset('img/food/food6.jpg')}}" class="img-popup"><img src="{{asset('img/chef/item2.png')}}" alt=""></a>
								</div>
							</div>
							<!-- single chef item -->
							<div class="col-lg-2 col-md-6">
								<div class="single-chef-item">
									<a href="{{asset('img/food/food7.jpg')}}" class="img-popup"><img src="{{asset('img/chef/item3.png')}}" alt=""></a>
								</div>
							</div>
							<!-- single chef item -->
							<div class="col-lg-2 col-md-6">
								<div class="single-chef-item">
									<a href="{{asset('img/food/food8.jpg')}}" class="img-popup"><img src="img/chef/item4.png" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--================ End Chef Area =================-->

		<!--================ Start Footer Area =================-->
		<footer class="footer-area overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-4 col-sm-6">
						<div class="single-footer-widget">
							<h6>Top Products</h6>
							<div class="row">
								<div class="col">
									<ul class="list">
										<li><a href="#">Managed Website</a></li>
										<li><a href="#">Manage Reputation</a></li>
										<li><a href="#">Power Tools</a></li>
										<li><a href="#">Marketing Service</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-6">
						<div class="single-footer-widget">
							<h6>Quick Links</h6>
							<div class="row">
								<div class="col">
									<ul class="list">
										<li><a href="#">Jobs</a></li>
										<li><a href="#">Brand Assets</a></li>
										<li><a href="#">Investor Relations</a></li>
										<li><a href="#">Terms of Service</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-6">
						<div class="single-footer-widget">
							<h6>Features</h6>
							<div class="row">
								<div class="col">
									<ul class="list">
										<li><a href="#">Jobs</a></li>
										<li><a href="#">Brand Assets</a></li>
										<li><a href="#">Investor Relations</a></li>
										<li><a href="#">Terms of Service</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-6">
						<div class="single-footer-widget">
							<h6>Resources</h6>
							<div class="row">
								<div class="col">
									<ul class="list">
										<li><a href="#">Guides</a></li>
										<li><a href="#">Research</a></li>
										<li><a href="#">Experts</a></li>
										<li><a href="#">Agencies</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-8">
						<div class="single-footer-widget">
							<h6>Newsletter</h6>
							<p>Stay update with our latest</p>
							<div class="" id="mc_embed_signup">
								<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
								 method="get" class="form-inline">
									<div class="d-flex flex-row">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
										 required="" type="email">
										<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
										<div style="position: absolute; left: -5000px;">
											<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
										</div>
									</div>
									<div class="info"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row footer-bottom justify-content-between">
					<div class="col-lg-6">
						<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
					<div class="col-lg-2">
						<div class="social-icons">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>

			</div>
		</footer>
		<!--================ Start Footer Area =================-->
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendors/jquery-ui/jquery-ui.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>