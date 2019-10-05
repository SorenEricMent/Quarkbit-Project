<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
	.homelink{
		font-size:32px;
	}
</style>
<title>
<?php
if (is_home()) {
	bloginfo('name');
	echo " - ";
	bloginfo('description');
} elseif (is_category()) {
	single_cat_title();
	echo " - ";
	bloginfo('name');
} elseif (is_single() || is_page()) {
	single_post_title();
} elseif (is_search()) {
	echo "Result";
	echo " - ";
	bloginfo('name');
} elseif (is_404()) {
	echo 'Not Found';
} else {
	wp_title('', true);
}
 ?>
		</title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="stylesheet" href="/wp-content/themes/Quarkbit/header.css" type="text/css" media="screen" />
	</head>
	<body>
		<br/>
		<header id="page-header">
				&nbsp;&nbsp;<span class="homelink"><a class="homelink" href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></span>
				<span class="grid_12 caption clearfix">&nbsp;<?php bloginfo('description'); ?></span>
				<ul class="page-index">
					<li class="index-details"><a class="index-links">奇怪的东西</a></li>
					<li class="index-details"><a class="index-links">文章</a></li>
					<li class="index-details"><a class="index-links">APIs</a></li>
					<li class="index-details"><a href="/wp-content/themes/Quarkbit/about.php" class="index-links">关于我</a></li>
				</ul>
		</header>
		<script id="content-short">
			
		</script>
	</body>
</html>
