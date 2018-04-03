<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#6d9aea">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body <?php body_class(); ?>>
    <div class="fixed-position">
        <div class="menu-container">


        <div class="menu-wrapper">
            <div class="logo"></div>
            <div class="hamburger-container">
                <div class="hamburger" id="hamburger-2">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>

            <div class="navigation">
                <ul class="navigation-bar">
                    <?php
                    $pages = get_pages(array('sort_column' => 'menu_order'));;
                    foreach ( $pages as $page ) {
                        $option = '<div class="skew"><a class="nav-color nav-link skew2" href="' .
                        get_page_link( $page->ID ) .
                        '">' .
                        $page->post_title .
                        '</a></div>';
                        echo $option;
                    }
                    ?>
                </ul>
            </div>
        </div>
        </div>
    </div>

    <div class="container pt-5 mt-5">
