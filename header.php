<?php
/*
 * This template for displaying the header
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header id="header_area" class="<?php echo get_theme_mod('a2n_menu_position') ?>">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('a2n_logo'); ?>"
                                alt="logo" /></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-menu d-none d-lg-block">

                        <?php wp_nav_menu(array('theme_location' => 'primary_menu', 'menu_id' => 'navigation')); ?>

                    </div>
                </div>
                <div class="col-lg-1 d-none d-lg-block">
                    <button class="btn primary_btn" type="button">
                        LOGIN
                    </button>
                </div>
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </header>