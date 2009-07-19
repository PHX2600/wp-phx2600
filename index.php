<?php get_header(); ?>

	<div id="body" class="clearfix">
		<div id="content">
			<!--[if IE]>
				<div class="notice warning">
					<p>Your browser does not support <a href="http://www.w3.org/Consortium/">open standards</a>. Please <a href="http://www.getfirefox.com">upgrade immediately</a> to save the interwebz!</p>
				</div>
			<![endif]-->
			<?php if (is_404()): ?>
				<div class="notice error">
					<p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>
				</div>
			<?php endif; ?>
			<?php if (is_category() || is_day() || is_month() || is_year() || is_search() || is_paged() ):	?>
				<div class="notice info">
					<?php if (is_category()): ?>
						<p>You are currently browsing the archives for "<i><?php single_cat_title(''); ?></i>"</p>
					<?php elseif (is_day()): /* If this is a daily archive */  ?>
						<p>You are currently browsing the archives	for the day <?php the_time('l, F jS, Y'); ?>.</p>
					<?php elseif (is_month()): /* If this is a monthly archive */ ?>
						<p>You are currently browsing the archives for the month of <?php the_time('F, Y'); ?>.</p>
					<?php elseif (is_year()): /* If this is a yearly archive */ ?>
						<p>You are currently browsing the archives for the year <?php the_time('Y'); ?>.</p>
					<?php elseif (is_search()): /* If this is search results */  ?>
						<p>Your search results for "<?php the_search_query(); ?>".</p>
					<?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])): ?>
						<p>You are currently browsing the archives.</p>
					<?php endif; ?>
				</div>
			<?php endif; ?>



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
							<?php the_content('<div class="read-full">Read the rest of this entry</div>'); ?>
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
				<div class="entry">
					<h2 class="post-title">Not Found</h2>
						<br />
						Sorry, but you are looking for something that isn't here.
					</div>
			<?php endif; ?>

		</div>
		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>