
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


<div class="row"><hr>
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
<div class="row">
	<div class="col-xs-1"></div>
	<div class="col-xs-10">

		<br>

		<div class="col-xs-3">
			<h2 align="center">网上咨询</h2>
			<hr>
			<a href="#" class="btn btn-primary btn-lg btn-block disabled" role="button">服务热线 <br> 0371-55238137</a>
			<a href="#" class="btn btn-primary btn-lg btn-block" role="button">网上咨询</a>
		</div>
		<div class="col-xs-9">
			<h2 align="center">产品展示</h2>
			<hr>
			<div id="productCarousel" class="carousel slide pad_010 b_k" data-ride="carousel">
		      <!-- 轮播（Carousel）指标 -->
		      <ol class="carousel-indicators">
		          <li data-target="#productCarousel" data-slide-to="0" class="active"></li>
		          <li data-target="#productCarousel" data-slide-to="1"></li>
		          <li data-target="#productCarousel" data-slide-to="2"></li>
		      </ol>
		      <!-- 轮播（Carousel）项目 -->
		      <div class="carousel-inner bor_btm">
		          <div class="item active" >
		              <div class="pic">
		                  <img src="<?php echo get_template_directory_uri().'/images/s1.jpg' ; ?>" width="200" alt="" >
		                  <img src="<?php echo get_template_directory_uri().'/images/s2.jpg' ; ?>" width="200" alt="" >
		                  <img src="<?php echo get_template_directory_uri().'/images/s3.jpg' ; ?>" width="200" alt="" >
		              </div>
		          </div>
		          <div class="item">
		              <div class="pic">
		                  <img src="<?php echo get_template_directory_uri().'/images/s2.jpg' ; ?>"  height="75" alt="" >
		                  <img src="<?php echo get_template_directory_uri().'/images/s2.jpg' ; ?>" height="75" alt="" >
		                  <img src="<?php echo get_template_directory_uri().'/images/s3.jpg' ; ?>" height="75" alt="" >
		              </div>
		          </div>
		          <div class="item">
		              <div class="pic">
		                  <img src="<?php echo get_template_directory_uri().'/images/s3.jpg' ; ?>" >
		                  <img src="<?php echo get_template_directory_uri().'/images/s2.jpg' ; ?>" >
		                  <img src="<?php echo get_template_directory_uri().'/images/s3.jpg' ; ?>" >
		              </div>
		          </div>
		       </div>
		       <!-- 轮播（Carousel）导航 -->
		       <a class="carousel-control left" href="#productCarousel" data-slide="prev">&lsaquo;</a>
		       <a class="carousel-control right" href="#productCarousel" data-slide="next">&rsaquo;</a>
		    </div>

		</div>
	</div>
	<div class="col-xs-1"></div>
</div>

<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#productCarousel').carousel({
		    		visible:3
		    	});
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
				controls: true
			});
		    	jQuery('.bxsliderHeader').bxSlider(
		    		{
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
