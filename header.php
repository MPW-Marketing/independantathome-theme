<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package indep@home
 */

?>
<?php $show_slider = get_post_meta( get_the_ID(), 'show_slider', true );
	if ($show_slider) {$slider_number = get_post_meta( get_the_ID(), 'slider_number', true );}
 ?>
	<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'independantathome' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
		<div class="logo-container content-area"
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<?php
indep_the_site_logo()
?>
</a>
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
			</div><!--.logo container -->
			<div class="branding-right widget-area">
			<?php if ( is_active_sidebar( 'header_right_widget' ) ) : ?>
	<div id="header_right_widget">
		<?php dynamic_sidebar( 'header_right_widget' ); ?>
	</div>
<?php endif; ?>
</div><!-- .branding-right-->
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'independantathome' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
	<?php
	if ($show_slider) {
	layerslider($slider_number);
	} ?>
