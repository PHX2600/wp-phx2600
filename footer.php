
	<div id="footer" class="clearfix">
		<div class="left">
			<p>Web design by, <a href="http://www.chriskankiewicz.com">Chris Kankiewicz</a></p><br />
			<p>Copyright &copy; 2009 &bull; PHX2600 &bull; Some Rights Reserved</p>
		</div>
		<div class="right">
			<p> Powered by, <a href="http://www.wordpress.org">Wordpress</a></p><br />
			<p><a href="<?php bloginfo('rss2_url'); ?>">Blog (RSS)</a> &bull; <a href="<?php bloginfo('comments_rss2_url'); ?>">Conments (RSS)</a><?php if (file_exists('sitemap.xml')): ?> &bull; <a href="sitemap.xml">Sitemap</a><?php endif; ?></p>
		</div>
	</div>

</div>

<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->

<?php wp_footer(); ?>

<?php /* "And caffeine. I know that some of you think that life without
		 caffeine is actually worth living. But it isn’t." -Scott Adams */ ?>

</body>
</html>