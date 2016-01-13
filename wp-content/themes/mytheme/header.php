<html>

<head>

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>

</head>

<body>



<nav class="navbar navbar-default">
	<div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">百慕实业</a>
		</div>
		<p class="navbar-text">Signed in as Mark Otto</p>
		<?php 
		wp_nav_menu( array(
			'container_class' => 'collapse navbar-collapse', 
			'menu_class' => 'nav navbar-nav',
			'walker' => new wp_bootstrap_navwalker(),
			));
		?>

	</div><!-- /.container-fluid -->
</nav>




	


