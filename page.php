<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?> 
	<?php the_post();
	the_title();
	the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>