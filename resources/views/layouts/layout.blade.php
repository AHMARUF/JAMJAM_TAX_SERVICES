<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>JAMJAM TAX SERVICES</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.webp')}}">
	
	<!-- Google font (font-family: 'Josefin Sans', sans-serif;) -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
	
	<!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="assets/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/plugins/flaticon.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/fakeloader.css">
    <link rel="stylesheet" href="assets/css/plugins/meanmenu.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animated-headline.css">
    <link rel="stylesheet" href="assets/css/plugins/youtubepopup.min.css">
    <link rel="stylesheet" href="assets/css/plugins/calender.css">
    <link rel="stylesheet" href="assets/css/plugins/plyr.min.css">
    <link rel="stylesheet" href="assets/css/plugins/select2.min.css">
    <link rel="stylesheet" href="assets/css/plugins/datepicker.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Add your site or application content here -->


	<div class="fakeloader"></div>

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">

		<!-- Header -->
		<header id="header" class="header sticky--header">

			<!-- Header Top Area -->
			<div class="header__top bg--blue d-none d-lg-block">
				<div class="container">
					<div class="header__top__inner">
						<ul class="header__top__info">
							<li>
								<a href="#"><i class="flaticon-old-typical-phone"></i> (306) 241-0316</a>
							</li>
							<li>
								<a href="#"><i class="flaticon-black-back-closed-envelope-shape"></i> info@jamjamtax.ca</a>
							</li>
						</ul>
						<div class="header__top__button">
							<a class="cr-btn cr-btn--lg" href="appointment.html">
								<span>Make an appointment</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!--// Header Top Area -->

			<!-- Header Bottom Area -->
			<div class="header__bottom bg--white">
				<div class="container">
					<div class="header__bottom__inner">

						<div class="header__logo">
							<a href="{{url('/')}}">
								<img src="assets/images/logo/logo.png" alt="header logo" style="width: 300px;">
							</a>
						</div>

						<!-- Main Navigation -->
						<nav id="main-navigation" class="header__menu main-navigation d-none d-lg-flex">
							<ul>
								<li><a href="{{url('/')}}">HOME</a></li>
								<li><a href="{{route('about')}}">ABOUT</a></li>
								<li><a href="{{route('service')}}">SERVICE</a></li>
								<li><a href="{{route('blog')}}">BLOG</a></li>
								<li><a href="{{route('contact')}}">CONTACT</a></li>
							</ul>
						</nav>
						<!--// Main Navigation -->

						<button class="header__toggle d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
							<span></span>
							<span></span>
							<span></span>
						</button>
					</div>
				</div>

			</div>
			<!--// Header Bottom Area -->

		</header>
		<!-- //Header -->
		@yield('content') 
		<!-- Footer Area -->
		<footer id="footer" class="footer-area fixed--footer">

			<!-- Footer Widgets Area -->
			<div class="footer-area__widgets section-padding--md bg--dark--light">
				<div class="container">
					<div class="footer-area__logo text-center">
						<a href="{{url('/')}}">
							<!-- <img src="assets/images/logo/old_logo/logo-footer.webp" alt="footer logo"> -->
							<img src="assets/images/logo/logo.png" alt="footer logo" style="width: 400px; height:100px;">
						</a>
					</div>
					
					<div class="widget-area footer--widgets">

						<!-- Single Widget -->
						<section class="widget widget-about">
							<h5 class="widget-title">ABOUT JAMJAM</h5>
							<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium oloremque laudantium, totam rem onsectetur sires
								to obtain pain of itself because</p>
							<div class="social-icons social-icons--rounded">
								<ul>
									<li class="facebook">
										<a href="https://www.facebook.com/">
											<i class="fa fa-facebook"></i>
										</a>
									</li>
									<li class="twitter">
										<a href="https://twitter.com/">
											<i class="fa fa-twitter"></i>
										</a>
									</li>
									<li class="instagram">
										<a href="https://www.instagram.com/">
											<i class="fa fa-instagram"></i>
										</a>
									</li>
									<li class="google-plus">
										<a href="https://plus.google.com/discover">
											<i class="fa fa-google-plus"></i>
										</a>
									</li>
								</ul>
							</div>
						</section>
						<!--// Single Widget -->

						<!-- Single Widget -->
						<section class="widget widget-quick-links">
							<h5 class="widget-title">QUICK LINKS</h5>
							<ul>
								<li>
									<a href="services.html">Our Services</a>
								</li>
								<li>
									<a href="features.html">Features</a>
								</li>
								<li>
									<a href="about-us.html">About Us</a>
								</li>
								<li>
									<a href="#">Help Centre</a>
								</li>
								<li>
									<a href="contact.html">Contact Us</a>
								</li>
							</ul>
						</section>
						<!--// Single Widget -->

						<!-- Single Widget -->
						<section class="widget widget-twitter-feed">
							<h5 class="widget-title">Twitter Feed</h5>
							<ul>
								<li>
									<p>
										<a href="#">@Alex Smith</a>, unde omnis te us error sit voluptatem</p>
									<span class="time">
										<a href="#">10 Mins ago</a>
									</span>
								</li>
								<li>
									<p>
										<a href="#">@Justin Bieber</a>, unde omnis te us error sit voluptatem</p>
									<span class="time">
										<a href="#">12 Mins ago</a>
									</span>
								</li>
							</ul>
						</section>
						<!--// Single Widget -->

						<!-- Single Widget -->
						<section class="widget widget-contact-info">
							<h5 class="widget-title">Address</h5>
							<ul>
								<li>
									<p>JAMJAM TAX SERVICES</p>
								</li>
								<li>
									<p>Unit 4 & 5, 1205 Walpole Ave</p>
									<p>Saskatoon, SK S7H 2X2, Canada</p>
								</li>
								<li>
									<p>
										<a href="callto://(306) 241-0316">(306) 241-0316</a>
									</p>
								</li>
								<li>
									<p>
										<a href="mailto://info@jamjamtax.ca">info@jamjamtax.ca</a>
									</p>
								</li>
							</ul>
						</section>
						<!--// Single Widget -->

					</div>
				</div>
			</div>
			<!--// Footer Widgets Area -->

			<!-- Footer Copyright Area -->
			<div class="footer-area__copyright bg--dark">
				<div class="container">
					<div class="copyright text-center">
						<!-- <p>&copy; 2022 <span> JAMJAM  </span> Made with <i class="fa fa-heart"></i> by <a href="#">AR</a></p> -->
						<p>&copy; 2023 <span> JAMJAM TAX SERVICES</span> </p>
					</div>
				</div>
			</div>
			<!--// Footer Copyright Area -->

		</footer>
		<!-- //Footer Area -->

	</div>
	<!-- //Main wrapper -->
	
	<!-- Back To Top Start -->
    <button id="backBTn" class="backbtn"><i class="fa fa-angle-up"></i></button>
    <!-- //Back To Top end -->




	<!-- JS
    ============================================ -->

    <!-- Modernizer & jQuery JS -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/ajax-mail.js"></script>
    <script src="assets/js/active.js"></script>

    <!-- Main JS -->
    <script src="assets/js/scripts.js"></script>

</body>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0"></script>
	<script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);
    
        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(40.740610, -73.935242), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on

                styles:[
				    {
				        "featureType": "water",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#e9e9e9"
				            },
				            {
				                "lightness": 17
				            }
				        ]
				    },
				    {
				        "featureType": "landscape",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#f5f5f5"
				            },
				            {
				                "lightness": 20
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "elementType": "geometry.fill",
				        "stylers": [
				            {
				                "color": "#ffffff"
				            },
				            {
				                "lightness": 17
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "elementType": "geometry.stroke",
				        "stylers": [
				            {
				                "color": "#ffffff"
				            },
				            {
				                "lightness": 29
				            },
				            {
				                "weight": 0.2
				            }
				        ]
				    },
				    {
				        "featureType": "road.arterial",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#ffffff"
				            },
				            {
				                "lightness": 18
				            }
				        ]
				    },
				    {
				        "featureType": "road.local",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#ffffff"
				            },
				            {
				                "lightness": 16
				            }
				        ]
				    },
				    {
				        "featureType": "poi",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#f5f5f5"
				            },
				            {
				                "lightness": 21
				            }
				        ]
				    },
				    {
				        "featureType": "poi.park",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#dedede"
				            },
				            {
				                "lightness": 21
				            }
				        ]
				    },
				    {
				        "elementType": "labels.text.stroke",
				        "stylers": [
				            {
				                "visibility": "on"
				            },
				            {
				                "color": "#ffffff"
				            },
				            {
				                "lightness": 16
				            }
				        ]
				    },
				    {
				        "elementType": "labels.text.fill",
				        "stylers": [
				            {
				                "saturation": 36
				            },
				            {
				                "color": "#333333"
				            },
				            {
				                "lightness": 40
				            }
				        ]
				    },
				    {
				        "elementType": "labels.icon",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "transit",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#f2f2f2"
				            },
				            {
				                "lightness": 19
				            }
				        ]
				    },
				    {
				        "featureType": "administrative",
				        "elementType": "geometry.fill",
				        "stylers": [
				            {
				                "color": "#fefefe"
				            },
				            {
				                "lightness": 20
				            }
				        ]
				    },
				    {
				        "featureType": "administrative",
				        "elementType": "geometry.stroke",
				        "stylers": [
				            {
				                "color": "#fefefe"
				            },
				            {
				                "lightness": 17
				            },
				            {
				                "weight": 1.2
				            }
				        ]
				    }
				]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('google-map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.740610, -73.805242),
                map: map,
                title:'Korde',
                icon:"assets/images/icons/marker.webp",
                animation:google.maps.Animation.BOUNCE
            });
        }
    </script>

<!-- Mirrored from htmldemo.net/korde/korde/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jan 2023 17:48:06 GMT -->
</html>