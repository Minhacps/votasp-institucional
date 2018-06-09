<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <?php if ( ! get_option( 'site_icon' ) ) : ?>
        <link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
    <?php
        endif;
        wp_head();
    ?>

    <link href="https://fonts.googleapis.com/css?family=Asap:400,600" rel="stylesheet">
</head>
<body <?php body_class(); ?>>

    <header class="navbar navbar-expand-lg">
        <nav class="container">

            <a class="btn btn-primary d-block d-lg-none" href="#" role="button">Participe</a>
            <?php odin_the_custom_logo(); ?>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'main-menu',
                            'depth' => 2,
                            'container' => false,
                            'menu_class' => 'nav main-menu navbar-nav',
                            'fallback_cb' => 'Odin_Bootstrap_Nav_Walker::fallback',
                            'walker' => new Odin_Bootstrap_Nav_Walker()
                        )
                    );
                ?>

                <a href="https://benfeitoria.com/votasp" target="_blank" class="btn btn-primary d-none d-lg-block">Contribua!</a>

                <ul class="nav social">
                    <li class="social-icon facebook">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone-facebook.svg" alt="Link para Facebook do VotaSP"></a>
                    </li>
                    <li class="social-icon twitter">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone-twitter.svg" alt="Link para Twitter do VotaSP"></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>