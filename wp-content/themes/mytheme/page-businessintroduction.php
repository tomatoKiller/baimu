<?php
/*
Template Name: business introduction page
*/
  include(TEMPLATEPATH . '/page-about.php');
?>





    <h2>经营业务</h2>
    <hr>
    <br>

    百慕的主要经营业务有矿山石材 园林绿化等

    <br><br>

    <h3>矿山石材</h3>
    <hr>

	<div>
		<ul class="bxsliderShicai">
			<li><img src="<?php echo get_template_directory_uri().'/images/shicai8.jpg' ; ?>" ></li>
			<li><img src="<?php echo get_template_directory_uri().'/images/shicai9.jpg' ; ?>" ></li>
			<li><img src="<?php echo get_template_directory_uri().'/images/shicai10.jpg' ; ?>" ></li>
		</ul>
	</div>

    <br><br>
    <h3>园林绿化</h3>
    <hr>

    佛山今日集团豪雅恶搞三个


  </div>
  <div class="col-xs-1"></div>
</div>

<script type="text/javascript">
		jQuery(document).ready(function(){
		
		    	jQuery('.bxsliderShicai').bxSlider({
			    	minSlides: 1,
				maxSlides: 1,
				slideMargin: 0,
				auto: true,
				pager: false,
			});
 
		});


	</script>

<?php get_footer(); ?>
