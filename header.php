<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo( 'name' ) ?></title>
		<meta charset="utf-8">

        <link rel="shortcut icon" href="favicon.ico"/>
        
        <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="robots" content="index,follow"/>
		<meta name="description" content="Peter Wright - Interaction Design and Creative technology"/>
		<meta name="keywords" content="Design, Webdesign, Interaction, UX, IA" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-76.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-120.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-152.png">

        <link rel="apple-touch-startup-image" href="<?php bloginfo('template_url'); ?>/images/apple-touch-startup.png">

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
        
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

        <!--<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/Utils.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fill.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.matchHeight.js"></script>-->
        

		<script type="text/javascript" src="//use.typekit.net/zdj0avb.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
        
        <script type="text/javascript" id="sourcecode"> //<![CDATA[  
            $(document).ready(function(){

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
  
<header id = "top">
    <h3><a<?php if(is_home()) echo ' class = "current"'; ?> href="<?php echo home_url('/'); ?>">Peter Wright</a></h3>
    <nav>
        <ul>
            <li><a<?php if(is_home()) echo ' class = "current"'; ?> href="<?php echo home_url('/'); ?>">Work</a></li>
            <li><a<?php if(is_page('Profile')) echo ' class = "current"'; ?> href="<?php echo get_permalink( get_page_by_title( 'Profile' ) ); ?>">Profile</a></li>
        </ul>
    </nav>
    <ul id = "social">
        <li><a href = "https://twitter.com/utopastac" target = "_blank" title = "twitter"><i class="fa fa-twitter"></i></a></li>
        <li><a href = "uk.linkedin.com/in/utopastac/" target = "_blank" title = "linkedIn"><i class="fa fa-linkedin"></i></a></li>
        <li><a href = "http://dribbble.com/utopastac" target = "_blank" title = "dribbble"><i class="fa fa-dribbble"></i></a></li>
        <li><a href = "http://patternpic.tumblr.com/" target = "_blank" title = "tumblr"><i class="fa fa-tumblr"></i></a></li>
        <li><a href = "mailto:peter@bub-eye.co.uk" target = "_blank" title = "email"><i class="fa fa-envelope-o"></i></a></li>
    </ul>
</header>

