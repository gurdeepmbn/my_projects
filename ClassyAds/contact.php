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
<meta property="og:url" content="contact.php">
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
						<h2 class="hero-title">Contact Us</h2>
						<!-- hero-title -->
						<!-- hero-sub-title -->
						<h3 class="hero-sub-title pt-15">Get In Touch</h3>
						<!-- hero-sub-title -->
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
				<!-- grid-row -->
					<div class="grid-row p-90 align-start column-reverse">
						<!-- grid-col-8 -->
						<div class="grid-col-7">
							<!-- login-card-wrap -->
                <div class="login-card-wrap">
                    <!-- login-card-container2 -->
                    <div class="error-message-box txt-cntr" id="error-message-box"><p class="error-message">*Please Enter Valid Email  </p> <span class="close-btn">X</span>
                    </div>
                    <div class="login-card-container2">
                        <!-- card-body -->
                        <div class="card-body">            
                            <!-- login-form" -->
                            <div class="login-form">
                                <!-- form -->
                                <form class="login-form"  onsubmit="return continueOrNot()">
                                	<!-- inline-inputs -->
                                	<div class="inline-inputs mb-20">
                                		<!--form-group  -->
                                      <div class="register-group">
                                        <label for="first-name" class="form-label">First Name</label>
                                        <input type="text" id="first-name" name="first-name" class="form-control" value="" required>
                                      </div>
                                      <!--form-group  -->
                                      <!--form-group  -->
                                      <div class="register-group">
                                        <label for="last-name" class="form-label">Last Name</label>
                                        <input type="text" id="last-name" name="last-name" class="form-control" value="" required>
                                      </div>
                                      <!--form-group  -->
                                	</div>
                                	<!-- inline-inputs -->
                                    <!--form-group  -->
                                      <div class="register-group mb-20">
                                        <label for="user-email" class="form-label">Email</label>
                                        <input type="email" id="user-email" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" value="" required>
                                      </div>
                                      <!--form-group  -->
                                      <!--form-group  -->
                                      <div class="register-group mb-20">
                                        <label for="user-subject" class="form-label">Subject</label>
                                        <input type="text" id="user-subject" name="user-subject" class="form-control" value="" required>
                                      </div>
                                      <!--form-group  -->
                                      <!--form-group  -->
                                      <div class="register-group">
                                        <label for="user-msg" class="form-label">Message</label>
  																			<textarea id="user-msg" name="user-msg" rows="9" cols="80" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                                      </div>
                                      <!--form-group  -->
                                      <!-- btn-box -->
                                        <div class="btn-box">
                                          <button type="submit" class="btn-login" id="login" name="submit">send message</button>
                                        </div>
                                        <!-- btn-box -->
                                        
                                </form>
                                <!-- form -->
                            </div>
                            <!-- login-form -->  
                        </div>
                        <!-- card-bod -->
                    </div>
                    <!-- login-card-container22 -->
                </div>
            <!-- login-card-wrap -->
						</div>
						<!-- grid-col-8 -->
						<!-- grid-col-4 -->
						<div class="grid-col-5">
							<!-- contact-box -->
							<div class="contact-box">
								<!-- details -->
								<div class="details">
									<!-- contact-label -->
									<h3 class="contact-label">Address</h3>
									<!-- contact-label -->
									<!-- contact-dis-box -->
									<div class="contact-dis-box">
										<p class="fnt-16">203 Fake St. Mountain View, San Francisco, California, USA</p>
									</div>
									<!-- contact-dis-box -->
								</div>
								<!-- details -->
								<!-- details -->
								<div class="details">
									<!-- contact-label -->
									<h3 class="contact-label">Phone</h3>
									<!-- contact-label -->
									<!-- contact-dis-box -->
									<div class="contact-dis-box">
										<a href="tel:+1123-456-7890" class="fnt-16 dis-block page-link">123-456-7890</a>
									</div>
									<!-- contact-dis-box -->
								</div>
								<!-- details -->
								<!-- details -->
								<div class="details">
									<!-- contact-label -->
									<h3 class="contact-label">Email Address</h3>
									<!-- contact-label -->
									<!-- contact-dis-box -->
									<div class="contact-dis-box">
										<a href="mailto:support@youremail@domain.com" class="fnt-16 dis-block page-link">youremail@domain.com</a>
									</div>
									<!-- contact-dis-box -->
								</div>
								<!-- details -->
							</div>
							<!-- contact-box -->
							<!-- contact-box -->
							<div class="contact-box mt-20">
								<!-- details -->
								<div class="details">
									<!-- contact-label -->
									<p class="bold-heading">More Info</p>
									<!-- contact-label -->
									<!-- contact-dis-box -->
									<div class="contact-dis-box">
										<p class="fnt-16">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque sed nulla.</p>
									</div>
									<!-- contact-dis-box -->
									<!-- btn-box -->
									<div class="btn-box">
                      <button type="submit" class="btn-login" id="login" name="submit">Learn More</button>
                    </div>
                    <!-- btn-box -->
								</div>
								<!-- details -->
							</div>
							<!-- contact-box -->	
						</div>
						<!-- grid-col-4 -->
					</div>
					<!-- grid-row -->
						
			</div>
			<!-- container -->
		</section>
		<!-- register-section -->
		<!--sectionfag -->
		<section class="sectionfag p-90">
        <!-- container -->
        <div class="container">
          <!-- fagContainer -->
          <div class="fagContainer">
          	<!-- title-box -->
						<div class="title-box text-center">
						<!-- page-sub-title -->
						<h3 class="page-sub-title">
							Frequently Ask Question
						</h3>
					<!-- page-sub-title -->
					<!-- page-dis -->
					<p class="page-dis">Lorem Ipsum Dolor Sit Amet</p>
					<!-- page-dis -->
					<div class="brd-btm mr-auto"></div>
				</div>
				<!-- title-box -->
          	<!--  accordion -->
            <div class="accordion">
            	<!-- accrd -->
              <div class="accrd">
              	<!--label-box  -->
                <div class="label-box"><h3 class="label">How to list my item?</h3></div>
                <!--label-box  -->
                <!--content  -->
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti esse voluptates deleniti, ratione, suscipit quam cumque beatae, enim mollitia voluptatum velit excepturi possimus odio dolore molestiae officiis aspernatur provident praesentium.</p>
                </div>
                <!--content  -->
              </div>
              <!-- accrd -->
              <!-- accrd -->
              <div class="accrd">
              	<!--label-box  -->
                <div class="label-box"><h3 class="label">Is this available in my country?</h3></div>
                <!--label-box  -->
                <!--content  -->
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti esse voluptates deleniti, ratione, suscipit quam cumque beatae, enim mollitia voluptatum velit excepturi possimus odio dolore molestiae officiis aspernatur provident praesentium.</p>
                </div>
                <!--content  -->
              </div>
              <!-- accrd -->
              <!-- accrd -->
              <div class="accrd">
              	<!--label-box  -->
                <div class="label-box"><h3 class="label">Is it free?</h3></div>
                <!--label-box  -->
                <!--content  -->
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti esse voluptates deleniti, ratione, suscipit quam cumque beatae, enim mollitia voluptatum velit excepturi possimus odio dolore molestiae officiis aspernatur provident praesentium.</p>
                </div>
                <!--content  -->
              </div>
              <!-- accrd -->
              <!-- accrd -->
              <div class="accrd">
              	<!--label-box  -->
                <div class="label-box"><h3 class="label">How the system works?</h3></div>
                <!--label-box  -->
                <!--content  -->
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti esse voluptates deleniti, ratione, suscipit quam cumque beatae, enim mollitia voluptatum velit excepturi possimus odio dolore molestiae officiis aspernatur provident praesentium.</p>
                </div>
                <!--content  -->
              </div>
              <!-- accrd -->
            </div>  
            <!--  accordion -->          
          </div>
          <!-- fagContainer -->   
        </div>
        <!-- container -->
    </section>
    <!--sectionfag -->
		<?php include 'footer.php'?>
	</main>
	<!-- wrap -->
	<script>
    const accordion = document.getElementsByClassName("accrd");

    for (i = 0; i < accordion.length; i++) {
      accordion[i].addEventListener("click", function () {
        this.classList.toggle("active");
      });
    }
  </script>  
</body>
</html> 
	