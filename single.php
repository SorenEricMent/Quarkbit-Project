<?php get_header();?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<script>
	console.log("single.php called.");
</script>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <p>
        <?php the_content("Read More..."); ?>
    </p>
    <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>


<?php the_tags('标签：', ', ', ''); ?>
<?php comments_template(); ?>
<?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?>
<?php edit_post_link('编辑', '|', ''); ?>

<p class="clearfix">
	<a href="<?php echo get_option('home'); ?>" class="button float" >返回首页</a>
	<a href="#commentform" class="button float right" >发表评论</a>
</p>
<?php previous_post_link('« %link'); ?>
<?php next_post_link('%link »'); ?>
<?php get_footer() ?>