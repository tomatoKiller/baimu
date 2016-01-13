<?php
/*
	Template Name: news center page
*/
	get_header();
?>

<br>

<div class="container">

	<div class="row">
		<div class="col-xs-2"></div>
		<div class="col-xs-8">
			<h2>新闻中心</h2>
			<hr>
		<?php
			if(isset($_GET['new_id']) && is_numeric($_GET['new_id']))
				$new_id = intval($_GET['new_id']);
			else{
				$new_id = 0;
				$_GET['new_id'] = '0';
			}

			$post_num_per_page = 10;
			$posts_array = get_posts(array(
				'numberposts'     => $post_num_per_page,
				'offset' => $post_num_per_page * $new_id,
			));
			$last_page = false;
			if(count($posts_array) < $post_num_per_page)
				$last_page = true;

			foreach ($posts_array as $post) :
		?>
			<li>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <br><br>
				<?php echo cut_string($post->post_content, 200); ?>
			</li>
			<hr>
		<?php endforeach; ?>
			<?php if(count($posts_array) == 0) {echo 'no more articles';} ?>
			<nav>
				<ul class="pager">

					<li class="previous <?php if($new_id == 0){echo 'disabled'; }?>">
						<a href="<?php if($new_id == 0) {echo '#';} else {echo get_another_new($_GET, -1) ; }?>"><span aria-hidden="true">&larr;</span> Older</a>
					</li>
					<li class="next <?php if($last_page == true){ echo 'disabled';} ?>">
						<a href="<?php if($last_page == true) {echo '#';} else {echo get_another_new($_GET, 1) ; } ?>">Newer <span aria-hidden="true">&rarr;</span></a>
					</li>
				</ul>
			</nav>

		</div>
		<div class="col-xs-2"></div>
	</div>
</div>
