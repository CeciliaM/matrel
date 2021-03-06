<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon.png">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header>
		<div id="responsive-header">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" /><br/>
				<a href="#" class="button"><span>Télécharger le</span><br/>catalogue matrel</a>
		</div>
		<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
			<button class="menu-icon" type="button" data-toggle></button>
			<form method=GET id="form2">
				<input type="search" value="" id="search2" /><button id="btn-search2"><i class="fa fa-search"></i></button>
			</form>

		</div>

		<div class="top-bar" id="example-menu">
			<nav class="menu-centered">
				<img id="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" />
				<ul class="dropdown menu" data-dropdown-menu >
					<li><a href="#">Accueil</a></li>
					<li><a href="#">Produits</a></li>
					<li><a href="#">Qui sommes-nous</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">documentation</a></li>
				</ul>
				<a href="#" id="btn-header" class="button"><span>Télécharger le</span><br/>catalogue matrel</a>
			</nav>
		</div>
	</header>



	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
