<?php get_header();?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
	<span id="page-title"><?php the_title(); ?></span>
<span id="page-content"><?php the_content(); ?></span>
<?php endwhile; ?>
<?php endif; ?>
<?php get_sidebar();?>
<?php get_footer();?>