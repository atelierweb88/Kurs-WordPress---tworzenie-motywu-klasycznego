<?php
/**
 *  Header My First Blog Theme
 */
?>
<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html <?php language_attributes(); ?>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

	<?php wp_head(); ?>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

	<!-- Header -->
	<header id="header" class="header-main">

		<!-- Logo -->
		<?php
		if(has_custom_logo()) {

			the_custom_logo();

		} else { ?>

			<h1><?php bloginfo('name'); ?></h1>

		<?php } ?>

		<nav class="links">

			<!-- Menu -->
			<?php wp_nav_menu('header_menu'); ?>

		</nav>
		<nav class="main">
			<ul>
				<li class="search">
					<a class="fa-search" href="#search">Search</a>
					<form id="search" method="get" action="<?php bloginfo('url'); ?>">
						<input type="text" name="s" placeholder="Search" value="<?php the_search_query(); ?>"/>
					</form>
				</li>
				<li class="menu">
					<a class="fa-bars" href="#menu">Menu</a>
				</li>
			</ul>
		</nav>
	</header>

	<!-- Menu -->
	<section id="menu">

		<!-- Search -->
		<section>
			<form class="search" method="get" action="<?php bloginfo('url'); ?>">
				<input type="text" name="s" placeholder="Search" value="<?php the_search_query(); ?>"/>
			</form>
		</section>

		<!-- Links -->
		<section>
			<ul class="links">

				<!-- Menu -->
				<?php wp_nav_menu('header_menu'); ?>
			</ul>
		</section>


	</section>
