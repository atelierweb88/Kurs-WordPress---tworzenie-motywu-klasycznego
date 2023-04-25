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
	<header id="header">
		<h1><a href="index.html">Future Imperfect</a></h1>
		<nav class="links">
			<ul>
				<li><a href="#">Lorem</a></li>
				<li><a href="#">Ipsum</a></li>
				<li><a href="#">Feugiat</a></li>
				<li><a href="#">Tempus</a></li>
				<li><a href="#">Adipiscing</a></li>
			</ul>
		</nav>
		<nav class="main">
			<ul>
				<li class="search">
					<a class="fa-search" href="#search">Search</a>
					<form id="search" method="get" action="#">
						<input type="text" name="query" placeholder="Search" />
					</form>
				</li>
				<li class="menu">
					<a class="fa-bars" href="#menu">Menu</a>
				</li>
			</ul>
		</nav>
	</header>
