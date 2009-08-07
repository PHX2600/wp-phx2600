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
			<li<?php if (is_home()): ?> id="current"<?php endif; ?>><a href="<?php echo get_settings('home'); ?>">Home</a></li>
			<?php wp_list_pages('title_li='); ?>
		</ul>
		<a href="<?php bloginfo('rss2_url'); ?>" id="feed-icon"><img src="<?php bloginfo('template_url'); ?>/images/icons/feed.png" alt="RSS" /></a>
	</div>

	<div id="body" class="clearfix">
		<div id="content">
			<!--[if IE]>
				<div class="notice warning">
					<p>Your browser does not support <a href="http://www.w3.org/Consortium/">open standards</a>. Please <a href="http://www.getfirefox.com">upgrade immediately</a> to save the interwebs!</p>
				</div>
			<![endif]-->
			<?php if (date("Ymd",time()) == date("Ymd",firstFriday())): ?>
				<div class="notice success">
					<p><strong>Meeting tonight starting at 6pm! See the <a href="meeting-info">Meeting Info page</a> for more info.</strong></p>
				</div>
			<?php elseif(time() > (firstFriday() - 432000)): ?>
				<div class="notice info">
					<p>Meeting this Friday, <?php echo firstFriday(true); ?>.  Check the <a href="http://www.phx2600.org/forum/viewforum.php?f=2&sid=3eca34d4fcff954c84a2f516fab9a6ee">Meeting Discussion</a> thread for more info.</p>
				</div>
			<?php endif; ?>

			<?php if (is_404()): ?>
				<div class="notice error">
					<p><strong>ERROR 404:</strong> Page not found</p>
				</div>
			<?php endif; ?>
			<?php if (is_category() || is_day() || is_month() || is_year() || is_search()):	?>
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
					<?php endif; ?>
				</div>
			<?php endif; ?>