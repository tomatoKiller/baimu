
<?php get_header(); ?>

<div class="main">
	<ul class="bxsliderHeader">
		<li><img src="<?php echo get_template_directory_uri().'/images/1.jpg' ; ?>" title="旭日实业自有大型矿山，为承接国内外业务，全面满足市场需求提供了有力的保证"></li>
		<li><img src="<?php echo get_template_directory_uri().'/images/2.jpg' ; ?>" title="旭日实业拥有丰富的资源，且质量一流，热忱的服务，卓越的精品博得客户的肯定。有实力，当然表现更超众"></li>
	</ul>
</div>


<div class="container">
<br><br>
<div class="row">

	<div class="col-xs-1"></div>


	<div class="col-xs-10">


		<hr>
		<h2 align="center">近期动态</h2>
		<hr>
		<br>
		<?php $posts = query_posts($query_string . '&orderby=date&showposts=6'); ?>
		<?php if(have_posts()): ?> <?php while(have_posts()):  the_post(); ?>
		<div class="col-xs-4">

			<div class="post" id="post-<?php the_ID(); ?>">
				<p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php customTitle(36); ?> </a> </p>
			</div>
		</div>

		<div class="col-xs-2">
				  <p><?php the_time('Y-n-j'); ?></p>
		</div>

			<?php endwhile; ?>

			<?php else: ?>
			<div class="post">
				<h2><?php _e('Not Found!'); ?></h2>
			</div>
			<?php endif; ?>




	</div>

	<div class="col-xs-1"></div>
</div>

<hr>


<div class="row">
	<div class="col-xs-2"></div>
	<div class="col-xs-8">
		<h2 align="center">公司资质</h2>
		<hr>
		<ul class="bxslider">
		<?php 
		   	for( $i = 1; $i < 13; $i++) {
		   		echo '<li><img src="' . get_template_directory_uri()."/images/zhengjian$i.jpg\"" . ' width="180" height= "180"/></li>';
		   	}
		?>
		</ul>
	</div>
	<div class="col-xs-2"></div>
</div>

<hr>


<div class="row">
	<h2 style="text-align:center;">核心业务</h2>
	<div class="col-xs-1"></div>
	<div class="col-xs-5 corebusiness">
		<h3>矿山石材</h3>
		<p>泌阳县象河乡东五里沟花岗岩矿，矿区面积0.33平方公里</p>
	</div>
	<div class="col-xs-5" style="text-align:center;">
		<h3>园林绿化</h3>
		<p>紧密围绕电力产业的安全、高效、节能降耗、环保、信息化、智能化等重要技术问题，大力推进高新技术的产业化应用。</p>
	</div>
	<div class="col-xs-1"></div>
</div>
<hr>


<script type="text/javascript">
		jQuery(document).ready(function(){

		    	jQuery('#zhengjianCarousel').carousel('cycle');
		    	jQuery('.bxslider').bxSlider({
			    	minSlides: 1,
				maxSlides: 4,
				moveSlides: 1,
				slideWidth: 180,
				speed: 100,
				slideMargin: 10,
				auto: true,
				autoHover: true,
				pager: false,
				controls: true
			});
		    	jQuery('.bxsliderHeader').bxSlider({
			    	minSlides: 1,
				maxSlides: 1,
				slideMargin: 0,
				captions: true,
				auto: true,
				pager: false,
				controls: false
			});
 
		});

		jQuery(document).ready(function(){
			jQuery('#myCarousel').carousel();
	 	});
	</script>

<?php get_footer(); ?>
