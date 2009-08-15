<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>

	<div id="body" class="clearfix">
		<div id="content">
			<?php include(TEMPLATEPATH . '/notifications.php'); ?>

			<div class="hentry">
				<h2 class="post-title">Archive</h2>
				<h3>Archives by Month:</h3>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
					<?php // wp_easyarchives(); ?>
				</ul>

				<h3>Archives by Subject:</h3>
				<ul>
					<?php wp_list_categories(); ?>
				</ul>
			</div>

		</div>
		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>