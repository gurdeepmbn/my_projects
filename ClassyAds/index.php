<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>ClassyAds</title>
<meta property="og:title" content="ClassyAds">
<meta property="og:description" content="ClassyAds">
<meta property="og:url" content="index.php">
<meta property="og:type" content="website">
<meta name="keywords" content="ClassyAds">
<meta name="author" content="Gurdeep Kaur">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<!-- wrap -->
	<main class="wrap">
		<!-- hero-section -->
		<section class="hero-section">
			<!-- container -->
			<div class="container">
				<!-- header -->
				<?php include'header.php';?>
				<!-- header -->
				<!-- inner-box -->
				<div class="inner-box">
					<!-- headings-container -->
					<div class="text-center"> 
						<!-- hero-title -->
						<h2 class="hero-title">Largest Classifieds In <span class="dis-block">The World</span></h2>
						<!-- hero-title -->
						<!-- hero-sub-title -->
						<h3 class="hero-sub-title pt-15">You can buy, sell anything you want.</h3>
						<!-- hero-sub-title -->
					</div>
					<!-- headings-container -->
					<!-- form-container -->
					<div class="form-container">
						<form action="" method="post" id="hero-form"class="hero-form">
							<!-- form-groups -->
							<div class="form-groups">
								<!-- form-group -->
								<div class="form-group">
									<input type="text" id="fname" name="fname" value="" placeholder="What are you looking for?" class="form-itm" required>
								</div>
								<!-- form-group -->
								<!-- form-group -->
								<div class="form-group location-group">
									<input type="text" id="location" name="location" value="" placeholder="Location" class="form-itm" required>
								</div>
								<!-- form-group -->
								<!-- form-group -->
								<div class="form-group">
									<select name="categories" id="categories" class="form-itm" required>
									<option value="">All Categories</option>
									  <option value="estate">Real Estate</option>
									  <option value="Books">Books & Magazines</option>
									  <option value="furniture">Furniture</option>
									  <option value="electronics">Electronics</option>
									  <option value="vehicles">Cars & Vehicles</option>
									  <option value="electronics">Electronics</option>
									</select>
								</div>
								<!-- form-group -->
								<!-- form-group -->
								<div class="btn-box">
								<input type="submit" value="Search" class="submit-btn">
								</div>
								<!-- form-group -->
							</div>
							<!-- form-groups -->
						</form>
						<!-- form-main -->
					</div>
					<!-- form-container -->
				</div>
				<!-- inner-box -->
			</div>
			<!-- container -->
		</section>
		<!-- hero-section -->
		<!-- featured-ads -->
		<section class="bg-light pb-60">
			<!-- container -->
			<div class="container">
				<!-- featured-container -->
				<div class="featured-container">
					<!-- featured-style -->
					<ul class="featured-style text-center">
						<!-- featured-list -->
						<li class="featured-list">
							<!-- featured-img -->
							<!-- <img src="assets/images/Apartment.svg" alt="home" class="featured-img"> -->
							<!-- <i class="fa-solid fa-house featured-img"></i> -->
							<i class="fa-solid fa-house-signal featured-img"></i>
							<!-- featured-img -->
							<!-- featured-link -->
							<a href="#" class="featured-link">Real Estate</a>
							<!-- featured-link -->
							<!-- featured-count -->
							<span class="featured-count">3,921</span>
							<!-- featured-count -->
						</li>
						<!-- featured-list -->
						<!-- featured-list -->
						<li class="featured-list">
							<!-- featured-img -->
							<!-- <img src="assets/images/Books.png" alt="home" class="featured-img"> -->
							<i class="fa-solid fa-book featured-img"></i>
							<!-- featured-img -->
							<!-- featured-link -->
							<a href="#" class="featured-link">Books & Magazines</a>
							<!-- featured-link -->
							<!-- featured-count -->
							<span class="featured-count">398</span>
							<!-- featured-count -->
						</li>
						<!-- featured-list -->
						<!-- featured-list -->
						<li class="featured-list">
							<!-- featured-img -->
							<!-- <img src="assets/images/Door.png" alt="home" class="featured-img"> -->
							<i class="fa-solid fa-chair featured-img "></i>
							<!-- featured-img -->
							<!-- featured-link -->
							<a href="#" class="featured-link">Furniture</a>
							<!-- featured-link -->
							<!-- featured-count -->
							<span class="featured-count">1,229</span>
							<!-- featured-count -->
						</li>
						<!-- featured-list -->
						<!-- featured-list -->
						<li class="featured-list">
							<!-- featured-img -->
							<!-- <img src="assets/images/Light.png" alt="home" class="featured-img"> -->
							<i class="fa-solid fa-lightbulb featured-img"></i>
							<!-- featured-img -->
							<!-- featured-link -->
							<a href="#" class="featured-link">Electronics</a>
							<!-- featured-link -->
							<!-- featured-count -->
							<span class="featured-count">32,891</span>
							<!-- featured-count -->
						</li>
						<!-- featured-list -->
						<!-- featured-list -->
						<li class="featured-list">
							<!-- featured-img -->
							<!-- <img src="assets/images/cars.png" alt="home" class="featured-img"> -->
							<i class="fa-solid fa-car featured-img"></i>
							<!-- featured-img -->
							<!-- featured-link -->
							<a href="#" class="featured-link">Cars & Vehicles</a>
							<!-- featured-link -->
							<!-- featured-count -->
							<span class="featured-count">29,221</span>
							<!-- featured-count -->
						</li>
						<!-- featured-list -->
						<!-- featured-list -->
						<li class="featured-list">
							<!-- featured-img -->
							<!-- <img src="assets/images/more.png" alt="home" class="featured-img"> -->
							<i class="fa-solid fa-square-caret-down featured-img other-icn"></i>
							<!-- featured-img -->
							<!-- featured-link -->
							<a href="#" class="featured-link">Other</a>
							<!-- featured-link -->
							<!-- featured-count -->
							<span class="featured-count">219</span>
							<!-- featured-count -->
						</li>
						<!-- featured-list -->
					</ul>
					<!-- featured-style -->
				</div>
				<!-- featured-container -->
				<!-- featured-ads-container -->
				<div class="featured-ads-container">
					<!-- featured-ads-title -->
					<h3 class="featured-ads-title">Featured Ads</h3>
					<!-- featured-ads-title -->
					<!-- featured-ads-->
					<div class="featured-ads  owl-carousel">
						<!-- grid-col-3 -->
						<div class="grid-col-3 item">
							<!-- ftu-ads-list -->
							<div class="grid-col-inner box-style">
								<!-- ftu-ads-link -->
								<a href="#" class="ftu-ads-link bg-house-img featured-ads-img">
								</a>
								<!-- ftu-ads-link -->
								<!-- ftu-content -->
								<div class="ftu-content p-20">
									<!-- like-box -->
									<div class="like-box">
										<!-- like-txt -->
										<span class="like-txt">Cars & vehicles</span>
										<!-- like-txt -->
										<!-- like-icon-->
										<span class="like-icon"><i class="fa-solid fa-heart"></i></span>
										<!-- like-icon-->
									</div>
									<!-- like-box -->
									<!-- ads-subTitle -->
									<a href="#" class="ads-subTitle">red luxury car</a>
									<!-- ads-subTitle -->
									<!-- ads-dis -->
									<p class="ads-dis fnt-13">don st, brooklyn, new york </p>
									<!-- ads-dis -->
									<!-- rating-box -->
									<div class="rating-box">
										<span class="rating-list"><i class="fa-solid fa-star"></i></span>
										<span class="rating-list"><i class="fa-solid fa-star"></i></span>
										<span class="rating-list"><i class="fa-solid fa-star"></i></span>
										<span class="rating-list"><i class="fa-solid fa-star"></i></span>
										<span class="rating-list"><i class="fa-solid fa-star clr-grey"></i></span>
										<span class="rating-text fnt-13">(3 Reviews)</span>
									</div>
									<!-- rating-box -->
								</div>
								<!-- ftu-content -->
							</div>	
							<!-- grid-col-inner -->
						</div>
						<!-- grid-col-3  -->
						<!-- grid-col-3 -->
						<div class="grid-col-3 item">
							<!-- ftu-ads-list -->
							<div class="grid-col-inner box-style">
								<!-- ftu-ads-link -->
								<a href="#" class="ftu-ads-link bg-car-img featured-ads-img">
								</a>
								<!-- ftu-ads-link -->
								<!-- ftu-content -->
								<div class="ftu-content p-20">
									<!-- like-box -->
									<div class="like-box">
										<!-- like-txt -->
										<span class="like-txt">Cars & vehicles</span>
										<!-- like-txt -->
										<!-- like-icon-->
										<span class="like-icon"><i class="fa-solid fa-heart"></i></span>
										<!-- like-icon-->
									</div>
									<!-- like-box -->
									<!-- ads-subTitle -->
									<a href="#" class="ads-subTitle">red luxury car</a>
									<!-- ads-subTitle -->
									<!-- ads-dis -->
									<p class="ads-dis fnt-13">don st, brooklyn, new york </p>
									<!-- ads-dis -->
									<!-- rating-box -->
									<div class="rating-box">
										<span class="rating-list"><i class="fa-solid fa-star"></i></span>
										<span class="rating-list"><i class="fa-solid fa-star"></i></span>
										<span class="rating-list"><i class="fa-solid fa-star"></i></span>
										<span class="rating-list"><i class="fa-solid fa-star"></i></span>
										<span class="rating-list"><i class="fa-solid fa-star clr-grey"></i></span>
										<span class="rating-text fnt-13">(3 Reviews)</span>
									</div>
									<!-- rating-box -->
								</div>
								<!-- ftu-content -->
							</div>	
							<!-- grid-col-inner -->
						</div>
						<!-- grid-col-3  -->
						<!-- grid-col-3 -->
						<div class="grid-col-3 item">
							<!-- ftu-ads-list -->
							<div class="grid-col-inner box-style">
								<!-- ftu-ads-link -->
								<a href="#" class="ftu-ads-link bg-phone-img featured-ads-img">
								</a>
								<!-- ftu-ads-link -->
								<!-- ftu-content -->
								<div class="ftu-content p-20">
									<!-- like-box -->
									<div class="like-box">
										<!-- like-txt -->
										<span class="like-txt">Cars & vehicles</span>
										<!-- like-txt -->
										<!-- like-icon-->
										<span class="like-icon"><i class="fa-solid fa-heart"></i></span>
										<!-- like-icon-->
									</div>
									<!-- like-box -->
									<!-- ads-subTitle -->
									<a href="#" class="ads-subTitle">red luxury car</a>
									<!-- ads-subTitle -->
									<!-- ads-dis -->
									<p class="ads-dis fnt-13">don st, brooklyn, new york </p>
									<!-- ads-dis -->
									<!-- rating-box -->
									<div class="rating-box">
										<span class="rating-list"><i class="fa-solid fa-star"></i></span>
										<span class="rating-list"><i class="fa-solid fa-star"></i></span>
										<span class="rating-list"><i class="fa-solid fa-star"></i></span>
										<span class="rating-list"><i class="fa-solid fa-star"></i></span>
										<span class="rating-list"><i class="fa-solid fa-star clr-grey"></i></span>
										<span class="rating-text fnt-13">(3 Reviews)</span>
									</div>
									<!-- rating-box -->
								</div>
								<!-- ftu-content -->
							</div>	
							<!-- grid-col-inner -->
						</div>
						<!-- grid-col-3  -->
						<!-- grid-col-3 -->
						<div class="grid-col-3 item">
							<!-- ftu-ads-list -->
							<div class="grid-col-inner box-style">
								<!-- ftu-ads-link -->
								<a href="#" class="ftu-ads-link bg-chair-img featured-ads-img">
								</a>
								<!-- ftu-ads-link -->
								<!-- ftu-content -->
								<div class="ftu-content p-20">
									<!-- like-box -->
									<div class="like-box">
										<!-- like-txt -->
										<span class="like-txt">Cars & vehicles</span>
										<!-- like-txt -->
										<!-- like-icon-->
										<span class="like-icon"><i class="fa-solid fa-heart"></i></span>
										<!-- like-icon-->
									</div>
									<!-- like-box -->
									<!-- ads-subTitle -->
									<a href="#" class="ads-subTitle">red luxury car</a>
									<!-- ads-subTitle -->
									<!-- ads-dis -->
									<p class="ads-dis fnt-13">don st, brooklyn, new york </p>
									<!-- ads-dis -->
									<!-- rating-box -->
									<div class="rating-box">
										<span class="rating-list"><i class="fa-solid fa-star"></i></span>
										<span class="rating-list"><i class="fa-solid fa-star"></i></span>
										<span class="rating-list"><i class="fa-solid fa-star"></i></span>
										<span class="rating-list"><i class="fa-solid fa-star"></i></span>
										<span class="rating-list"><i class="fa-solid fa-star clr-grey"></i></span>
										<span class="rating-text fnt-13">(3 Reviews)</span>
									</div>
									<!-- rating-box -->
								</div>
								<!-- ftu-content -->
							</div>	
							<!-- grid-col-inner -->
						</div>
						<!-- grid-col-3  -->
									
					</div>
					<!-- featured-ads-->
					<!-- btn-box -->
					<div class="carousel-btn-box">
						<span class="custom-nav custom-prev"><i class="fa-solid fa-angle-left"></i></span>
						<span class="custom-nav custom-next"><i class="fa-solid fa-angle-right"></i></span>
					</div>
					<!-- btn-box -->
				</div>
				<!-- featured-ads-container -->
			</div>
			<!-- container -->
		</section>
		<!-- featured-ads -->
		<!-- products-sec -->
		<section class="products-sec p-90">
			<!-- container -->
			<div class="container">
				<!-- title-box -->
				<div class="title-box text-center">
					<!-- page-sub-title -->
					<h3 class="page-sub-title">
						Popular Products
					</h3>
					<!-- page-sub-title -->
					<!-- page-dis -->
					<p class="page-dis">Lorem Ipsum Dolor Sit Amet</p>
					<!-- page-dis -->
					<div class="brd-btm mr-auto"></div>
				</div>
				<!-- title-box -->
				<!-- products-row-->
					<div class="products-row">
						<!-- grid-col-4 -->
						<div class="grid-col-4">
							<!-- ftu-ads-list -->
							<div class="grid-col-inner products-bg box-overlay">
								<!-- pro-content -->
								<div class="pro-content">
									<!-- like-txt -->
									<span class="like-txt">Cars & vehicles</span>
									<!-- like-txt -->	
									<!-- pro-subTitle -->
									<a href="#" class="pro-subTitle">red luxury car</a>
									<!-- pro-subTitle -->
									<!-- like-box -->
									<div class="like-box">
									<!-- pro-dis -->
									<p class="pro-dis">don st, brooklyn, new york </p>
									<!-- pro-dis -->
									<!-- like-icon-->
										<span class="like-icon"><i class="fa-solid fa-heart"></i></span>
									<!-- like-icon-->
									</div>
									<!-- like-box -->	
								</div>
								<!-- pro-content -->
							</div>	
							<!-- grid-col-inner -->
						</div>
						<!-- grid-col-4  -->
						<!-- grid-col-4 -->
						<div class="grid-col-4">
							<!-- ftu-ads-list -->
							<div class="grid-col-inner house-bg box-overlay">
								<!-- pro-content -->
								<div class="pro-content">
									<!-- like-txt -->
									<span class="like-txt">Cars & vehicles</span>
									<!-- like-txt -->	
									<!-- pro-subTitle -->
									<a href="#" class="pro-subTitle">red luxury car</a>
									<!-- pro-subTitle -->
									<!-- like-box -->
									<div class="like-box">
									<!-- pro-dis -->
									<p class="pro-dis">don st, brooklyn, new york </p>
									<!-- pro-dis -->
									<!-- like-icon-->
										<span class="like-icon"><i class="fa-solid fa-heart"></i></span>
									<!-- like-icon-->
									</div>
									<!-- like-box -->	
								</div>
								<!-- pro-content -->
							</div>	
							<!-- grid-col-inner -->
						</div>
						<!-- grid-col-4  -->
						<!-- grid-col-4 -->
						<div class="grid-col-4">
							<!-- ftu-ads-list -->
							<div class="grid-col-inner chair-bg box-overlay">
								<!-- pro-content -->
								<div class="pro-content">
									<!-- like-txt -->
									<span class="like-txt">Cars & vehicles</span>
									<!-- like-txt -->	
									<!-- pro-subTitle -->
									<a href="#" class="pro-subTitle">red luxury car</a>
									<!-- pro-subTitle -->
									<!-- like-box -->
									<div class="like-box">
									<!-- pro-dis -->
									<p class="pro-dis">don st, brooklyn, new york </p>
									<!-- pro-dis -->
									<!-- like-icon-->
										<span class="like-icon"><i class="fa-solid fa-heart"></i></span>
									<!-- like-icon-->
									</div>
									<!-- like-box -->	
								</div>
								<!-- pro-content -->
							</div>	
							<!-- grid-col-inner -->
						</div>
						<!-- grid-col-4  -->
						<!-- grid-col-4 -->
						<div class="grid-col-4">
							<!-- ftu-ads-list -->
							<div class="grid-col-inner phone-bg box-overlay">
								<!-- pro-content -->
								<div class="pro-content">
									<!-- like-txt -->
									<span class="like-txt">Cars & vehicles</span>
									<!-- like-txt -->	
									<!-- pro-subTitle -->
									<a href="#" class="pro-subTitle">red luxury car</a>
									<!-- pro-subTitle -->
									<!-- like-box -->
									<div class="like-box">
									<!-- pro-dis -->
									<p class="pro-dis">don st, brooklyn, new york </p>
									<!-- pro-dis -->
									<!-- like-icon-->
										<span class="like-icon"><i class="fa-solid fa-heart"></i></span>
									<!-- like-icon-->
									</div>
									<!-- like-box -->	
								</div>
								<!-- pro-content -->
							</div>	
							<!-- grid-col-inner -->
						</div>
						<!-- grid-col-4  -->
						<!-- grid-col-4 -->
						<div class="grid-col-4">
							<!-- ftu-ads-list -->
							<div class="grid-col-inner house-bg box-overlay">
								<!-- pro-content -->
								<div class="pro-content">
									<!-- like-txt -->
									<span class="like-txt">Cars & vehicles</span>
									<!-- like-txt -->	
									<!-- pro-subTitle -->
									<a href="#" class="pro-subTitle">red luxury car</a>
									<!-- pro-subTitle -->
									<!-- like-box -->
									<div class="like-box">
									<!-- pro-dis -->
									<p class="pro-dis">don st, brooklyn, new york </p>
									<!-- pro-dis -->
									<!-- like-icon-->
										<span class="like-icon"><i class="fa-solid fa-heart"></i></span>
									<!-- like-icon-->
									</div>
									<!-- like-box -->	
								</div>
								<!-- pro-content -->
							</div>	
							<!-- grid-col-inner -->
						</div>
						<!-- grid-col-4  -->		
					</div>
				<!-- products-row-->
			</div>
			<!-- container -->
		</section>
		<!-- products-sec -->

		<!-- trending-today -->
		<section class="trending-today bg-light p-90">
			<!-- container -->
			<div class="container">
				<?php include 'trending.php'?>			
			</div>
			<!-- container -->
		</section>
		<!-- trending-today -->
		<!-- testimonials-section -->
		<section class="testimonials-section  p-90">
			<!-- container -->
			<div class="container">
				<!-- title-box -->
				<div class="title-box text-center">
					<!-- page-sub-title -->
					<h3 class="page-sub-title">
						Testimonials
					</h3>
					<!-- page-sub-title -->
					
					<div class="brd-btm mr-auto"></div>
				</div>
				<!-- title-box -->
				<?php include'slider.php' ?>	        
			</div>
			<!-- container -->
		</section>
		<!-- testimonials-section -->
		<!-- blogs -->
		<section class="blogs bg-light p-90">
			<!-- container -->
			<div class="container">
				<!-- title-box -->
				<div class="title-box text-center">
					<!-- page-sub-title -->
					<h3 class="page-sub-title">
						Our Blog
					</h3>
					<!-- page-sub-title -->
					<!-- page-dis -->
					<p class="page-dis">See Our Daily News & Updates</p>
					<!-- page-dis -->
					<div class="brd-btm mr-auto"></div>
				</div>
				<!-- title-box -->
				<!-- blogs-row -->
					<div class="blogs-row grid-row mt-50">
						<!-- grid-col-4 -->
						<div class="grid-col-4">
							<!-- grid-col-inner -->
							<div class="grid-col-inner">
								<!-- post-img-box -->
								<div class="post-img-box">
									<!-- post-img -->
									<img src="assets/images/post.webp" alt="post" class="post-img">
									<!-- post-img -->
								</div>
								<!-- post-img-box -->
								<!-- post-title -->
								<h3 class="post-title mt-20"><a href="#" class="post-link">Many People Selling Online</a></h3>
								<!-- post-title -->
								<!-- date-box -->
								<div class="date-box mt-8">
									<span class="itm">by Mark Spiker</span>
									<span class="itm">• Jan 18, 2019 •</span>
									<span class="itm link-clr"> News</span>
								</div>
								<!-- date-box -->
								<!-- post-dis-box -->
								<div class="post-dis-box">
									<p class="post-dis fnt-16">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
								</div>
								<!-- post-dis-box -->
							</div>	
							<!-- grid-col-inner -->
						</div>
						<!-- grid-col-4  -->
						<!-- grid-col-4 -->
						<div class="grid-col-4">
							<!-- grid-col-inner -->
							<div class="grid-col-inner">
								<!-- post-img-box -->
								<div class="post-img-box">
									<!-- post-img -->
									<img src="assets/images/post.webp" alt="post" class="post-img">
									<!-- post-img -->
								</div>
								<!-- post-img-box -->
								<!-- post-title -->
								<h3 class="post-title mt-20"><a href="#" class="post-link">Many People Selling Online</a></h3>
								<!-- post-title -->
								<!-- date-box -->
								<div class="date-box mt-8">
									<span class="itm">by Mark Spiker</span>
									<span class="itm">• Jan 18, 2019 •</span>
									<span class="itm link-clr"> News</span>
								</div>
								<!-- date-box -->
								<!-- post-dis-box -->
								<div class="post-dis-box">
									<p class="post-dis fnt-16">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
								</div>
								<!-- post-dis-box -->
							</div>	
							<!-- grid-col-inner -->
						</div>
						<!-- grid-col-4  -->	
						<!-- grid-col-4 -->
						<div class="grid-col-4">
							<!-- grid-col-inner -->
							<div class="grid-col-inner">
								<!-- post-img-box -->
								<div class="post-img-box">
									<!-- post-img -->
									<img src="assets/images/post.webp" alt="post" class="post-img">
									<!-- post-img -->
								</div>
								<!-- post-img-box -->
								<!-- post-title -->
								<h3 class="post-title mt-20"><a href="#" class="post-link">Many People Selling Online</a></h3>
								<!-- post-title -->
								<!-- date-box -->
								<div class="date-box mt-8">
									<span class="itm">by Mark Spiker</span>
									<span class="itm">• Jan 18, 2019 •</span>
									<span class="itm link-clr"> News</span>
								</div>
								<!-- date-box -->
								<!-- post-dis-box -->
								<div class="post-dis-box">
									<p class="post-dis fnt-16">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
								</div>
								<!-- post-dis-box -->
							</div>	
							<!-- grid-col-inner -->
						</div>
						<!-- grid-col-4  -->				
					</div>
				<!-- blogs-row -->
				<!-- view-btn-box -->
				<div class="view-btn-box">
					<a href="#" class="view-all-btn">view all posts</a>
				</div>
				<!-- view-btn-box -->
			</div>
			<!-- container -->
		</section>
		<!-- blogs -->
		<?php include 'footer.php'?>
	</main>
	<!-- wrap -->

	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/testimonials.js"></script>
	<script>
	/*	owl-carousel*/
		
  	$(document).ready(function(){
    var owl = $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:false, // Hide default navigation
      responsive:{
        0:{
          items:1
        },
        600:{
          items:3
        },
        1000:{
          items:4
        }
      }
    });

    // Custom navigation controls
    $('.custom-next').click(function() {
      owl.trigger('next.owl.carousel');
    });

    $('.custom-prev').click(function() {
      owl.trigger('prev.owl.carousel');
    });
  });
/*	owl-carousel*/


</script>
</body>
</html> 
	