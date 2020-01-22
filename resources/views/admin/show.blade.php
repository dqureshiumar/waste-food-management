<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Waste Food Management System</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Food Waste management System" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
    <link rel="stylesheet" href="{{asset('view')}}/css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="{{asset('view')}}/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="{{asset('view')}}/css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link
		href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
		rel="stylesheet">
	<link
		href="//fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- header -->
	{{-- <header id="home">
		<!-- top-bar -->
		<div class="top-bar py-2 border-bottom">
			<div class="container">
				<div class="row middle-flex">
					<div class="col-xl-7 col-md-5 top-social-agile mb-md-0 mb-1 text-lg-left text-center">
						<div class="row">
							<div class="col-xl-3 col-6 header-top_w3layouts">
								<p class="text-da">
									<span class="fa fa-map-marker mr-2"></span>Parma Via, Italy
								</p>
							</div>
							<div class="col-xl-3 col-6 header-top_w3layouts">
								<p class="text-da">
									<span class="fa fa-phone mr-2"></span>+1 000263676
								</p>
							</div>
							<div class="col-xl-6"></div>
						</div>
					</div>
					<div class="col-xl-5 col-md-7 top-social-agile text-md-right text-center pr-sm-0 mt-md-0 mt-2">
						<div class="row middle-flex">
							<div class="col-lg-5 col-4 top-w3layouts p-md-0 text-right">
								<!-- login -->
								<a href="login.html" class="btn login-button-2 text-uppercase text-wh">
									<span class="fa fa-sign-in mr-2"></span>Login</a>
								<!-- //login -->
							</div>
							<div class="col-lg-7 col-8 social-grid-w3">
								<!-- social icons -->
								<ul class="top-right-info">
									<li>
										<p>Follow Us:</p>
									</li>
									<li class="facebook-w3">
										<a href="#facebook">
											<span class="fa fa-facebook-f"></span>
										</a>
									</li>
									<li class="twitter-w3">
										<a href="#twitter">
											<span class="fa fa-twitter"></span>
										</a>
									</li>
									<li class="google-w3">
										<a href="#google">
											<span class="fa fa-google-plus"></span>
										</a>
									</li>
									<li class="dribble-w3">
										<a href="#dribble">
											<span class="fa fa-dribbble"></span>
										</a>
									</li>
								</ul>
								<!-- //social icons -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header> --}}
	<!-- //top-bar -->

	<!-- header 2 -->
	<!-- navigation -->
	{{-- <div class="main-top py-1">
		<div class="container">
			<div class="nav-content">
				<!-- logo -->
				<h1>
					<a id="logo" class="logo" href="index.html">
						<img src="images/logo.png" alt="" class="img-fluid"><span>Tasty</span> Burger
					</a>
				</h1>
				<!-- //logo -->
				<!-- nav -->
				<div class="nav_web-dealingsls">
					<nav>
						<label for="drop" class="toggle">Menu</label>
						<input type="checkbox" id="drop" />
						<ul class="menu">
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About Us</a></li>
							<li>
								<!-- First Tier Drop Down -->
								<label for="drop-3" class="toggle toogle-2">Pages <span class="fa fa-angle-down"
										aria-hidden="true"></span>
								</label>
								<a href="#pages">Pages <span class="fa fa-angle-down" aria-hidden="true"></span></a>
								<input type="checkbox" id="drop-3" />
								<ul>
									<li><a class="drop-text" href="#services">Services</a></li>
									<li><a class="drop-text" href="#chefs">Our Chefs</a></li>
									<li><a class="drop-text" href="index.html">Blog</a></li>
									<li><a class="drop-text" href="single.html">Single Page</a></li>
									<li><a class="drop-text" href="login.html">Login</a></li>
									<li><a class="drop-text" href="register.html">Register</a></li>
								</ul>
							</li>
							<li><a href="menu.html">Menu</a></li>
							<li><a href="contact.html">Contact Us</a></li>
							<li>
								<!-- login -->
								<a href="https://w3layouts.com/" target="_blank" class="dwn-button ml-lg-5">
									<span class="fa fa-cloud-download mt-lg-0 mt-4" aria-hidden="true"></span>
								</a>
								<!-- //login -->
							</li>
						</ul>
					</nav>
				</div>
				<!-- //nav -->
			</div>
		</div>
	</div> --}}
	<!-- //navigation -->
	<!-- //header 2 -->

	<!-- banner -->
	{{-- <div class="main-banner-2">

	</div> --}}
	<!-- //banner -->
	<!-- page details -->
	<div class="breadcrumb-agile bg-light py-2">
		<ol class="breadcrumb bg-light m-0">
			<li class="breadcrumb-item">
				<a href="/">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">{{$food->name}}</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- about -->
	<section class="w3ls-bnrbtm py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section text-center mb-md-5 mb-4">
                <h3 class="w3ls-title mb-3">Details <span></span></h3>
			</div>
			<div class="row">
				<div class="col-lg-6 pr-xl-5 mt-xl-2 mt-lg-0">
                    <h3 class="title-sub mb-4">Food Name : {{$food->foodname}}</h3>
                    <h3 class="title-sub mb-4">Description: {{$food->description}}</h3>
                    <h3 class="title-sub mb-4">Added By: {{App\User::where('id',$food->userid)->value('name')}}</h3>
                    <h3 class="title-sub mb-4">Phone: {{App\User::where('id',$food->userid)->value('phone')}}</h3>
                    <h3 class="title-sub mb-4">Email: {{App\User::where('id',$food->userid)->value('Email')}}</h3>
                    <p class="title-sub mb-4">Address: {{$food->address}}</p>
				</div>
				<div class="col-lg-6 text-center mt-lg-0 mt-4">
					<img src="{{asset('storage')}}/filenames/{{$food->filename}}" alt="about" class="img-fluid" />
				</div>
			</div>
		</div>
	</section>
	<!-- //about -->

	<!-- services -->
	<!-- //services -->

	<!-- team -->

	<!-- //team -->

	<!-- footer -->
	<!-- //footer -->
	<!-- copyright -->
	<div class="cpy-right text-center py-3">
		<p>© 2019 Waste Food Management System</a>
		</p>
	</div>
	<!-- //copyright -->
	<!-- move top icon -->
	<a href="#home" class="move-top text-center">
		<span class="fa fa-level-up" aria-hidden="true"></span>
	</a>
	<!-- //move top icon -->

</body>

</html>