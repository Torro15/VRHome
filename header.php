<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header" id="main"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(<?= CFS()->get('header_bg'); ?>)">
        <div class="container">
            <nav class="menu__mobile">
                <div class="menu__inner">
                    <?php the_custom_logo(); ?>
                    <a class="menu__burger">
                        <span class="burger__line"></span>
                        <span class="burger__line"></span>
                        <span class="burger__line"></span>
                    </a>
                </div>
                <div class="menu__sidenav">
                <?php
				wp_nav_menu([
					'theme_location' => 'top',
					'container' => '',
					'menu_class' => '',
					'menu_id' => ''
				]);
				?>
                </div>
            </nav>
            <nav class="nav">
                <div class="nav__flex">
                    <?php the_custom_logo(); ?>
                    <?php
				wp_nav_menu([
					'theme_location' => 'top',
					'container' => '',
					'menu_class' => '',
					'menu_id' => ''

				]);
				?>
                </div>
            </nav>
        </div>
    </header>
