<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>

	<div class="container geral">
		<div class="row">
			<div class="col-md-3 logo">
				<a href="<?php echo site_url(); ?>">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" class="logo">
				</a>
			</div>
			<div class="col-md-9 titulo">
			 	<h1><?php bloginfo('nome')?></h1>
			 	<h1><?php bloginfo('nome')?></h1>
			</div>
		</div>
	</div>
	
	

	<?php wp_head(); ?>



</body>
</html>