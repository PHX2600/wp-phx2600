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