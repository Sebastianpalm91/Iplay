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

    <header class="d-flex justify-content-between">
        <div class="mt-2 ml-5">
            <div class="logo"></div>
        </div>
        <div class="navbar navbar-expand-md">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav mt-lg-0">

                    <?php
                    $pages = get_pages(array('sort_column' => 'menu_order'));;
                    foreach ( $pages as $page ) {
                        $option = '<li class="nav-item"><a class="nav-link nav-color" href="' .
                        get_page_link( $page->ID ) .
                        '"></li>' .
                        $page->post_title .
                        '</a>';
                        echo $option;
                    }
                    ?>
                </ul>
            </div>
        </div>
    </header>
    <div class="container">
