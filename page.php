<?php get_header(); ?>

	<div id="body" class="clearfix">
		<div id="content">
			<?php include(TEMPLATEPATH . '/notifications.php'); ?>

			<?php if (have_posts()): ?>
				<?php while (have_posts()): the_post(); ?>

					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h2 class="post-title"><a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<br />
						<div class="post-content clearfix">
							<?php the_content(); ?>
						</div>
						<span class="edit"><?php edit_post_link('Edit', '', ''); ?></span>
					</div>

				<?php endwhile; ?>

				<div id="pagination">
					<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
				</div>

			<?php else: ?>
				<div class="hentry">
					<h2 class="post-title">Error</h2>
						<br />
						Sorry, but you are looking for something that isn't here.
					</div>
			<?php endif; ?>

		</div>
		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>