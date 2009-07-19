<div id="right-nav">
			<a href="meeting-info" id="meeting-info">
				<span class="title">Next Offical Meeting</span>
				<span class="row clearfix">
					<span class="left">Date:</span>
					<span class="right">August 7, 2009</span>
				</span>
				<span class="row clearfix">
					<span class="left">Time:</span>
					<span class="right">6:00 pm</span>
				</span>
				<span class="more-info">Click for more info</span>
			</a>
			<div id="sidebar">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar()): /* Widgetized sidebar, if you have the plugin installed. */ ?>
				<ul>
					<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>

					<li><h2>Archives</h2>
						<ul>
						<?php wp_get_archives('type=monthly'); ?>
						</ul>
					</li>

					<?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>
				</ul>
				<ul>
					<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
						<?php wp_list_bookmarks(); ?>
					<?php } ?>

					<li><h2>Meta</h2>
						<ul>
							<?php wp_register(); ?>
							<li><?php wp_loginout(); ?></li>
							<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
							<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
							<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
							<?php wp_meta(); ?>
						</ul>
					</li>

					<?php endif; ?>
				</ul>
			</div>
		</div>