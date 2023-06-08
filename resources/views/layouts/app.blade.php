<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="keywords" content="bootstrap 5, premium, multipurpose, sass, scss, saas, software" />
	<meta name="description" content="HTML5 Template" />
	<meta name="author" content="www.themeht.com" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Petrichor</title>
	<link href="assets/images/favicon.ico" rel="shortcut icon" />
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet" />
	<link href="assets/css/fontawesome-all.css" rel="stylesheet" />
	<link href="assets/css/line-awesome.min.css" rel="stylesheet" />
	<link href="assets/css/magnific-popup/magnific-popup.css" rel="stylesheet" />
	<link href="assets/css/owl-carousel/owl.carousel.css" rel="stylesheet" />
	<link href="assets/css/base.css" rel="stylesheet" />
	<link href="assets/css/shortcodes.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />
	<link href="assets/css/responsive.css" rel="stylesheet" />
	<link href="assets/css/color-customize/color-customizer.css" rel="stylesheet" />
	@stack('css')
	<link href="assets/css/custom.css" rel="stylesheet" />
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarNav">
	<div class="page-wrapper">
		<div id="ht-preloader">
			<div class="loader clear-loader">
				<div class="loader-box"></div>
				<div class="loader-box"></div>
				<div class="loader-box"></div>
				<div class="loader-box"></div>
				<div class="loader-wrap-text">
					<div class="text">
						<span>P</span>
						<span>E</span>
						<span>T</span>
						<span>R</span>
						<span>I</span>
						<span>C</span>
						<span>H</span>
						<span>O</span>
						<span>R</span>
					</div>
				</div>
			</div>
		</div>
		@include('partials.header')
		@yield('content')
		@include('partials.footer')
	</div>
	<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="flaticon-go-up-in-web"></i></a></div>

	<script src="assets/js/theme.js"></script>
	<script src="assets/js/owl-carousel/owl.carousel.min.js"></script>
	<script src="assets/js/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/counter/counter.js"></script>
	<script src="assets/js/countdown/jquery.countdown.min.js"></script>
	<script src="assets/js/canvas.js"></script>
	<script src="assets/js/confetti.js"></script>
	<script src="assets/js/snap.svg.js"></script>
	<script src="assets/js/step.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/color-customize/color-customizer.js"></script>
	<script src="assets/js/theme-script.js"></script>
	@stack('js')
</body>

</html>
