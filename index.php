<div id="background-image-container">
	</div>
<br/>
<?php get_header(); ?>
<div id="scroll-container">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<div class="content-container">
		<br/>
		<a class="title-index" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<br/>
		<span class="blog-excerpt"><?php the_excerpt(); ?></span>
	</div>
<?php endwhile; ?>

<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

