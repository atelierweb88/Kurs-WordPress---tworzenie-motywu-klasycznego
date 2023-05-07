<?php get_header(); ?>


				<!-- Main -->
					<div id="main">

						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

						<!-- Post -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<header>
									<div class="title">
										<h2><a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a></h2>
									</div>
									<div class="meta">
										<time class="published"><?php the_date('F jS Y'); ?></time>
										<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID')));?>" class="author"><span class="name"><?php the_author(); ?></span><img src="<?php echo esc_url(get_avatar_url(get_the_author_meta('ID'))); ?>" /></a>
									</div>
								</header>
								<a href="<?php echo esc_url(get_the_permalink()); ?>" class="image featured">
									<img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>">
								</a>
								<p><?php the_excerpt(); ?></p>
								<footer>
									<ul class="actions">
										<li><a href="<?php echo esc_url(get_the_permalink()); ?>" class="button large"><?php esc_html_e('Czytaj więcej...','my-first-blog'); ?></a></li>
									</ul>
									<ul class="stats">
										<li><?php the_category(','); ?></li>
										<li><span class="icon solid fa-tag"><?php the_tags('','/'); ?></span></li>
										<li><span class="icon solid fa-comment"><?php echo  get_comments_number(); ?></span></li>
									</ul>
								</footer>
							</article><!-- end article.post -->

						<?php endwhile; ?>

							<!-- Pagination -->
							<ul class="actions pagination">
								<?php
								$prev = get_previous_posts_link();
								$next = get_next_posts_link();

								/* Previous */
								if(!empty($prev)) { ?>
									<li><div class="button large previous"><?php echo $prev; ?></div></li>
								<?php }

								/* Next */
								if(!empty($next)) { ?>
									<li><div class="button large next"><?php echo $next; ?></div></li>
								<?php }
								?>

							</ul>

						<?php else: ?>

						<p><?php _e('Brak postów do wyświetlenia.','my-first-blog'); ?></p>

						<?php endif; ?>

					</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>