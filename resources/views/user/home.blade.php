<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Arha-Anasayfa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-2">
					<div id="fh5co-logo"><a href="{{url('redirect')}}">ARHA</a></div>
				</div>
				<div class="col-md-6 col-xs-6 text-center menu-1">
					<ul>
						<li><a href="{{url('redirect')}}">Anasayfa</a></li>
						<li><a href="{{url('product')}}">Ma??aza</a></li>
						<li><a href="about.html">Hakk??m??zda</a></li>
						<li><a href="contact.html">??leti??im</a></li>
						
						<li>
						@if (Route::has('login'))
                    @auth

					<li class="nav-item">
						<a class="nav*link" href="{{url('showcart')}}">
							<i class="fas fa-shopping-cart"></i>
						Cart</a>
					</li>
					
					<x-app-layout>

					</x-app-layout>

                    @else
					<li><a href="{{ route('login') }}" >Giri?? Yap</a></li>

                        @if (Route::has('register'))
						<li> <a href="{{ route('register') }}" >??ye Ol</a></li>
                        @endif
                    @endauth
            @endif
			</li>

					</ul>
				</div>
				<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
					<ul>
						<li class="search">
							<div class="input-group">
						      <input type="text" placeholder="Ara..">
						      <span class="input-group-btn">
						        <button class="btn btn-primary" type="button"><i class="icon-search"></i></button>
						      </span>
						    </div>
						</li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
	
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_1.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/img_bg_2.jpg);">
		   		<div class="container">
		   			
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/img_bg_3.jpg);">
		   		<div class="container">
		   			
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-services" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-credit-card"></i>
						</span>
						<h3>KRED?? KARTI ??MKANI</h3>
						<p>T??m ??r??nlerimizde 8 taksite kadar b??lmeyi taahh??t ediyoruz.</p>

					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-wallet"></i>
						</span>
						<h3>B??T??E DOSTU</h3>
						<p>Avantajl?? fiyatlar??m??z sizleri bekliyor.</p>

					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-paper-plane"></i>
						</span>
						<h3>??CRETS??Z KARGO</h3>
						<p>250 TL ve ??zeri al????veri??lerinizde ??cretsiz kargo imkan?? sa??l??yoruz.</p>

					</div>
				</div>
			</div>
		</div>
	</div>
	
	@include('user.product')
	
	<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Mutlu M????terilerimiz</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person1.jpg" alt="user">
									</figure>
									<span>Dilara Ar??kanl??</span>
									<blockquote>
										<p>&ldquo;??r??nleriniz ger??ekten ??ok ba??ar??l?? ??mmr????m.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person2.jpg" alt="user">
									</figure>
									<span>Merve ??zdilek</span>
									<blockquote>
										<p>&ldquo;Davet i??in ald??????m yakut kolyeniz ger??ekten ??ok ????k te??ekk??r ederim.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person3.jpg" alt="user">
									</figure>
									<span>Murat Yavuz </span>
									<blockquote>
										<p>&ldquo;??r??n??n??z?? e??im i??in ald??m. ??ok be??endi ve ger??ekten foto??raftakinden daha g??zel duruyor.&rdquo;</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h3>ARHA</h3>
					<p>Kaliteyi sevdiklerinizle bulu??turun</p>
				</div>
			

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="/index.html">Anasayfa</a></li>
						<li><a href="/product.html">Ma??aza</a></li>
						<li><a href="/about.html">Hakk??m??zda</a></li>
						<li><a href="/contact.html">??leti??im</a></li>
					</ul>
				</div>
					<div class="row copyright">
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<p>
						<ul class="fh5co-social-icons" >
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</p>
				</div>
			</div>	
			</div>
		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

