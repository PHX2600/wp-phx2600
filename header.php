<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<!--[if lte IE 8]>
		<style type="text/css">#search button { padding: 8px; }</style>
	<![endif]-->
    <!--[if lte IE 7]>
    	<style type="text/css">#search button { padding: 6px; }</style>
    <![endif]-->

	<link rel="shortcut icon" href="/images/icons/folder_explore.png" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<meta name="keywords" content="Phoenix, Arizona, Network, Hackers, Hacking, Social Engineering, Urban Exploration, Lock Picking" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

	<?php wp_head(); ?>
</head>

<body>

<div id="wrap">

	<div id="header" class="clearfix">
		<div id="logo">
			<a href="<?php echo(bloginfo('url')); ?>" title="<?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/phx2600-text.png" alt="PHX2600" /></a>
		</div>
		<div id="search">
			<form method="get" action="/" id="search-form">
			<table id="search-table">
				<tr>
					<td><input type="text" value="Search" name="s" id="search-box" onfocus="if(this.defaultValue == this.value) this.value = '';" onblur="if(this.value == '') this.value = this.defaultValue;"></input></td>
					<td><button type="submit" id="search-button">Go</button></td>
				</tr>
			</table>
			</form>
		</div>
	</div>

	<div id="navigation">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
		</ul>
		<a href="<?php bloginfo('rss2_url'); ?>" id="feed-icon"><img src="<?php bloginfo('template_url'); ?>/images/icons/feed.png" alt="RSS" /></a>
	</div>
