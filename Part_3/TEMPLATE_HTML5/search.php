<h1>Search</h1>
<?php
if ( have_posts() ) {
	?>

	<div class="search-result-count default-max-width">
		<?php
		the_title();
		the_content();
		?>
	</div><!-- .search-result-count -->

<?php } else {

	echo 'Brak Wyników wyszukiwania';

}

