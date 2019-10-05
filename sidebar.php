<nav id="page-sidebar">
	<div class="grid_4">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<?php if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar('First_sidebar') ) :
		?>
		<span class="sidebar-index">分类目录</span>
		<ul>
			<?php wp_list_categories('depth=1&title_li=&orderby=id&show_count=0&hide_empty=1&child_of=0'); ?>
		</ul>
		<?php endif; ?>

		<?php if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar('Second_sidebar') ) :
		?>
		<span class="sidebar-index">最新文章</span>
		<ul>
			<?php
			$posts = get_posts('numberposts=4&orderby=post_date');
			foreach ($posts as $post) {
				setup_postdata($post);
				echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
			}
			$post = $posts[0];
			?>
		</ul>
		<?php endif; ?>
	</div>
	<div id="friend-link">
		<span  class="sidebar-index">友情连接</span>
		<br/>
		<ul>
			
		</ul>
	</div>
</nav>