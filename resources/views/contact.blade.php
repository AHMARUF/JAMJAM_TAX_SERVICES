@extends('layouts.layout')
@section('content')

		<!-- Breadcrumb Area -->
		<div id="cr-breadcrumb-area" class="cr-breadcrumb-area section-padding--md">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 col-md-8">
						<div class="cr-breadcrumb">
							<ul class="cr-breadcrumb__pagination">
								<li><a href="index.html">Home</a></li>
								<li>Contact</li>
							</ul>
							<h1>Contact Us</h1>
							<p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem  </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--// Breadcrumb Area -->

		<!-- Offcanvas -->		  
		<div class="offcanvas offcanvas-start" tabindex="2" id="offcanvasMenu">
			<div class="offcanvas-header">
				<div class="offcanvas__logo">
					<a href="index.html">
						<img src="assets/images/logo/logo-theme.webp" alt="header logo">
					</a>
				</div>
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">

				<ul class="offcanvas__info">
					<li>
						<a href="#"><i class="flaticon-old-typical-phone"></i> 01354 568 787</a>
					</li>
					<li>
						<a href="#"><i class="flaticon-black-back-closed-envelope-shape"></i> info@taxco.com</a>
					</li>
				</ul>

				<!-- Main Navigation -->
				<nav class="canvas-menu">
					<ul>
						<li>
							<a href="index.html">HOME</a>
							<ul class="sub-menu">
								<li><a href="index.html">Homepage Classic</a></li>
								<li><a href="index-2.html">Homepage Interactive</a></li>
								<li><a href="index-3.html">Homepage Modern</a></li>
								<li><a href="index-with-content-slider.html">Homepage Content Slider</a></li>
								<li><a href="index-with-single-banner.html">Homepage Single Banner</a></li>
								<li><a href="index-boxed-layout.html">Homepage Boxed Layout</a></li>
							</ul>
						</li>
						<li><a href="about-us.html">ABOUT</a></li>
						<li><a href="features.html">FEATURES</a></li>
						<li>
							<a href="services.html">SERVICE</a>
							<ul class="sub-menu">
								<li><a href="services.html">Services</a></li>
								<li><a href="services-2.html">Services Style 2</a></li>
								<li><a href="single-service.html">Single Service</a></li>
							</ul>
						</li>
						<li>
							<a href="#">PAGES</a>
							<ul class="sub-menu">
								<li><a href="about-us.html">ABOUT</a></li>
								<li>
									<a href="blog.html">BLOG</a>
									<ul class="sub-menu">
										<li><a href="blog.html">Blog</a></li>
										<li><a href="blog-with-right-sidebar.html">Blog With Right Sidebar</a></li>
										<li><a href="blog-with-left-sidebar.html">Blog With Left Sidebar</a></li>
										<li><a href="blog-details.html">Blog Details</a></li>
										<li><a href="blog-details-with-left-sidebar.html">Blog Details With Left Sidebar</a></li>
										<li><a href="blog-details-with-video.html">Blog Details With Video</a></li>
										<li><a href="blog-details-with-slider.html">Blog Details With Slider</a></li>
									</ul>
								</li>
								<li><a href="features.html">FEATURES</a></li>
								<li>
									<a href="services.html">SERVICE</a>
									<ul class="sub-menu">
										<li><a href="services.html">Services</a></li>
										<li><a href="services-2.html">Services Style 2</a></li>
										<li><a href="single-service.html">Single Service</a></li>
									</ul>
								</li>
								<li><a href="advisors.html">Advisors</a></li>
								<li><a href="advisor-details.html">Advisor Details</a></li>
								<li><a href="appointment.html">Appointment</a></li>
							</ul>
						</li>
						<li>
							<a href="blog.html">BLOG</a>
							<ul class="sub-menu">
								<li><a href="blog.html">Blog</a></li>
								<li><a href="blog-with-right-sidebar.html">Blog With Right Sidebar</a></li>
								<li><a href="blog-with-left-sidebar.html">Blog With Left Sidebar</a></li>
								<li><a href="blog-details.html">Blog Details</a></li>
								<li><a href="blog-details-with-left-sidebar.html">Blog Details With Left Sidebar</a></li>
								<li><a href="blog-details-with-video.html">Blog Details With Video</a></li>
								<li><a href="blog-details-with-slider.html">Blog Details With Slider</a></li>
							</ul>
						</li>
						<li><a href="contact.html">CONTACT</a></li>
					</ul>
				</nav>
				<!--// Main Navigation -->

				<div class="offcanvas__button">
					<a class="cr-btn cr-btn--lg" href="appointment.html">
						<span>Make an appointment</span>
					</a>
				</div>
			</div>
		</div>
		<!-- //Offcanvas -->

		<!-- Page Conent -->
		<main class="page-content">

			<!-- Pg Contact -->
			<div class="pg-contact bg--white">

				<!-- Contact Form -->
				<div class="pg-contact-form-area bg--white section-padding--xlg">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="pg-appintment">
									<div class="pg-appintment__title">
										<h2>SEND A MESSAGE</h2>
									</div>
									<div class="pg-appintment__box">
										<form id="contact-form" action="https://htmldemo.net/korde/korde/mail.php" method="POST">
											<div class="row">
												<div class="col-lg-6 col-md-6">
													<div class="single-input">
														<input type="text" name="name" id="name" placeholder="Name">
													</div>
												</div>
												<div class="col-lg-6 col-md-6">
													<div class="single-input">
														<input type="email" name="email" id="email" placeholder="Email">
													</div>
												</div>
												<div class="col-lg-6 col-md-6">
													<div class="single-input">
														<input type="text" name="subject" id="subject"  placeholder="Subject">
													</div>
												</div>
												<div class="col-lg-6 col-md-6">
													<div class="single-input">
														<input type="text" name="phone" id="phone"  placeholder="Phone">
													</div>
												</div>
												<div class="col-lg-12">
													<div class="single-input">
														<textarea name="message" cols="30" rows="5" placeholder="Message"></textarea>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="single-input button text-left">
														<button type="submit" class="cr-btn"><span>Submit</span></button>
													</div>
												</div>
											</div>
										</form>
										<p class="form-message"></p>
									</div>
								</div>
							</div>
							<div class="col-lg-5 d-none d-lg-block">
								<div class="pg-contact-img ml-xl-5 ml-0">
									<img src="assets/images/others/contact-image.webp" alt="contact image">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--// Contact Form -->

				<div class="google-map-wrapper">
					<div id="google-map" class="google-map"></div>
					<div class="container">
						<div class="row">
							<div class="col-xl-8 col-lg-9">
								<div class="pg-contact__content">
									<h1>say hello to us</h1>
									<p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem </p>
									<div class="pg-contact__blocks">
										<div class="single-block address">
											<h6>address</h6>
											<p>256 Notrh Tower, Western City Mid Town, Las Vagas, USA</p>
										</div>
										<div class="single-block phone">
											<h6>Phone</h6>
											<p><a href="#">+008 12568 987 789</a></p>
											<p><a href="#">+008 35687 567 458</a></p>
										</div>
										<div class="single-block web">
											<h6>Web</h6>
											<p><a href="#">info@taxco.com</a></p>
											<p><a href="#">www@taxco.com</a></p>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-8">
											<div class="pg-contact__newsletter">
												<h5>also subscribe our newsletter to be uptodae</h5>
												<form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" target="_blank">
													<input type="email" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your Email here" required>
													<button type="submit"><i class="fa fa-paper-plane-o"></i></button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!--// Pg Contact -->

			<!-- Call To Action Area -->
			<section id="cta-area" class="cta-area section-padding--sm bg--grey--light bg--abstruct-mask">
				 
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<div class="calltoaction text-center">
								<h3>NEED ANY HELP AT<span class="color--theme"> YOUR TAX SOLUTION?</span></h3>
								<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci </p>
								<h6>JUST DAIL <a href="callto://+00812548359874">+008 12548 359 874</a> (TOLL FREE)</h6>
							</div>
						</div>
					</div>
				</div>
			</section><!--// Call To Action Area -->
			
		</main><!-- //Page Conent -->

@endsection