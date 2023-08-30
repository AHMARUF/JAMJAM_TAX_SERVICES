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
								<li>Blog</li>
							</ul>
							<h1>Our Blogs</h1>
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

			<!-- BLogs grid -->
			<div class="cr-section pg-blogs-area section-padding--xlg bg--white">
				<div class="container">
						
					<div class="row pg-blog-area__blogs justify-content-center">

						<!-- Single Blog -->
						<div class="col-lg-4 col-md-6">
							<article class="blog sticky">
								<div class="blog__thumb">
									<a href="blog-details.html">
										<img src="assets/images/blog/blog-thumbnail-1.webp" alt="blog thumb">
									</a>
								</div>
								<div class="blog__content">
									<header class="blog__content__header">
										<ul class="blog__content__categories">
											<li><a href="blog-right-sidebar.html">Tax</a></li>
											<li><a href="blog-right-sidebar.html">Personal Tax</a></li>
										</ul>
										<h4><a href="blog-details.html">How to calculate tax ?</a></h4>
									</header>
									<footer class="blog__content__footer">
										<ul class="blog__content__meta">
											<li>October 28.</li>
											<li><a href="blog-right-sidebar.html">Alex Smith.</a></li>
											<li><a href="blog-right-sidebar.html">4 Comments</a></li>
										</ul>
										<p>Perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudanti, totam rem aperiam, eaque ipsa quae so some ulation </p>
									</footer>
								</div>
							</article>
						</div><!--// Single Blog -->

						<!-- Single Blog -->
						<div class="col-lg-4 col-md-6">
							<article class="blog">
								<div class="blog__thumb">
									<iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/347257536&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
								</div>
								<div class="blog__content">
									<header class="blog__content__header">
										<ul class="blog__content__categories">
											<li><a href="blog-right-sidebar.html">Tax</a></li>
											<li><a href="blog-right-sidebar.html">Tax Tutorial</a></li>
										</ul>
										<h4><a href="blog-details.html">TAX CALCULATION TUTORIAL</a></h4>
									</header>
									<footer class="blog__content__footer">
										<ul class="blog__content__meta">
											<li>October 28.</li>
											<li><a href="blog-right-sidebar.html">Momen Bhuiyan.</a></li>
											<li><a href="blog-right-sidebar.html">6 Comments</a></li>
										</ul>
										<p>Perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudanti, totam rem aperiam, eaque ipsa quae so some ulation </p>
									</footer>
								</div>
							</article>
						</div><!--// Single Blog -->

						<!-- Single Blog -->
						<div class="col-lg-4 col-md-6">
							<article class="blog blog--slider-active">
								<div class="blog__thumb">
									<a href="blog-details-slider.html">
										<img src="assets/images/blog/blog-thumbnail-2.webp" alt="blog thumb">
									</a>
									<a href="blog-details-slider.html">
										<img src="assets/images/blog/blog-thumbnail-1.webp" alt="blog thumb">
									</a>
								</div>
								<div class="blog__content">
									<header class="blog__content__header">
										<ul class="blog__content__categories">
											<li><a href="blog-right-sidebar.html">BUSINESS</a></li>
											<li><a href="blog-right-sidebar.html">BUSINESS DEVELOPMENT</a></li>
										</ul>
										<h4><a href="blog-details-slider.html">BUSINESS DEVELOPMENT</a></h4>
									</header>
									<footer class="blog__content__footer">
										<ul class="blog__content__meta">
											<li>October 28.</li>
											<li><a href="blog-right-sidebar.html">Jesica Sharlin.</a></li>
											<li><a href="blog-right-sidebar.html">12 Comments</a></li>
										</ul>
										<p>Perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudanti, totam rem aperiam, eaque ipsa quae so some ulation </p>
									</footer>
								</div>
							</article>
						</div><!--// Single Blog -->

						<!-- Single Blog -->
						<div class="col-lg-4 col-md-6">
							<article class="blog blog--slider-active">
								<div class="blog__thumb">
									<a href="blog-details-slider.html">
										<img src="assets/images/blog/blog-thumbnail-3.webp" alt="blog thumb">
									</a>
									<a href="blog-details-slider.html">
										<img src="assets/images/blog/blog-thumbnail-1.webp" alt="blog thumb">
									</a>
								</div>
								<div class="blog__content">
									<header class="blog__content__header">
										<ul class="blog__content__categories">
											<li><a href="blog-right-sidebar.html">Tax</a></li>
											<li><a href="blog-right-sidebar.html">Personal Tax</a></li>
										</ul>
										<h4><a href="blog-details-slider.html">Financial Advice</a></h4>
									</header>
									<footer class="blog__content__footer">
										<ul class="blog__content__meta">
											<li>October 28.</li>
											<li><a href="blog-right-sidebar.html">Alex Smith.</a></li>
											<li><a href="blog-right-sidebar.html">4 Comments</a></li>
										</ul>
										<p>Perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudanti, totam rem aperiam, eaque ipsa quae so some ulation </p>
									</footer>
								</div>
							</article>
						</div><!--// Single Blog -->

						<!-- Single Blog -->
						<div class="col-lg-4 col-md-6">
							<article class="blog">
								<div class="blog__thumb">
									<a href="single-blog.html">
										<img src="assets/images/blog/blog-thumbnail-4.webp" alt="blog thumbnail">
									</a>
								</div>
								<div class="blog__content">
									<header class="blog__content__header">
										<ul class="blog__content__categories">
											<li><a href="blog-right-sidebar.html">Tax</a></li>
											<li><a href="blog-right-sidebar.html">Tax Tutorial</a></li>
										</ul>
										<h4><a href="blog-details.html">Tax System Plannnings</a></h4>
									</header>
									<footer class="blog__content__footer">
										<ul class="blog__content__meta">
											<li>October 28.</li>
											<li><a href="blog-right-sidebar.html">Momen Bhuiyan.</a></li>
											<li><a href="blog-right-sidebar.html">6 Comments</a></li>
										</ul>
										<p>Perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudanti, totam rem aperiam, eaque ipsa quae so some ulation </p>
									</footer>
								</div>
							</article>
						</div><!--// Single Blog -->

						<!-- Single Blog -->
						<div class="col-lg-4 col-md-6">
							<article class="blog blog--video">
								<div class="blog__thumb">
									<a href="blog-details-video.html">
										<img src="assets/images/blog/blog-thumbnail-5.webp" alt="blog thumb">
									</a>
									<a class="video-popup-trigger" href="https://www.youtube.com/watch?v=MdBoer-XS9c">
										<span><img src="assets/images/icons/play-icon.webp" alt="blog play icon"></span>
									</a>
								</div>
								<div class="blog__content">
									<header class="blog__content__header">
										<ul class="blog__content__categories">
											<li><a href="blog-right-sidebar.html">BUSINESS</a></li>
											<li><a href="blog-right-sidebar.html">BUSINESS DEVELOPMENT</a></li>
										</ul>
										<h4><a href="blog-details-video.html">IRS TAX PAYER PROTECTION</a></h4>
									</header>
									<footer class="blog__content__footer">
										<ul class="blog__content__meta">
											<li>October 28.</li>
											<li><a href="blog-right-sidebar.html">Jesica Sharlin.</a></li>
											<li><a href="blog-right-sidebar.html">12 Comments</a></li>
										</ul>
										<p>Perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudanti, totam rem aperiam, eaque ipsa quae so some ulation </p>
									</footer>
								</div>
							</article>
						</div><!--// Single Blog -->

						<!-- Single Blog -->
						<div class="col-lg-4 col-md-6">
							<article class="blog sticky">
								<div class="blog__thumb">
									<a href="blog-details.html">
										<img src="assets/images/blog/blog-thumbnail-6.webp" alt="blog thumb">
									</a>
								</div>
								<div class="blog__content">
									<header class="blog__content__header">
										<ul class="blog__content__categories">
											<li><a href="blog-right-sidebar.html">Tax</a></li>
											<li><a href="blog-right-sidebar.html">Personal Tax</a></li>
										</ul>
										<h4><a href="blog-details.html">IN HOUSE TRAINING ON TAX</a></h4>
									</header>
									<footer class="blog__content__footer">
										<ul class="blog__content__meta">
											<li>October 28.</li>
											<li><a href="blog-right-sidebar.html">Alex Smith.</a></li>
											<li><a href="blog-right-sidebar.html">4 Comments</a></li>
										</ul>
										<p>Perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudanti, totam rem aperiam, eaque ipsa quae so some ulation </p>
									</footer>
								</div>
							</article>
						</div><!--// Single Blog -->

						<!-- Single Blog -->
						<div class="col-lg-4 col-md-6">
							<article class="blog">
								<div class="blog__thumb">
									<a href="blog-details.html">
										<img src="assets/images/blog/blog-thumbnail-7.webp" alt="blog thumb">
									</a>
								</div>
								<div class="blog__content">
									<header class="blog__content__header">
										<ul class="blog__content__categories">
											<li><a href="blog-right-sidebar.html">Tax</a></li>
											<li><a href="blog-right-sidebar.html">Tax Tutorial</a></li>
										</ul>
										<h4><a href="blog-details.html">TAX CALCULATION TUTORIAL</a></h4>
									</header>
									<footer class="blog__content__footer">
										<ul class="blog__content__meta">
											<li>October 28.</li>
											<li><a href="blog-right-sidebar.html">Momen Bhuiyan.</a></li>
											<li><a href="blog-right-sidebar.html">6 Comments</a></li>
										</ul>
										<p>Perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudanti, totam rem aperiam, eaque ipsa quae so some ulation </p>
									</footer>
								</div>
							</article>
						</div><!--// Single Blog -->

						<!-- Single Blog -->
						<div class="col-lg-4 col-md-6">
							<article class="blog">
								<div class="blog__thumb">
									<a href="blog-details.html">
										<img src="assets/images/blog/blog-thumbnail-8.webp" alt="blog thumb">
									</a>
								</div>
								<div class="blog__content">
									<header class="blog__content__header">
										<ul class="blog__content__categories">
											<li><a href="blog-right-sidebar.html">BUSINESS</a></li>
											<li><a href="blog-right-sidebar.html">BUSINESS DEVELOPMENT</a></li>
										</ul>
										<h4><a href="blog-details.html">BUSINESS DEVELOPMENT</a></h4>
									</header>
									<footer class="blog__content__footer">
										<ul class="blog__content__meta">
											<li>October 28.</li>
											<li><a href="blog-right-sidebar.html">Jesica Sharlin.</a></li>
											<li><a href="blog-right-sidebar.html">12 Comments</a></li>
										</ul>
										<p>Perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudanti, totam rem aperiam, eaque ipsa quae so some ulation </p>
									</footer>
								</div>
							</article>
						</div><!--// Single Blog -->
						
					</div>

					<div class="cr-pagination text-center">
						<ul>
							<li class="active"><a href="blog.html">1</a></li>
							<li><a href="blog.html">2</a></li>
							<li><a href="blog.html">3</a></li>
							<li><a href="blog.html">4</a></li>
							<li><a href="blog.html">5</a></li>
						</ul>
					</div>

				</div>
			</div><!--// BLogs grid -->

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