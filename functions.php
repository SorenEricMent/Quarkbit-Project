<?php
/*Archives list by zwwooooo | http://zww.me */
function zww_archives_list() {
	if (!$output = get_option('zww_archives_list')) {
		$output = '<div id="archives"><p>[<a id="al_expand_collapse" href="#">全部展开/收缩</a>] <em>(注: 点击月份可以展开)</em></p>';
		$the_query = new WP_Query('posts_per_page=-1&ignore_sticky_posts=1');
		$year = 0;
		$mon = 0;
		$i = 0;
		$j = 0;
		while ($the_query -> have_posts()) : $the_query -> the_post();
			$year_tmp = get_the_time('Y');
			$mon_tmp = get_the_time('m');
			$y = $year;
			$m = $mon;
			if ($mon != $mon_tmp && $mon > 0)
				$output .= '</ul></li>';
			if ($year != $year_tmp && $year > 0)
				$output .= '</ul>';
			if ($year != $year_tmp) { $year = $year_tmp;
				$output .= '<h3 class="al_year">' . $year . ' 年</h3><ul class="al_mon_list">';
			}
			if ($mon != $mon_tmp) { $mon = $mon_tmp;
				$output .= '<li><span class="al_mon">' . $mon . ' 月</span><ul class="al_post_list">';
			} $output .= '<li>' . get_the_time('d日: ') . '<a href="' . get_permalink() . '">' . get_the_title() . '</a> <em>(' . get_comments_number('0', '1', '%') . ')</em></li>';
		endwhile; wp_reset_postdata();
		$output .= '</ul></li></ul></div>';
		update_option('zww_archives_list', $output);
	} echo $output;
}

function clear_zal_cache() { update_option('zww_archives_list', '');
	// 清空 zww_archives_list
}

add_action('save_post', 'clear_zal_cache');
?>
