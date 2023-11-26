<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("Just hanging") ?></title>
    <meta name="view page" content="oversigt "> 
    <?php wp_head() ?>
</head>




<!-- Just an image -->
<nav class="navbar navbar-light bg-light">
<a class="navbar-brand" href="#">
      <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" width="250" height="50" alt="" >
      
    </a>
</nav>

<!-- <body <?php body_class() ?>>
    <header>
        <h1><?php bloginfo("Just hanging") ?></h1>
        <nav>
            <ul>
                <li><a href="<?php echo site_url() ?>">Home</a></li>
                <li><a href="<?php echo site_url("/blog") ?>">Blog</a></li>
                <li><a href="<?php echo site_url("/about") ?>">About</a></li>
                <li><a href="<?php echo site_url("/contact") ?>">Contact</a></li>
            </ul>
        </nav>
    </header> -->


