<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>assets/css/bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>
	<?php wp_head(); ?>
</head>
<body>

	<div class="container geral">
		<div class="row">
            <?php
                $args = array(
                    'theme_location' => 'header-menu',
                    'menu' => 'Menu 1'
                );
                wp_nav_menu($args);
            ?>
			<div class="col-md-3 logo">
				<a href="<?php echo site_url(); ?>">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" class="logo">
				</a>
			</div>
			<div class="col-md-9 titulo" id="titulo">
			 	<b><h1><?php bloginfo('name')?></h1></b>
			 	<p id="titulo"><?php bloginfo('description')?></p>
			</div>
		</div>
	</div>
	
	

	
