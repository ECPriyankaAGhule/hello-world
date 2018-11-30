<?php
/**
 * The header for our theme.
 *
 * @since   1.0.0
 * @package Claue
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	
		<!-- Global site tag (gtag.js) - Google Analytics 
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-100320031-1"></script>
		<script>
  			window.dataLayer = window.dataLayer || [];
  			function gtag(){dataLayer.push(arguments);}
  			gtag('js', new Date());

  			gtag('config', 'UA-100320031-1');
		</script>-->
		
		<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php wp_head(); ?>
		
		<!-- Facebook Pixel Code 
		<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window,document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		 fbq('init', '208277033247847'); 
		fbq('track', 'PageView');
		</script>
		<noscript>
		 <img height="1" width="1" 
		src="https://www.facebook.com/tr?id=208277033247847&ev=PageView
		&noscript=1"/>
		</noscript>
		 End Facebook Pixel Code -->
		 
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119866438-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-119866438-1');
		</script>
		
	<!--End -->
	<link rel="alternate" href="https://theorganicskinco.com/" hreflang="en-us" />
	</head>
		<body <?php body_class(); ?> <?php jas_claue_schema_metadata( array( 'context' => 'body' ) ); ?>>
		<div id="jas-wrapper">
			<?php jas_claue_header(); ?>