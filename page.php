<div id="background-image-container">
	</div>
<?php get_header();?>
<div id="main-content-container">
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
	<span id="page-title"><?php the_title(); ?></span>
	<br/>
<span id="page-content"><?php the_content(); ?></span>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php comments_template( $file, $separate_comments ); ?>
<?php get_sidebar();?>
<?php get_footer();?>