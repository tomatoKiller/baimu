<?php
/*
Template Name: company introduction page
*/
  include(TEMPLATEPATH . '/page-about.php');
?>




<h2>企业展示</h2>
<hr>
<br>


<div class="zhanshi">
	<ul class="bxsliderZhanshi">
		<?php 
		   	for( $i = 1; $i < 8; $i++) {
		   		echo '<li><img src="' . get_template_directory_uri()."/images/zhanshi$i.jpg\"" . ' width="500" height= "500"/></li>';
		   	}
		?>
	</ul>
</div>

<script type="text/javascript">
	jQuery(document).ready(function(){
	
		jQuery('.bxsliderZhanshi').bxSlider({
			minSlides: 1,
			maxSlides: 1,
			slideMargin: 0,
			auto: true,
			pager: false,
		});

	});


</script>



</div>
<div class="col-xs-1"></div>
</div>

<?php get_footer(); ?>