<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">    
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="There's no limits, only possibilities in living your best life. Whatever stage of your
	journey, whatever your living needs, we are here to grow with you">
    <meta name="keywords" content="Rent small small,smallsmall,smallsmall tech,stayone,buy2let,Monthly rent in Lagos Nigeria,Real Estate,Realtor,monthly rent payment,Home rental in Lagos Nigeria,home">
    
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    
    <link rel="canonical" href="<?php echo base_url(); ?>" />
    
    <meta property="og:locale" content="en_US" />
    
    <meta property="og:type" content="website" />
    
    <meta property="og:title" content="Home - Life starts with steps" />
    
    <meta property="og:description" content="There's no limits, only possibilities in living your best life. Whatever stage of your
	journey, whatever your living needs, we are here to grow with you" />
    
    <meta property="og:url" content="<?php echo base_url(); ?>" />
    
    <meta property="og:site_name" content="Rent and Buy apartments in Nigeria with flexible monthly payment" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Meta Data -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>Smallsmall</title>

	<link rel="icon" href="<?php echo base_url(); ?>assets/front/assets/img/fav.png" type="image/x-icon" />
	<!-- Dependency Styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/dependencies/bootstrap/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/dependencies/fontawesome/css/all.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/dependencies/swiper/css/swiper.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/dependencies/wow/css/animate.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/dependencies/magnific-popup/css/magnific-popup.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/dependencies/components-elegant-icons/css/elegant-icons.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/dependencies/simple-line-icons/css/simple-line-icons.css" type="text/css">

	<!-- Site Stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/assets/css/app.css?version=<?php echo rand(199, 99999999); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/assets/css/custom-css.css?version=<?php echo rand(199, 99999999); ?>" type="text/css">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="http://fonts.cdnfonts.com/css/gothaem?styles=17581,17583,17585,17587,17579,17588,17589" rel="stylesheet">

	<!-- swiper cnd -->
	<!-- <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/> -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/dependencies/swiper/css/newcss.css" type="text/css">
	
    <script src="<?php echo base_url(); ?>assets/front/dependencies/jquery/jquery.min.js"></script>

</head>
<body id="home-version-1" class="home-version-3" data-style="default">
	<a href="#main_content" data-type="section-switch" class="return-to-top">
		<i class="fa fa-chevron-up"></i>
	</a>
	<div id="main_content">
		<!--=========================-->
		<!--=        Navbar         =-->
		<!--=========================-->
		<header class="site-header header_trans-fixed" data-top="992" id="Div1">
			<div class="container">
				<div class="header-inner">
					<div class="toggle-menu">
						<span class="bar"></span>
						<span class="bar"></span>
						<span class="bar"></span>
					</div>
					<!-- /.toggle-menu -->
					<div class="site-mobile-logo">
						<a href="<?php echo base_url(); ?>" class="logo">
							<img src="<?php echo base_url(); ?>assets/front/assets/img/smallsmall-svglogo.svg" alt="site logo" class="main-logo">
							<img src="<?php echo base_url(); ?>assets/front/assets/img/smallsmall-svglogo.svg" alt="site logo" class="sticky-logo">
						</a>
					</div>
					<nav class="site-nav">
						<div class="close-menu">
							<!-- <span>Close</span> -->
							<i class="ei ei-icon_close"></i>
						</div>
						<div class="site-logo">
							<a href="<?php echo base_url(); ?>" class="logo">
								<img src="<?php echo base_url(); ?>assets/front/assets/img/smallsmall-svglogo.svg" alt="logo" class="main-logo">
								<img src="<?php echo base_url(); ?>assets/front/assets/img/smallsmall-svglogo.svg" alt="logo" class="sticky-logo">
							</a>
							<ul class="site-main-menu">
								<li>
									<a href="https://rent.smallsmall.com" target="_blank"><span style="font-size:10px;display:block;width:100%;line-height:10px;margin:0">Rent</span>RentSmallSmall</a>

								</li>
								<li>
									<a href="https://buy.smallsmall.com" target="_blank"><span style="font-size:10px;display:block;width:100%;line-height:10px;margin:0">Own</span>BuySmallSmall</a>
								</li>
								<li>
									<a href="https://stay.smallsmall.com" target="_blank"><span style="font-size:10px;display:block;width:100%;line-height:10px;margin:0">Stay nightly</span>StaySmallSmall</a>
								</li>								
							</ul>
						</div>
						<!-- /.site-logo -->
						<div class="menu-wrapper" data-top="992">
							<div class="nav-right">
								<?php if(@$userID && @$user_type == 'tenant' ){ ?>

									<!--- Tenant button ---->
									<a href="https://rent.smallsmall.com/dashboard" type="button" class="m-nav-btn nav-btn">Dashboard</a>
							
								<?php }else if(@$userID && @$user_type == 'landlord' ){ ?>

									<!--- Landlord button ---->
									<a href="https://rent.smallsmall.com/landlord/dashboard" type="button" class="m-nav-btn nav-btn">Dashboard</a>
							
                				<?php }else{ ?>

									<a type="button" data-toggle="modal" data-target="#exampleModalCenter" onclick="switchVisible();" class="m-nav-btn nav-btn-2">Login</a>
									<a type="button" data-toggle="modal" data-target="#exampleModalCenter2" onclick="switchVisible();" class="m-nav-btn nav-btn">Create Account</a>

								<?php } ?>
							</div>
						</div>
						<!-- /.menu-wrapper -->
					</nav><!-- /.site-nav -->
				</div><!-- /.header-inner -->
			</div><!-- /.container -->
		</header><!-- /.site-header -->
		<script>
			function switchVisible() {
				if (document.getElementById('Div1')) {
					// document.getElementById('Div1').style.display == 'none !important'
					if (document.getElementById('Div1').style.display == 'none') {
						document.getElementById('Div1').style.display = 'block';
						document.getElementById('Div2').style.display = 'none';
					}
					else {
						document.getElementById('Div1').style.display = 'none';
						document.getElementById('Div2').style.display = 'block';
					}
				}
            }
            function visibleMenu() {
                if (document.getElementById('Div1')) {
                    // document.getElementById('Div1').style.display == 'none !important'
                    if (document.getElementById('Div1').style.display == 'none') {
                        document.getElementById('Div1').style.display = 'block';
                        document.getElementById('Div2').style.display = 'none';
                    }
                    else {
                        document.getElementById('Div1').style.display = 'none';
                        document.getElementById('Div2').style.display = 'block';
                    }
                }
            }
        </script>
