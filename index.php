<?php get_header(); ?>

	<div id="body" class="clearfix">
		<div id="content">
			<?php if($notification): ?>
			<div class="notice">
				<p>This is a sample notification box.</p>
			</div>
			<?php endif; ?>

			<?php if (have_posts()): ?>
				<?php while (have_posts()): the_post(); ?>

					<div id="post-<?php the_ID(); ?>" class="entry">
						<h2 class="post-title"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<div class="post-info">Posted by, <?php the_author() ?> on <?php unset($previousday); printf(__('%1$s at %2$s'), the_date('', '', '', false), get_the_time()) ?></div>
						<div class="post-content clearfix">
							<?php the_content('Read the rest of this entry &raquo;'); ?>
						</div>
						<div class="post-meta-data">
							<?php if ( function_exists('the_tags') ) { the_tags('<div class="tags"><p>Tags: ', ', ', '</p></div>'); } ?></p>
							<span class="category"><?php the_category(', ') ?></span> |
							<span class="edit"><?php edit_post_link('Edit', '', ''); ?></span> |
							<?php comments_popup_link('<span class="comments">No Comments</span>', '<span class="comments">1 Comment</span>', '<span class="comments">% Comments</span>'); ?>
						</div>
					</div>

				<?php endwhile; ?>

				<div id="pagination">
					<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
				</div>

			<?php else: ?>
				<div class="entry">
					<h2>Not Found</h2>
						Sorry, but you are looking for something that isn't here.
					</div>
			<?php endif; ?>

		</div>
		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>