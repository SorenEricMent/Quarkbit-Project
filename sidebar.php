<div class="grid_4">
		
	<?php if ( !function_exists('dynamic_sidebar') 
						|| !dynamic_sidebar('First_sidebar') ) : ?>
		<span>分类目录</span>
		<ul>
			<?php wp_list_categories('depth=1&title_li=&orderby=id&show_count=0&hide_empty=1&child_of=0'); ?>
		</ul>
	<?php endif; ?>
		
	<?php if ( !function_exists('dynamic_sidebar') 
							|| !dynamic_sidebar('Second_sidebar') ) : ?>		
		<span>最新文章</span>
		<ul>
			<?php
				$posts = get_posts('numberposts=6&orderby=post_date');
				foreach($posts as $post) {
					setup_postdata($post);
					echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
				}
				$post = $posts[0];
			?>
		</ul>
	<?php endif; ?>

	</div>
	<div id="friend-link">
		<span id="friend-link-intro">友情连接</span>
		
	</div>