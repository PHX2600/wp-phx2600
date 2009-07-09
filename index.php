<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>PHX2600 - The Phoenix, Arizona Network of Hackers</title>
	<link rel="stylesheet" type="text/css" href="/css/rebase.css" />
	<link rel="stylesheet" type="text/css" href="/css/style.css" />

	<link rel="shortcut icon" href="/images/icons/folder_explore.png" />

	<meta name="keywords" content="Phoenix, Arizona, Network, Hackers, Hacking, Social Engineering, Urban Exploration, Lock Picking" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/jquery.curvycorners.js"></script>

	<script type="text/javascript">
	$(document).ready(function(){
		$('.rounded').corner();
		$('.rounded-top').corner({
			tl: {radius: 10},
			tr: {radius: 10},
			bl: false,
			br: false
		});
		$('.rounded-bottom').corner({
			tl: false,
			tr: false,
			bl: {radius: 10},
			br: {radius: 10}
		});

		$('#search').corner({
			tl: {radius: 4},
			tr: {radius: 4},
			bl: {radius: 4},
			br: {radius: 4}
		});
	});
	</script>
</head>

<body>

<div id="wrap">

	<div id="header" class="rounded-top">

		<div id="logo">
			<img src="/images/phx2600-text.png" />
		</div>

		<div id="search">
			<form method="get" action="/search/go/" id="search-form">
			<table id="search-table">
				<tr>
					<td><input type="text" value="Search" name="search" id="search-box" onfocus="if(this.defaultValue == this.value) this.value = '';" onblur="if(this.value == '') this.value = this.defaultValue;"></input></td>
					<td><button type="submit" value="" id="search-button">Go</button></td>
				</tr>
			</table>
			</form>
		</div>

	</div>

	<div id="navigation">Navigation</div>

	<div id="body">
		<div id="content">Content</div>
		<div id="right-nav">Right Nav</div>
	</div>

	<div id="footer" class="rounded-bottom">Footer</div>

</div>

</body>
</html>