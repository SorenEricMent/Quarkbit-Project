<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="container">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<div class="content-container">
		<br/>
		<a class="title-index" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</div>
<?php endwhile; ?>

<?php endif; ?>
</div>
<?php get_footer(); ?>