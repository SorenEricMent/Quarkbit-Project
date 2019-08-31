<?php get_header();?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
	<?php else : ?>
	<div class="errorbox">
		错误:没有文章。
	</div>
	<?php endif; ?>
	<?php get_sidebar(); ?>
<?php the_content(); ?>
<?php the_tags('标签：', ', ', ''); ?>
<?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?>
<?php edit_post_link('编辑', '|', ''); ?>
<p class="clearfix">
	<a href="<?php echo get_option('home'); ?>" class="button float" >返回首页</a>
	<a href="#commentform" class="button float right" >发表评论</a>
</p>
<?php get_footer() ?>