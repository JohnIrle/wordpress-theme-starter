<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<?php
	wp_head();
	?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><?php echo get_bloginfo('name') ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-menu">
<!--            --><?php
//            if(function_exists('the_custom_logo')) {
//                $custom_logo_id = get_theme_mod('custom_logo');
//                $logo = wp_get_attachment_image_src($custom_logo_id);
//
//            }
//            ?>
<!--            <img class="mb-3 mx-auto logo" src="--><?php //echo $logo[0] ?><!--" alt="logo" />-->
			<?php
			wp_nav_menu(
				array(
					'menu'           => 'primary',
					'container'      => false,
					'theme_location' => 'primary',
					'depth'          => 2,
					'items_wrap'     => '<ul id="" class="navbar-nav me-auto mb-2 mb-md-0">%3$s</ul>',
					'walker'         => new bootstrap_5_wp_nav_menu_walker()
				)
			);
			?>
        </div>
    </div>
</nav>
<header>
    <h1><?php the_title(); ?></h1>
</header>