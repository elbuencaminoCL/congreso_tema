<!doctype html>
<!--[if lt IE 7 ]> <html> <![endif]-->
<!--[if IE 7 ]>    <html> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); if(is_home()||is_page('inicio')) { echo ' | '; bloginfo('description'); } ?></title>
<?php if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php endwhile; endif; elseif(is_home()) : ?>
<meta name="description" content="" />
<?php else: ?>
<meta name="description" content=""> 
<?php endif; ?>
<meta name="keywords" content="" />	
<meta name="msvalidate.01" content="14394656F4F99B3FA85F80F17EBD0C32" />
<?php if(is_home() || is_single() || is_page()) { echo '<meta name="robots" content="index,follow" />'; } else { echo '<meta name="robots" content="noindex,follow" />'; } ?>
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('woo_feedburner_url') <> "" ) { echo get_option('woo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
<!-- styles / fonts -->
<!-- styles / fonts -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" />
<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" media="screen" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.scrollTo-1.4.2-min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.bpopup-0.11.0.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<?php if ( is_page('inicio') || is_front_page() ) { ?>
	<script type="text/javascript">
		$(document).ready(function(){
			//$('#inicio').parallax("50%", 0.1);
			//$('#intro').parallax("50%", 0.3);
			//$('#programa').parallax("50%", 0.3);
			//$('#ubicacion').parallax("50%", 0.1);
			//$('#auspiciadores').parallax("50%", 0.3);
			$('#main-nav').affix({
			    offset: {
			        top: 695
			    }
			});	
			$('#main-nav li.menu a[href^="#"]').on('click',function (e) {
			    e.preventDefault();
			    var target = this.hash;
			    var $target = $(target);
			    $('html, body').stop().animate({
			        'scrollTop': $target.offset().top
			    }, 900, 'swing', function () {
			        window.location.hash = target;
			    });
			});
			$('li.contacto a').addClass('descargar');
			$('li.contacto a').attr('id', 'pop-contacto');
		})
	</script>
	<script>
		;(function($) {
	        $(function() {
				$('#pop-dr-johan-wolfaardt').bind('click', function(e) {
					e.preventDefault();
					$('#cv-dr-johan-wolfaardt').bPopup();
	            });
	            $('#pop-dr-hadi-seikaly').bind('click', function(e) {
					e.preventDefault();
					$('#cv-dr-hadi-seikaly').bPopup();
	            });
	            $('#pop-dra-jana-rieger').bind('click', function(e) {
					e.preventDefault();
					$('#cv-dra-jana-rieger').bPopup();
	            });
	            $('#pop-dr-harry-reintsema').bind('click', function(e) {
					e.preventDefault();
					$('#cv-dr-harry-reintsema').bPopup();
	            });
	            $('#pop-dr-trevor-coward').bind('click', function(e) {
					e.preventDefault();
					$('#cv-dr-trevor-coward').bPopup();
	            });
	            $('#pop-dr-luciano-dib').bind('click', function(e) {
					e.preventDefault();
					$('#cv-dr-luciano-dib').bPopup();
	            });
	            $('#pop-dr-freddy-alvarez').bind('click', function(e) {
					e.preventDefault();
					$('#cv-dr-freddy-alvarez').bPopup();
	            });
	            $('#pop-dra-rosemary-seelaus').bind('click', function(e) {
					e.preventDefault();
					$('#cv-dra-rosemary-seelaus').bPopup();
	            });
	            $('#pop-inscripcion').bind('click', function(e) {
					e.preventDefault();
					$('#form-inscripcion').bPopup();
	            });
	            $('#pop-contacto').bind('click', function(e) {
					e.preventDefault();
					$('#form-contacto').bPopup();
	            });
	            $('#pop-mapa').bind('click', function(e) {
					e.preventDefault();
					$('#mapa').bPopup();
	            });
	            $('#pop-como-llegar').bind('click', function(e) {
					e.preventDefault();
					$('#como-llegar').bPopup();
	            });
	            $('#pop-info-viaje').bind('click', function(e) {
					e.preventDefault();
					$('#info-viaje').bPopup();
	            });
	            $('#pop-servicio').bind('click', function(e) {
					e.preventDefault();
					$('#servicio').bPopup();
	            });
	            $('#pop-recorrido').bind('click', function(e) {
					e.preventDefault();
					$('#recorrido').bPopup();
	            });
	        });
	    })(jQuery);
	</script>
<?php } ?>
<!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
<![endif]-->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-44982249-9', 'auto');
	ga('send', 'pageview');
</script>
<?php wp_head();?>
</head>

<body <?php body_class(); ?>>
	<?php if ( is_page('inicio') || is_front_page() ) { ?>
		<div id="wrapper">
			<header id="header" class="clearfix">
				<div class="container">
				    <nav id="lg-nav">
				    	<?php dynamic_sidebar( 'sidebar-general' ); ?>
				    </nav>
				</div>
			</header>
	<?php } else { ?>
		<header style="display:none;"></header>
	<?php } ?>