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
<meta property="og:url" content="register.php">
<meta property="og:type" content="website">
<meta name="keywords" content="ClassyAds">
<meta name="author" content="Gurdeep Kaur">
<link rel="stylesheet" href="assets/css/register.css">
</head>
<body>
	<!-- wrap -->
	<main class="wrap">
		<!-- hero-section -->
		<section class="hero-section about-bg">
			<!-- container -->
			<div class="container">
				<!-- header -->
				<?php include'header.php';?>
				<!-- header -->
				<!-- inner-box -->
				<div class="ptb-12">
					<!-- headings-container -->
					<div class="text-center"> 
						<!-- hero-title -->
						<h2 class="hero-title">Register</h2>
						<!-- hero-title -->
					</div>
					<!-- headings-container -->
				</div>
				<!-- inner-box -->
			</div>
			<!-- container -->
		</section>
		<!-- hero-section -->
		<!-- register-section -->
		<section class="register-section bg-light">
			<!-- container -->
			<div class="container">
				<!-- login-card-wrap -->
                <div class="login-card-wrap p-90">
                    <!-- login-card-container -->
                    <div class="error-message-box txt-cntr" id="error-message-box"><p class="error-message">*Please Enter Valid Email  </p> <span class="close-btn">X</span>
                    </div>
                    <div class="login-card-container">
                        <!-- card-body -->
                        <div class="card-body">            
                            <!-- login-form" -->
                            <div class="login-form">
                                <!-- form -->
                                <form class="login-form"  onsubmit="return continueOrNot()">
                                    <!--form-group  -->
                                      <div class="register-group mb-20">
                                        <label for="user-email" class="form-label">Email</label>
                                        <input type="email" id="user-email" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" value="" required>
                                      </div>
                                      <!--form-group  -->
                                      <!--form-group  -->
                                      <div class="register-group mb-20">
                                        <label for="user-pass" class="form-label">Password</label>
                                        <input type="password" id="user-pass" name="user-pass" class="form-control" value="" required>
                                      </div>
                                      <!--form-group  -->
                                      <!--form-group  -->
                                      <div class="register-group mb-20">
                                        <label for="Re-type-pass" class="form-label">Re-type Password</label>
                                        <input type="password" id="Re-type-pass" name="Re-type-pass" class="form-control" value="" required>
                                      </div>
                                      <!--form-group  -->
                                      <!-- sign-in-btn-box -->
                                       	<div class="sign-btn-box">
                                        <p class="sign-btn">Have an account? <a href="login.php" class="page-link">Log In</a></p>
                                        </div>
                                        <!-- sign-in-btn-box -->
                                      <!-- btn-box -->
                                        <div class="btn-box">
                                          <button type="submit" class="btn-login" id="login" name="submit">login</button>
                                        </div>
                                        <!-- btn-box -->
                                        
                                </form>
                                <!-- form -->
                            </div>
                            <!-- login-form -->  
                        </div>
                        <!-- card-bod -->
                    </div>
                    <!-- login-card-container -->
                </div>
                <!-- login-card-wrap -->
			</div>
			<!-- container -->
		</section>
		<!-- register-section -->
		<?php include 'footer.php'?>
	</main>
	<!-- wrap -->
</body>
</html> 
	