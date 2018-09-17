<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]> <html <?php language_attributes(); ?>> <![endif]-->
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="<?php bloginfo('charset'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="container">
		<header>
			<div class="header">
				<div class="container">
					<?php alice_logo(); ?>
					<div class="icon">
						<i class="fa fa-align-justify"></i>
					</div>
					<div class="main-menu" id="navbar">						
						<?php alice_menu('primary-menu'); ?>
						<div class="search primary-menu">
							<ul>
								<li><a href="#"><img src="<?php echo get_template_directory_uri().'/image/bag.png' ?>" ><sup>2</sup></a></li>
								<li><button type="submit"><img src="<?php echo get_template_directory_uri().'/image/search.png' ?>" ></button></li>
							</ul>
						</div>
					</div>

					
				</div>
			</div>
			<div class="adv">
				<div class="container">
					<h1>OUR BLOG</h1>	
					<div class="breadcrumbs">
						<ul class="crumb">
						    <?php breadcrumbs() ?>
						 </ul>
					</div>
				</div>
			</div>
		</header>
		