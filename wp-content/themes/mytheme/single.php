
<?php get_header(); ?>

<div class="row">
	<div class="col-xs-1"></div>
	<div class="col-xs-10">
		<?php if(have_posts()): ?>
		<?php while(have_posts()):  the_post(); ?>
			<h2 style="text-align:center"><?php the_title(); ?></h2>
			<p style="text-align:center"><em>
				发布日期 : <?php the_time('Y-n-j G:i:s'); ?>
				浏览量 : <?php echo getPostViews(get_the_ID()); ?>
				<?php setPostViews(get_the_ID()); ?>
			</em></p>
			<hr>
			<div class="content">
				<?php
						the_content();
					endwhile;
				else:
					_e('Sorry, this page does not exist.');
				endif;
				?>
			</div>
		<br>

    <p><?php previous_posts_link('&lt;&lt; 查看新文章', 0); ?> <span><?php next_posts_link('查看旧文章 &gt;&gt;', 0); ?></span></p>

	</div>
	<div class="col-xs-1"></div>
</div>

<?php get_footer(); ?>
