<?php get_header(); ?>

	<div id="body" class="clearfix">
		<div id="content">
			<?php include(TEMPLATEPATH . '/notifications.php'); ?>

			<div class="hentry">
				<h2 class="post-title">Page Not Found</h2><br />
				<p>Sorry, but you are looking for something that isn't here.</p>
				<p>This may have been caused by one of the following:</p>
				<ul>
					<li>If you manually typed the URL, you may have made a mistake, check the URL and try again.</li>
					<li>If you were linked to this site from another page, they may have typed the URL wrong or the page may no longer exists.</li>
					<li>The page may have moved and may exist elsewhere on the site, try searching for it.</li>
				</ul>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>