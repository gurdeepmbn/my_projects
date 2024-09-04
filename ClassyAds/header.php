<!-- header -->
<header class="header">
	<!-- navbar -->
	<nav class="navbar">	
		<!-- logo-container -->
		<div class="logo-container">
			<!-- header-title -->
			<h1 class="header-title">classy<span class="sea-green-clr">ads</span></h1>
			<!-- header-title -->
			<!-- header-logo -->
			<!-- <img src="assets/images/header-logo.webp" class="header-logo"> -->
			<!-- header-logo -->
		</div>
		<!-- logo-container -->
		<!-- toggle-box -->
		<div class="toggle-box">
			<i class="fa-solid fa-bars toggle-btn"></i>
		</div>
		<!-- toggle-box -->
		<!-- navbar-menu -->
		<ul class="navbar-menu">
			<!-- menu-list -->
			<li class="menu-list">
				<!-- menu-link -->
				<a href="index.php" class="menu-link">home</a>
				<!-- menu-link -->
			</li>
			<!-- menu-list -->
			<!-- menu-list -->
			<li class="menu-list">
				<!-- menu-link -->
				<a href="listings.php" class="menu-link">ads</a>
				<!-- menu-link -->
				</li>
				<!-- menu-list -->
			<!-- menu-list -->
			<li class="menu-list show-dropdown">
				<!-- menu-link -->
				<a href="about.php" class="menu-link show">About <span class="dropdown-icn"></span></a>		
				<!-- menu-link -->
				<div class="menu-box">
					<!-- sub-menu -->
					<ul class="sub-menu">
						<!-- sub-menu-list -->
						<li class="sub-menu-list">
						<!-- sub-menu-link -->
						<a href="#" class="sub-menu-link">the company</a>
						<!-- sub-menu-link -->
						</li>
						<!-- sub-menu-list -->
						<!-- sub-menu-list -->
						<li class="sub-menu-list">
						<!-- sub-menu-link -->
						<a href="#" class="sub-menu-link">the leadership</a>
						<!-- sub-menu-link -->
						</li>
						<!-- sub-menu-list -->
						<!-- sub-menu-list -->
						<li class="sub-menu-list">
						<!-- sub-menu-link -->
						<a href="#" class="sub-menu-link">philosophy</a>
						<!-- sub-menu-link -->
						</li>
						<!-- sub-menu-list -->
						<!-- sub-menu-list -->
						<li class="sub-menu-list">
						<!-- sub-menu-link -->
						<a href="#" class="sub-menu-link">careers</a>
						<!-- sub-menu-link -->
						</li>
						<!-- sub-menu-list -->
					</ul>
					<!-- sub-menu -->
					</div>	
				</li>
				<!-- menu-list --> 
				<!-- menu-list -->
				<li class="menu-list">
				<!-- menu-link -->
				<a href="blog.php" class="menu-link">blog</a>
				<!-- menu-link -->
				</li>
				<!-- menu-list -->
				<!-- menu-list -->
				<li class="menu-list bar-line">
				<!-- menu-link -->
				<a href="contact.php" class="menu-link">contact</a>
				<!-- menu-link -->
				</li>
				<!-- menu-list -->
				<!-- menu-list -->
				<li class="menu-list">
				<!-- menu-link -->
				<a href="login.php" class="menu-link">log in</a>
				<!-- menu-link -->
				</li>
				<!-- menu-list -->
				<!-- menu-list -->
				<li class="menu-list">
				<!-- menu-link -->
				<a href="register.php" class="menu-link">register</a>
				<!-- menu-link -->
				</li>
				<!-- menu-list -->
				<!-- menu-list -->
				<li class="menu-list ad-btn-box">
				<!-- menu-link -->
				<a href="#" class="menu-link ad-btn">post an ad</a>
				<!-- menu-link -->
				</li>
				<!-- menu-list -->
		</ul>
		<!-- navbar-menu -->
	</nav>
	<!-- navbar -->
</header>
<!-- header -->
	<script src="assets/js/jquery-min.js"></script>
<script>

  $('.menu-link').click(function()
  {
  	console.log('active');
  	$(this).addClass('active');
  });
</script><script>

  $(".toggle-box").click(function(event){
  	event.preventDefault();
    $(".navbar-menu").toggle(500);
  });

 </script>



	
