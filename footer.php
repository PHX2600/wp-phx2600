
	<div id="footer" class="clearfix">
		<div class="logo">
			<img src="<?php bloginfo('template_url'); ?>/images/phx2600-logo.png" alt="PHX2600 Logo" />
		</div>
		<div class="left">
			<p>Theme by, <a href="http://www.chriskankiewicz.com">Chris Kankiewicz</a></p><br />
			<p>Copyright &copy; 2009 &bull; <a href="<?php echo(bloginfo('url')); ?>" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a> &bull; Some Rights Reserved</p>
		</div>
		<div class="right">
			<p>Powered by, <a href="http://www.wordpress.org">Wordpress</a></p><br />
			<p><a href="<?php bloginfo('rss2_url'); ?>">Blog (RSS)</a> &bull; <a href="<?php bloginfo('comments_rss2_url'); ?>">Conments (RSS)</a><?php if (file_exists('sitemap.xml')): ?> &bull; <a href="sitemap.xml">Sitemap</a><?php endif; ?></p>
		</div>
	</div>

</div>

<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->

<?php wp_footer(); ?>

<!--
22416e64206361666665696e652e2049206b6e6f77207468617420736f6d6520
6f6620796f75207468696e6b2074686174206c69666520776974686f75742020
6361666665696e652069732061637475616c6c7920776f727468206c6976696e
672e204275742069742069736e27742e22202d53636f7474204164616d73
-->

</body>
</html>