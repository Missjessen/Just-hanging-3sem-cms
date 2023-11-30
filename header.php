<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("Just hanging") ?></title>
    <meta name="view page" content="oversigt side "> 
    <?php wp_head() ?>
</head>




<!-- Just an image -->
<nav class="navbar navbar-light bg-light">
<a class="navbar-brand" href="#">
      <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" width="200" height="45" alt="" >
      
    </a>
</nav>



<style>

.navbar-brand{
    display: flex;
    align-content: center;
  justify-content: center;
  margin-left: 2rem;
}

/* .navbar.navbar-light.bg-light{ */
    /* height: 14vh;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow:  1px 1px 1px  rgba(148, 148, 148, 0.4);
    position: fixed;
    background-color: f6f6f6;
    
    z-index: 100;} */
    </style>