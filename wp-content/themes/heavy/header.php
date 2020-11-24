<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package heavy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/tvg2avw.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
/**
 * Header Theme Variables
 * 
 */
$header_theme = get_field('header_theme');
?>
<div id="page" class="site">
	<header id="masthead" class="header header--<?php echo $header_theme;?>">
		<div class="header__wrap container m-auto d-flex justify-content-between align-items-center">
			<a class="logo" href="<?php echo get_option('home');?>">
				<img src="<?php echo bloginfo('template_url');?>/img/heavy-logo.png" />
			</a>
			<nav id="site-navigation" class="main-navigation">
				<?php wp_nav_menu(
					array(
						'container' => ' ',
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
