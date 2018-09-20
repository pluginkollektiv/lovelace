<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package lovelace
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="masthead" class="site-header">
	<div class="search-drawer" aria-expanded="false" role="region">
		<div class="container">
			<div class="drawer-search">
				<div class="big-search">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div><!-- .container -->
	</div><!-- .drawer -->

	<div class="top-navigation">
		<?php
			// Get the mobile menu
			get_template_part( 'template-parts/content-menu-drawer' );
		?>

		<div class="container">
			<div class="site-identity clear">
				<div class="site-title-wrap" itemscope="" itemtype="http://schema.org/Organization">
					<!-- Use the Site Logo feature, if supported -->
					<a href="https://login.pluginkollektiv.org/main/" class="custom-logo-link" rel="home" itemprop="url">
						<svg version="1.1" class="custom-logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1038.4 153.6">
							<style type="text/css">
								.st0 {
									fill: #FFFFFF;
								}
							</style>
							
							<path class="st0" d="M67.7,87.6c-0.8,4.3-2.1,8.4-3.9,12.5c-1.8,4-4.2,7.4-7,10.1c-2.9,2.8-6.5,5-11.1,6.6c-4.5,1.7-9.7,2.5-15.5,2.5c-5.7,0-12.3-1.2-19.8-3.6v37.5H0V38.8c14.1-4.1,25.6-6.1,34.5-6.1c10.7,0,19.1,3.1,25.2,9.2c6.1,6.2,9.2,16.7,9.2,31.7C68.8,78.7,68.4,83.3,67.7,87.6z M10.4,105.8c5.5,2.8,12.2,4.1,20.1,4.1c9.7,0,16.6-3.3,20.9-10c4.2-6.7,6.4-15.4,6.4-26.2c0-21.7-8.4-32.5-25.2-32.5c-7.1,0-14.5,1.4-22.1,4.1V105.8z" />
							<path class="st0" d="M100.3,1.5v99.8c0,3.4,0.7,5.8,2.2,7.1c1.5,1.3,3.5,2,6.2,2c3.5,0,7.1-0.5,10.7-1.5l0.8,7.9c-4.6,1.5-9.3,2.3-14.2,2.3c-11,0-16.5-5.9-16.5-17.7V1.5H100.3z" />
							<path class="st0" d="M197.2,113.5c-10.7,3.8-22.1,5.8-34.3,5.8c-20.6,0-30.9-9.7-30.9-29.2V34.2h10.4v54.9c0,7.9,2.1,13.4,6.4,16.6c4.2,3.1,10.4,4.7,18.6,4.7c6.3,0,12.8-1.2,19.5-3.5V34.2h10.4V113.5z" />
							<path class="st0" d="M260.2,34.2c4.7,0.3,7.9,0.5,9.6,0.5c6,0,13.4-0.6,22.1-1.8l0.8,7.1c-9.1,1.5-16.2,2.1-21.3,1.8c5.6,4.2,8.4,10.8,8.4,20c0,9.3-2.7,16.4-8.2,21c-5.4,4.7-12.8,7-22.2,7c-3.7,0-7.1-0.3-10.1-1c-1.7,3.1-2.6,6.2-2.9,9.2c-0.3,3.1,0.4,5.7,1.9,7.8h24.9c8.5,0.3,14.8,2,19,4.9c4.2,2.9,6.3,7.6,6.3,13.9c0,19.4-13.6,29-40.8,29c-10.3,0-18.4-1.7-24.3-5.2s-8.7-8.5-8.7-15.1c0-8.9,5.3-16.3,16-22.1c-2.8-2.1-3.9-6-3.5-11.6c0.4-5.7,2.3-10,5.6-13c-9-4.1-13.5-12.5-13.5-25.2c0-18.6,10.5-27.8,31.5-27.7C252.4,33.7,255.5,33.8,260.2,34.2z M238.1,114.8c-4.3,2.1-7.5,4.3-9.6,6.7c-2.1,2.4-3.1,5.6-3.1,9.7c0,4.3,2.3,7.6,6.8,9.9c4.6,2.3,10.4,3.5,17.6,3.5c9,0,15.9-1.4,20.6-4.2c4.7-2.8,7.1-7.6,7.1-14.4c0-3.6-1.3-6.4-3.8-8.2c-2.5-1.9-7.2-2.8-13.9-2.8H238.1z M249.5,81.7c14.1,0,21.1-6.7,21.1-20c0-6.6-1.7-11.5-5-14.8c-3.3-3.2-8.7-4.9-16.2-4.9c-13.5,0-20.3,6.5-20.3,19.5C229.2,75,236,81.7,249.5,81.7z" />
							<path class="st0" d="M304.8,2.8h10.4v14.8h-10.4V2.8z M315.2,117h-10.4V34.2h10.4V117z" />
							<path class="st0" d="M374.6,32c8.9,0,15.8,2,20.6,5.9s7.3,11.1,7.3,21.3V117h-10.2V61.9c0-8-1.7-13.4-5.1-16.3c-3.4-2.8-8.6-4.2-15.7-4.2c-9.7,0-17.5,1.9-23.6,5.6v70h-10.4V40.3C351.5,34.8,363.9,32,374.6,32z" />
							<path class="st0" d="M437.1,66.3h13.2L476,34.2h13.2l-29.5,36.3l34.8,46.5h-13l-31.3-41.4h-13V117h-10.4V3.1l10.4-1.7V66.3z" />
							<path class="st0" d="M509.3,109.3c-5.8-6.7-8.7-17.8-8.7-33.6c0-15.4,3.2-26.5,9.6-33.3c6.4-6.8,15.5-10.2,27.4-10.2c12,0,21,3.4,27,10.1c6,6.7,9,17.8,9,33.3c0,15.4-3.2,26.5-9.5,33.4c-6.3,6.9-15.4,10.3-27.3,10.3C524.2,119.3,515.1,116,509.3,109.3z M518.5,48.8c-4.6,4.9-6.8,13.9-6.8,26.9c0,12.5,2.1,21.4,6.3,26.5c4.2,5.1,10.6,7.7,19.1,7.7c16.9,0,25.4-11.4,25.4-34.2c0-13.2-2.1-22.2-6.2-27.1s-10.5-7.3-19.1-7.3C529.3,41.4,523.1,43.9,518.5,48.8z" />
							<path class="st0" d="M604.9,122.8l-8.7-3.3L652.1,0l8.6,3.3L604.9,122.8z" />
							<path class="st0" d="M652.1,122.8l-8.7-3.3L699.3,0l8.6,3.3L652.1,122.8z" />
							<path class="st0" d="M724.5,108.1c-6.4-7.5-9.7-18.4-9.7-32.7c0-5.7,0.7-11.1,2-16c1.3-5,3.3-9.5,6-13.7c2.7-4.2,6.5-7.5,11.3-9.8c4.8-2.4,10.5-3.5,17-3.5c13.2,0,22.4,3.9,27.6,11.8c5.2,7.9,6.6,18.3,4.3,31.3H726c0,11.8,2.2,20.5,6.7,26.1c4.5,5.6,11.4,8.4,20.9,8.4c9.6,0,17.8-1.8,24.7-5.4l1.8,8.9c-8.8,4-17.8,5.9-27.1,5.9C740.4,119.3,730.9,115.6,724.5,108.1z M768.6,47.5c-3.8-4.6-9.5-6.9-17-6.9c-5.2,0-9.6,1.1-13.4,3.4c-3.7,2.3-6.4,5-7.8,8.3c-1.5,3.3-2.5,6.1-3.1,8.4c-0.6,2.3-0.9,4.2-0.9,5.8h46.5C773.9,58.5,772.4,52.1,768.6,47.5z" />
							<path class="st0" d="M815.1,66.3h13.2l25.7-32.2h13.2l-29.5,36.3l34.8,46.5h-13l-31.3-41.4h-13V117h-10.4V3.1l10.4-1.7V66.3z" />
							<path class="st0" d="M929.1,116c-5.3,1.8-11.1,2.6-17.5,2.6c-8.4,0-13.9-1.6-16.7-4.9c-2.8-3.2-4.2-9-4.2-17.2V42.7h-11.5v-8.6h11.5v-21l10.6-1.5v22.4H929l-1.7,8.6h-26.2v55.4c0,2.1,0.1,3.7,0.2,4.8c0.2,1.1,0.6,2.3,1.2,3.5c0.7,1.3,1.8,2.2,3.4,2.7c1.6,0.6,3.7,0.8,6.4,0.8c4.8,0,9.9-0.7,15.2-2.1L929.1,116z" />
							<path class="st0" d="M942.5,2.8h10.4v14.8h-10.4V2.8z M952.9,117h-10.4V34.2h10.4V117z" />
							<path class="st0" d="M1027.5,34.2h10.9l-30.7,82.8h-10.4l-30.9-82.8h11.4l25.1,70L1027.5,34.2z" />
						</svg>
					</a>
					<div class="titles-wrap ">
						<p class="site-title">
							<a href="https://login.pluginkollektiv.org/main/" rel="home">Pluginkollektiv</a>
						</p>
					</div>
				</div>

				<div class="top-navigation-right">
					<!-- Main navigation -->
					<nav id="site-navigation" class="main-navigation">
						<?php wp_nav_menu( array(
							'theme_location' => 'primary',
							'fallback_cb'    => 'atomic_blocks_fallback_menu',
						) );?>
					</nav><!-- .main-navigation -->
				</div><!-- .top-navigation-right -->
			</div><!-- .site-identity-->
		</div><!-- .container -->
	</div><!-- .top-navigation -->

	<!-- Get the archive page titles -->
	<?php if( is_archive() || is_search() || is_404() ) { ?>
		<div class="container text-container">
			<div class="header-text">
				<?php atomic_blocks_page_titles(); ?>
			</div><!-- .header-text -->
		</div><!-- .text-container -->
	<?php } ?>
</header><!-- .site-header -->

<div id="page" class="hfeed site container">
	<div id="content" class="site-content">
