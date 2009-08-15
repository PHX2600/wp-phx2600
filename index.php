<?php get_header(); ?>

	<div id="body" class="clearfix">
		<div id="content">
			<?php include(TEMPLATEPATH . '/notifications.php'); ?>

			<?php if (have_posts()): ?>
				<?php while (have_posts()): the_post(); ?>

					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h2 class="post-title"><a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<div class="post-info">Posted by, <?php the_author(); ?> on <?php unset($previousday); printf(__('%1$s at %2$s'), the_date('', '', '', false), get_the_time()) ?></div>
						<div class="post-content clearfix">
							<?php the_content('Read the rest of this entry'); ?>
						</div>
						<div class="post-meta-data">
							<?php if ( function_exists('the_tags') ) { the_tags('<div class="tags"><p>Tags: ', ', ', '</p></div>'); } ?>
							<span class="category"><?php the_category(', ') ?></span> |
							<span class="edit"><?php edit_post_link('Edit', '', ' |'); ?></span>
							<?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments', 'Comments disabled'); ?>
						</div>
					</div>

				<?php endwhile; ?>

				<div id="pagination">
					<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
				</div>

			<?php else: ?>
				<div class="hentry">
					<h2 class="post-title">No Results Found</h2>
						<br />
						Your search did not turn up any results, please try your search again.
					</div>
			<?php endif; ?>

		</div>
		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>