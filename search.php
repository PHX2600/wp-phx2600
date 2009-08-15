<?php
/*
Template Name: Search
*/
?>
<?php get_header(); ?>

	<div id="body" class="search-page clearfix">
		<div id="content" class="search-page">
			<?php include(TEMPLATEPATH . '/notifications.php'); ?>

			<div id="cse-search-results"></div>
			<script type="text/javascript">
			  var googleSearchIframeName = "cse-search-results";
			  var googleSearchFormName = "cse-search-box";
			  var googleSearchFrameWidth = 938;
			  var googleSearchDomain = "www.google.com";
			  var googleSearchPath = "/cse";
			</script>
			<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>

		</div>
	</div>

<?php get_footer(); ?>