<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<!--[if lte IE 8]>
		<style type="text/css">#search button { padding: 7px; }</style>
	<![endif]-->
	<!--[if lte IE 7]>
		<style type="text/css">#search button { padding: 5px; }</style>
	<![endif]-->

	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/icons/favicon.ico" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<meta name="keywords" content="Phoenix, Arizona, Network, Hackers, Hacking, Social Engineering, Urban Exploration, Lock Picking" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

	<?php wp_head(); ?>
</head>

<body>

<div id="wrap">

	<div id="header" class="clearfix">
		<div id="logo">
			<a href="<?php echo(bloginfo('url')); ?>" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/phx2600-text.png" alt="PHX2600" /></a>
		</div>
		<div id="search">
			<form action="http://www.phx2600.org/search/" id="cse-search-box">

				<table id="search-table">
					<tr>
						<td>
							<input type="hidden" name="cx" value="partner-pub-2614997598856289:81nadhhmes4" />
						    <input type="hidden" name="cof" value="FORID:9" />
						    <input type="hidden" name="ie" value="ISO-8859-1" />
							<input type="text" name="q" id="search-box" />
						</td>
					    <td><button type="submit" name="sa" id="search-button">Go</button></td>
				    </tr>
				</table>
			</form>
			<script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&amp;lang=en"></script>
		</div>
	</div>

	<div id="navigation">
		<ul>
			<li<?php if (is_home()): ?> id="current"<?php endif; ?>><a href="<?php echo get_settings('home'); ?>">Home</a></li>
			<?php wp_list_pages('title_li='); ?>
		</ul>
		<a href="<?php bloginfo('rss2_url'); ?>" id="feed-icon"><img src="<?php bloginfo('template_url'); ?>/images/icons/feed.png" alt="RSS" /></a>
	</div>
