<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href="<?php echo get_template_directory_uri() . '/style.css' ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri() . '/css/bootstrap.min.css' ?>" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Dosis" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Rancho" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/arrows.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page">
    <header id="masthead" class="site-header">
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href= "<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand">THE<span id="art">ART</span>STUDIO</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse navbar-main-collapse">
                <div class="pull-right hidden-xs social-networks">
                    <?php get_sidebar( 'main' ); ?>
                    <div id="facebook-wrapper">
                        <a href="#" id="facebook">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon-black.png" alt="image">
                        </a>
                    </div>
                </div>
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu nav navbar-nav navbar-main pull-center', 'menu_id' => 'primary-menu' ) ); ?>

            </div>

        </nav><!-- #navbar -->
    </header><!-- #masthead -->
