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

<div id="page" class="site">
	<header id="masthead" <?php header_classes();?>>
		<div class="header__wrap--mobile container d-none">
			<div class="header__wrap--top">
				<a class="logo" href="<?php echo get_option('home');?>">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 529.44 189.59"><defs></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M137.79,93.86C136.7,118.43,148,133,168.22,133c19.35,0,23.91-14.78,30.87-14.78,2.61,0,5,2,5,5.87,0,8-14.35,22.6-38.91,22.6-28.48,0-48.91-16.08-48.91-52.16,0-27,17.39-51.52,49.34-51.52,27.61,0,42.61,18.26,42.61,42.17a64.7,64.7,0,0,1-.44,8.69ZM138,83.65h49.13a20.27,20.27,0,0,0,.21-3.48c0-12.61-6.3-25.44-23.48-25.44C148.43,54.73,140,67.78,138,83.65Z"/><path class="cls-1" d="M527.69,45.82H486.43a7.18,7.18,0,0,0-2,5.44c0,4.56,2.17,7.17,7,7.17h8.91c-1.08,3.26-3.91,10.44-6.3,16.3L475.78,120h-.22L446.83,58.43h8c4.56,0,6.52-2.61,6.52-7.17a8.84,8.84,0,0,0-1.52-5.44h-72.4a7.14,7.14,0,0,0-2,5.44c0,4.56,2.17,7.17,6.95,7.17h8.92c-1.09,3.26-3.7,10.44-6.31,16.3L375.43,120.6h-.65L348,58.43h7.82c4.57,0,6.53-2.61,6.53-7.17a8.84,8.84,0,0,0-1.52-5.44h-47c-.65.66-1.73,2.18-1.73,5.44,0,4.56,2.16,7.17,6.73,7.17h7.18l38.38,86.08h12L402.73,86c5.46-12,9-19.57,11-24h0c.9-2,2.46-3.61,6.32-3.61s5.51,1.36,6.23,2.88l-.31-.65,29.59,62.11c4.57,10,6.09,13.91,6.09,22,0,9.13-4.57,28.91-17.83,28.91-11.73,0-13.48-7.39-20.21-7.39-3.91,0-5.87,2.82-5.87,6.3,0,8.27,9.13,17,23.26,17,27,0,28.91-27.17,46.73-69.34l14.35-34.13c7.17-16.52,11.09-24.78,12.17-27.61h8.18c4.79,0,7-2.61,7-7.17A8.45,8.45,0,0,0,527.69,45.82Z"/><path class="cls-1" d="M109.24,131.43c4.83,0,7,2.64,7,7.47,0,3.08-1.32,4.84-2,5.28H67a7.68,7.68,0,0,1-1.76-5.28c0-4.83,2.2-7.47,6.81-7.47h8.57V83.74c0-16-4.61-26.82-21.54-26.82-14.28,0-23.73,13.5-23.73,26v48.49H44c4.61,0,6.81,2.64,6.81,7.47A7.68,7.68,0,0,1,49,144.16H1.76C1.1,143.72,0,142,0,138.88c0-4.83,2.2-7.47,6.81-7.47h8.62V12.75H6.85C2.24,12.75,0,10.11,0,5.5,0,2.2,1.14.66,1.8,0H35.43V58.71h.22c4.09-9.22,14.5-16.07,31.21-16.07,23.08,0,34.07,16,34.07,39.56v49.23Z"/><path class="cls-1" d="M327.43,127.16c-6.44,0-5.37,5.79-15.45,5.79-7.52,0-8-7.94-8-18.67v-4.63h0V82.78c-.22-34.57-22-40.44-38.47-40.44-24.57,0-38.26,10.87-38.26,18.92a5,5,0,0,0,4.78,5.22h.22c6.74,0,16.3-11.31,30-11.31,13,0,21.95,7,21.95,27.61v5.87c-4.78-2.18-13.91-5-28.48-5-24.34,0-39.34,12.39-39.34,31.52,0,19.78,13.69,31.73,33.48,31.73,18.69,0,28.24-5.64,34.34-14.76h.22l1-1.12c2.67,11.78,10.08,15.88,24.14,15.88,14.59,0,22.74-8.36,22.74-14.16C332.37,129.09,329.8,127.16,327.43,127.16ZM258.64,133c-13,0-20.87-8.26-20.87-19.78,0-10.43,8-18.91,24.57-18.91,12,0,18.69,2.17,22,3.69V110.6c0,12.61-11.51,22.39-25.64,22.39Z"/></g></g></svg>
				</a>
				<div class="menu-btn">
					<div class="menu-btn__slice"></div>
					<div class="menu-btn__slice"></div>
					<div class="menu-btn__slice"></div>
				</div>
			</div>
			<div class="header__wrap--body">
				<div class="overlay">
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
			</div>
		</div>
		<div class="header__wrap--desktop container m-auto d-flex justify-content-between align-items-center px-0 px-md-3">
			<a class="logo" href="<?php echo get_option('home');?>">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 529.44 189.59"><defs></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M137.79,93.86C136.7,118.43,148,133,168.22,133c19.35,0,23.91-14.78,30.87-14.78,2.61,0,5,2,5,5.87,0,8-14.35,22.6-38.91,22.6-28.48,0-48.91-16.08-48.91-52.16,0-27,17.39-51.52,49.34-51.52,27.61,0,42.61,18.26,42.61,42.17a64.7,64.7,0,0,1-.44,8.69ZM138,83.65h49.13a20.27,20.27,0,0,0,.21-3.48c0-12.61-6.3-25.44-23.48-25.44C148.43,54.73,140,67.78,138,83.65Z"/><path class="cls-1" d="M527.69,45.82H486.43a7.18,7.18,0,0,0-2,5.44c0,4.56,2.17,7.17,7,7.17h8.91c-1.08,3.26-3.91,10.44-6.3,16.3L475.78,120h-.22L446.83,58.43h8c4.56,0,6.52-2.61,6.52-7.17a8.84,8.84,0,0,0-1.52-5.44h-72.4a7.14,7.14,0,0,0-2,5.44c0,4.56,2.17,7.17,6.95,7.17h8.92c-1.09,3.26-3.7,10.44-6.31,16.3L375.43,120.6h-.65L348,58.43h7.82c4.57,0,6.53-2.61,6.53-7.17a8.84,8.84,0,0,0-1.52-5.44h-47c-.65.66-1.73,2.18-1.73,5.44,0,4.56,2.16,7.17,6.73,7.17h7.18l38.38,86.08h12L402.73,86c5.46-12,9-19.57,11-24h0c.9-2,2.46-3.61,6.32-3.61s5.51,1.36,6.23,2.88l-.31-.65,29.59,62.11c4.57,10,6.09,13.91,6.09,22,0,9.13-4.57,28.91-17.83,28.91-11.73,0-13.48-7.39-20.21-7.39-3.91,0-5.87,2.82-5.87,6.3,0,8.27,9.13,17,23.26,17,27,0,28.91-27.17,46.73-69.34l14.35-34.13c7.17-16.52,11.09-24.78,12.17-27.61h8.18c4.79,0,7-2.61,7-7.17A8.45,8.45,0,0,0,527.69,45.82Z"/><path class="cls-1" d="M109.24,131.43c4.83,0,7,2.64,7,7.47,0,3.08-1.32,4.84-2,5.28H67a7.68,7.68,0,0,1-1.76-5.28c0-4.83,2.2-7.47,6.81-7.47h8.57V83.74c0-16-4.61-26.82-21.54-26.82-14.28,0-23.73,13.5-23.73,26v48.49H44c4.61,0,6.81,2.64,6.81,7.47A7.68,7.68,0,0,1,49,144.16H1.76C1.1,143.72,0,142,0,138.88c0-4.83,2.2-7.47,6.81-7.47h8.62V12.75H6.85C2.24,12.75,0,10.11,0,5.5,0,2.2,1.14.66,1.8,0H35.43V58.71h.22c4.09-9.22,14.5-16.07,31.21-16.07,23.08,0,34.07,16,34.07,39.56v49.23Z"/><path class="cls-1" d="M327.43,127.16c-6.44,0-5.37,5.79-15.45,5.79-7.52,0-8-7.94-8-18.67v-4.63h0V82.78c-.22-34.57-22-40.44-38.47-40.44-24.57,0-38.26,10.87-38.26,18.92a5,5,0,0,0,4.78,5.22h.22c6.74,0,16.3-11.31,30-11.31,13,0,21.95,7,21.95,27.61v5.87c-4.78-2.18-13.91-5-28.48-5-24.34,0-39.34,12.39-39.34,31.52,0,19.78,13.69,31.73,33.48,31.73,18.69,0,28.24-5.64,34.34-14.76h.22l1-1.12c2.67,11.78,10.08,15.88,24.14,15.88,14.59,0,22.74-8.36,22.74-14.16C332.37,129.09,329.8,127.16,327.43,127.16ZM258.64,133c-13,0-20.87-8.26-20.87-19.78,0-10.43,8-18.91,24.57-18.91,12,0,18.69,2.17,22,3.69V110.6c0,12.61-11.51,22.39-25.64,22.39Z"/></g></g></svg>
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
