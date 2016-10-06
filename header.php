<!doctype html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="google-site-verification" content="dufcFIkjdprf5OBUtIwsIMAVJ5LKszqrMqMi2TzYxZ0" />

<?php if(is_home()): ?>
	<title>Cambridge Investments Limited - Authorised Discretionary Investment Managers</title>
<?php else: ?>
	<title><?php wp_title(''); ?></title>
<?php endif; ?>

<?php if(is_home()): ?>
	<meta name="keywords" content="Cambridge Investments Limited, independent, authorised, discretionary, investment, management, managers, advisers, Perspective Financial Group, advice, financial planning, CIL" />

	<meta name="description" content="Cambridge Investments Ltd is one of the oldest independent investment management boutiques in the United Kingdom." />
<?php endif; ?>

<link rel="icon" type="image/x-icon" href="/favicon.ico" />

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link media="screen" type="text/css" href="<?php bloginfo('template_url'); ?>/css/cookies/cookiecss.css" rel="stylesheet"/>

<!--[if lte IE 7]>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie.css" type="text/css" />
<![endif]-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/cookie.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var visited = $.cookie("cambcookie");
            if (visited == null) {
                $('.cookie_layer').show();
                $.cookie('cambcookie', 'yes', { expires: 365, path: '/' });
            }
            $.cookie('cambcookie', 'yes', { expires: 365, path: '/' });
        });
    </script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.dwFadingLinks.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery-ui-1.8.6.custom.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.cyclic-fade.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/script.js"></script>

<?php if (is_page('14')) { ?>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/tooltip.js"></script>
<?php  } ?>

<!--[if IE 7]>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie7.css" type="text/css" />
<![endif]-->

<!--[if lt IE 7]>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie6.css" type="text/css" />
<![endif]-->

<!-- WP generated header -->
<?php wp_head(); ?>
<!-- WP generated header -->

<?php flush(); ?>

</head>

<body>

<div id="wrapper">

	<div id="header">

		<div id="logo">
			<a href="<?php bloginfo('url'); ?>"><span>Perspective Financial Group LTD - Creating Wealth</span></a>
		</div><!--logo -->

		<h3 class="header-tel">01223 365656</h3>

		<?php wp_nav_menu('leftnav'); ?>

		<p class="legal"><?php bloginfo('name'); ?> is authorised and regulated by the Financial Conduct Authority</p>



	</div><!--header-->

<div id="body">
