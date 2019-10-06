<?php get_header(); ?>
<?php get_sidebar(); ?>
<br/>
<div id="container">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<div class="content-container">
		<br/>
		<a class="title-index" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<span class="blog-excerpt"><?php the_excerpt(); ?></span>
	</div>
<?php endwhile; ?>

<?php endif; ?>
</div>
<?php get_footer(); ?>