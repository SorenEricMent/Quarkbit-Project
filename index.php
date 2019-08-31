<?php get_header(); ?>
<div id="container">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
<?php endwhile; ?>

<?php endif; ?>
</div>
<?php get_footer(); ?>