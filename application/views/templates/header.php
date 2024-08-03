<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">    
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="There's no limits, only possibilities in living your best life. Whatever stage of your
	journey, whatever your living needs, we are here to grow with you">
    <meta name="keywords" content="Rent small small,smallsmall,smallsmall tech,stayone,buy2let,Monthly rent in Lagos Nigeria,Real Estate,Realtor,monthly rent payment,Home rental in Lagos Nigeria,home">
    
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    
    <!-- Poper Code Start - poper.ai -->
    <script id="poper-js-script" data-account-id="63435aa036f45572cbae1637da0aeb42" src="https://app.poper.ai/share/poper.js" defer></script>
    <script>
        window.Poper = window.Poper || [];
        window.Poper.push({
            accountID: "63435aa036f45572cbae1637da0aeb42",
        });
    </script>
    <!-- Poper Code End -->

    <link rel="canonical" href="<?php echo base_url(); ?>" />
    
    <meta property="og:locale" content="en_US" />
    
    <meta property="og:type" content="website" />
    
    <meta property="og:title" content="Home - Life starts with steps" />
    
    <meta property="og:description" content="There's no limits, only possibilities in living your best life. Whatever stage of your
	journey, whatever your living needs, we are here to grow with you" />
    
    <meta property="og:url" content="<?php echo base_url(); ?>" />
    
    <meta property="og:site_name" content="Rent and Buy apartments in Nigeria with flexible monthly payment" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Smallsmall</title>

	<link rel="icon" href="<?php echo base_url(); ?>assets/front/assets/img/fav.png" type="image/x-icon" />
	<!-- Dependency Styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css?version=<?php echo rand(99, 9999999); ?>" type="text/css" media="all">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/base/jquery-ui.css" type="text/css" media="all">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" type="text/css" media="all">


</head>
<body>
        <header>
            <div class="header-inner">
                <div id="menu-bars" class="mobile-menu"><i class="fa fa-bars"></i></div>
                <div class="header-logo"><a href=""><img src="assets/img/smallsmall-logo.svg" alt="smallsmall logo" /></a></div>
                <div class="header-navigation">
                    <ul class="menu">
                        <li id="menu-item-products" class="menu-item menu-item-parent"><a>Products <i class="fa fa-chevron-down"></i></a>
                            <ul id="products-menu" class="sub-menu">
                                <li target="_blank" class="menu-item menu-item-parent">
                                    <a href="https://rent.smallsmall.com">RentSmallSmall</a>
                                    <span class="menu-description">
                                        Enjoy flexible monthly rental payments within your means.
                                    </span>
                                </li>
                                <li class="menu-item">
                                    <a target="_blank" href="https://buy.smallsmall.com">BuySmallSmall</a>
                                    <span class="menu-description">
                                        Kickstart your journey to homeownership on your terms.
                                    </span>
                                </li>
                                <li class="menu-item">
                                    <a target="_blank" href="https://househmo.smallsmall.com/">HouseHMO</a>
                                    <span class="menu-description">
                                        Invest in your employees' well-being beyond the workplace.
                                    </span>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-company" class="menu-item menu-item-parent"><a>Company <i class="fa fa-chevron-down"></i></a>
                            <ul id="company-menu" class="sub-menu">
                                <li class="menu-item">
                                    <a href="<?php echo base_url('about'); ?>">Our Story</a>
                                    <span class="menu-description">
                                        Our ambition to impact our country 
                                    </span>
                                </li>
                                <li class="menu-item">
                                    <a target="_blank" href="https://jobs.cvviz.com/smallsmall_">Careers</a>
                                    <span class="menu-description">
                                        Join our team 
                                    </span>
                                </li>
                            </ul>
                        </li> 
                        <li id="menu-item-media" class="menu-item menu-item-parent"><a>Media <i class="fa fa-chevron-down"></i></a>
                            <ul id="media-menu" class="sub-menu">
                                <li class="menu-item">
                                    <a href="https://media.smallsmall.com/category/podcasts/">Podcast</a>
                                    <span class="menu-description">
                                        Join our engagin podcast 
                                    </span>
                                </li>
                                <li class="menu-item">
                                    <a href="https://media.smallsmall.com/category/blogs/">Blog</a>
                                    <span class="menu-description">
                                        Explore our curated articles 
                                    </span>
                                </li>
                                <li class="menu-item">
                                    <a href="https://media.smallsmall.com/category/news/">Newsletter</a>
                                    <span class="menu-description">
                                        Stay updated with deals on all of our platforms 
                                    </span>
                                </li>
                            </ul>

                        </li>
                    </ul>
                    <?php if($loggedIn){ ?>
                        <div class="header-buttons mobile">
                            <div class="header-btn login"><a href="<?php echo base_url('login'); ?>">Login</a></div>
                            <div class="header-btn get-started"><a href="<?php echo base_url('register'); ?>">Get started</a></div>
                        </div>
                    <?php }else{ ?>
                        <div class="header-buttons mobile">
                            <div class="header-btn login"><a href="<?php echo base_url('logout'); ?>">Logout</a></div>
                            <div class="header-btn get-started"><a href="https://rent.smallsmall.com/dashboard">Dashboard</a></div>
                        </div>
                    <?php } ?>
                </div>
                <?php if($loggedIn){ ?>
                    <div class="header-buttons desktop">
                        <div class="header-btn login"><a href="<?php echo base_url('login'); ?>">Login</a></div>
                        <div class="header-btn get-started"><a href="<?php echo base_url('register'); ?>">Get started</a></div>
                    </div>
                <?php }else{ ?>
                    <div class="header-buttons desktop">
                        <div class="header-btn login"><a href="<?php echo base_url('logout'); ?>">Logout</a></div>
                        <div class="header-btn get-started"><a href="htts://rent.smallsmall.com/dashboard">Dashboard</a></div>
                    </div>
                <?php } ?>
            </div>
        </header>
