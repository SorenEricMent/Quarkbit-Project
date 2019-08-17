<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
	echo "搜索结果";
	echo " - ";
	bloginfo('name');
} elseif (is_404()) {
	echo '页面未找到!';
} else {
	wp_title('', true);
}
 ?>
		</title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	</head>
	<body>
		<div id="wrapper""></div>
	</body>
</html>