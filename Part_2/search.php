<?php get_header(); ?>

<h1>SEARCH</h1>
<div class="container">

	<?php
	if(have_posts()) {

		the_title();
		the_date();
		the_content();

	}

	?>

</div>

<?php get_footer(); ?>