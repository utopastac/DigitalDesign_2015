<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo( 'name' ) ?></title>
		<meta charset="utf-8">
        <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="robots" content="noindex">
		<meta name="description" content="Peter Wright - Interaction Design and Creative technology"/>
		<meta name="keywords" content="Design, Webdesign, Interaction, UX, IA" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="apple-touch-icon-precomposed.png" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.png" />

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

		<!-- latest jQuery direct from google's CDN -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>

		<script type="text/javascript" src="//use.typekit.net/zdj0avb.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<!--<script type="text/javascript" src="/wp-content/themes/pattern/js/Utils.js"></script>
        <script type="text/javascript" src="/wp-content/themes/pattern/js/App.js"></script>-->
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.address-1.4.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.waitforimages.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/Utils.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/App.js"></script>

        
        <script type="text/javascript" id="sourcecode"> //<![CDATA[  
			$(document).ready(function(){
				
				var app = new App();
				
			});
		 //]]></script>
         
         <?php wp_head(); ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-10737615-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
         
	</head>

<body>

<!-- HEADER -->
<div class = "screen head">
<div class = "wrapper">
  
      <header id = "top">
      	<nav>
        	<ul>
				<li><a<?php if(is_home()) echo ' class = "current"'; ?> href="<?php echo home_url('/'); ?>">Work</a></li>
				<li class = "line"></li>
				<li><a<?php if(is_page('Profile')) echo ' class = "current"'; ?> href="<?php echo get_permalink( get_page_by_title( 'Profile' ) ); ?>">Profile</a></li>
			</ul>
        </nav>
		<div class = "clearfix"></div>
      </header>

</div>
</div>
