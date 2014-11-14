<!doctype html>



<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->

<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->

<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->

<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->



	<head>

		<meta charset="utf-8">



		<?php // force Internet Explorer to use the latest rendering engine available ?>

		<meta http-equiv="X-UA-Compatible" content="IE=edge">



		<title><?php wp_title(''); ?></title>



		<?php // mobile meta (hooray!) ?>

		<meta name="HandheldFriendly" content="True">

		<meta name="MobileOptimized" content="320">

		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>



		

		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">

		<!--[if IE]>

			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

		<![endif]-->

		<?php // or, set /favicon.ico for IE10 win ?>

		<meta name="msapplication-TileColor" content="#f01d4f">

		



		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

       

        

		<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

        

		<?php // wordpress head functions ?>

		<?php wp_head(); ?>

		<?php // end of wordpress head ?>



		<?php // drop Google Analytics Here ?>

		<?php // end analytics ?>



	</head>



	<body <?php body_class(); ?>>



	


			
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a class="navbar-brand" href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
           <div class="navbar-collapse collapse navbar-ex1-collapse">

        
              <?php /* Primary navigation */
                
                wp_nav_menu( array(
                
                  'menu' => __( 'The Main Menu', 'bootztheme' ),
                
                  'depth' => 2,
                
                  'container' => false,
                
                  'menu_class' => 'nav navbar-nav ',
                
                  //Process nav menu using our custom nav walker
                
                  'walker' => new wp_bootstrap_navwalker())
                
                ); ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <?php get_template_part('inc/jumbotron'); ?>

<div class="container">