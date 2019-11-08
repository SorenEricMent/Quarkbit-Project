<?php/*
Template Name: archives
*/?>
<div id="background-image-container">
	</div>
<?php get_header();?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
	<span id="page-title"><?php the_title(); ?></span>
<span id="page-content"><?php zww_archives_list(); ?></span>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer();?>
