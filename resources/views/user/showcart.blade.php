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
					<div id="fh5co-logo"><a href="index.html">ARHA</a></div>
				</div>
				<div class="col-md-6 col-xs-6 text-center menu-1">
					<ul>
						<li><a href="index.html">Anasayfa</a></li>
						<li><a href="product.html">Mağaza</a></li>
						<li><a href="about.html">Hakkımızda</a></li>
						<li><a href="contact.html">İletişim</a></li>
						
						<li>
						@if (Route::has('login'))
                    @auth

					<li class="nav-item">
						<a class="nav-link" href="{{url('showcart')}}">
							<i class="fas fa-shopping-cart"></i>
						Cart</a>
					</li>
					
					<x-app-layout>

					</x-app-layout>

                    @else
					<li><a class="nav-link" href="{{ route('login') }}" >Giriş Yap</a></li>

                        @if (Route::has('register'))
						<li> <a href="{{ route('register') }}" >Üye Ol</a></li>
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

    @if(session()->has('message'))

<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert"></button>
{{session()->get('message')}}
</div>
@endif

<div style="padding:50px;" align="center">
<table>
        <tr style="background-color:black;">
            <td style="padding:10px; font-size:20px; color:white;">Ürün İsmi</td>
            <td style="padding:10px; font-size:20px;  color:white;">Miktar</td>
            <td style="padding:10px; font-size:20px;  color:white;">Fiyat</td>
            <td style="padding:10px; font-size:20px;  color:white;">Etki</td>
        </tr>

        <form action ="{{url('order')}}" method="POST">
			@csrf

        @foreach($cart as $carts)
        <tr style="background-color:grey;">
        
           <td style="padding:10px; color:white;">
        
           <input type="text" name="productname[]" value="{{$carts->product_title}}"hidden="">

           {{$carts->product_title}}</td>
        
           <td style="padding:10px; color:white;">
        
           <input type="text" name="quantity[]" value="{{$carts->quantity}}" hidden="">
        
           {{$carts->quantity}}</td>
        
           <td style="padding:10px; color:white;">
        
           <input type="text" name="price[]" value="{{$carts->price}}" hidden="">
        
           {{$carts->price}}</td>
        
           <td style="padding:10px; color:white;"><a class="btn btn-danger" href="{{url('delete',$carts->id)}}">Sil</a></td>
        </tr>
        @endforeach

    </table> 

    <button class="btn btn-success">Siparişi Onayla!</button>

        </form>

</div>



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

