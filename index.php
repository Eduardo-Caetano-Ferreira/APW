<!DOCTYPE html>
<html>
<head>
	<title>Tema</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>

	<?php get_header(); ?>

	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<h2>Nosso primeiro tema</h2>
			</div>
		</div>
	</div>

	<?php $cont = 0;
	if(have_posts()){
		while (have_posts()){
			the_post();
			$cont++;
			if ($cont<=3){

			

			?>
				<div class="col-md-4">
					<h3 id="titulopost"> <?php the_title(); ?> </h3>
					<?php the_title(); ?>
					<div class="img-responsive img-thubnail foto">
						<?php the_post_thumbnail(); ?>
					</div>
					<p id="conteudo"> <?php the_excerpt();?> </p>
				</div>
	<?php
	}
	}
	}
	?>





<figure>

<figcaption>
	Pombo
</figcaption>

<p><img src="<?php echo get_template_directory_uri() ?>/assets/img/pombo.png" width="136" height="200"> <img src="<?php echo get_template_directory_uri() ?>/assets/img/galo.png" width="136" height="200" > Descrição</p>



</figure>




<div class="container">
	<div class="row">

		<div class="col-md-3">

	<figure>


		<figcaption>
			Pombo
		</figcaption>

		<a href="<?php echo site_url(); ?>">

	<img src="<?php echo get_template_directory_uri() ?>/assets/img/pombo.png"  width="136" height="200">

		</a>


	</figure>
			
		</div>
		<div class="col-md-3">
			
	<figure>


		<figcaption>
			Pombo
		</figcaption>

		<a href="<?php echo site_url(); ?>">

	<img src="<?php echo get_template_directory_uri() ?>/assets/img/pombo.png"  width="136" height="200">

		</a>


	</figure>

		</div>
		<div class="col-md-3">
			
	<figure>

		<figcaption>
			Pombo
		</figcaption>

	<p><img src="<?php echo get_template_directory_uri() ?>/assets/img/pombo.png" width="136" height="200"> <img src="<?php echo get_template_directory_uri() ?>/assets/img/pinto.png" width="136" height="200" > Descrição</p>

		


	</figure>

		</div>
		<div class="col-md-3">

	<figure>


		<figcaption>
			Pombo
		</figcaption>

		<a href="<?php echo site_url(); ?>">

	<img src="<?php echo get_template_directory_uri() ?>/assets/img/pombo.png"  width="136" height="200">

		</a>


	</figure>

		</div>

	</div>
</div>

	<?php get_footer(); ?>

</body>
</html>