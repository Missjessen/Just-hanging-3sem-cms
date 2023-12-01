<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("Just hanging") ?></title>
    <meta name="Just hanging" content="Showcase page"> 
    <?php wp_head() ?>
</head>


<body>
 <main>


<nav>
    <section>
  <div id="top-af-siden" class="copyright">
      <div class="container">
          <div class="row">
             <div class="col-sm-6 fa-sharp fa-thin fa-check">
                <p>Dansk design og kvalitet</p>
              </div>
             <div class="col-sm-6">
            <p><i class="fa-sharp fa-thin fa-check"></i>Nem og hurtig installation med 100 dages tilfredshedsgaranti.</p>
          </div>
       </div>
    </div>
    </div>
</section>

<!-- Just an image -->
<div class="navbar navbar-light bg-light">
<a class="navbar-brand" href="#">
      <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" width="200" height="45" alt="" >
      
    </a>
</nav>
</section>


<style>

#top-af-siden{

    background-color: #424444 !important;
    color: #f6f6f6;
}
/* tekst i toppen*/
.navbar-brand{
    display: flex;
    align-content: center;
  justify-content: center;
  height: 8vh;
  
}

/* tekst i toppen*/
div.col-sm-6{
    display: flex;
    align-content: center;
    justify-content: center;
    font-style: italic;
    font-weight: 150;
    margin-top: 4px;
    
}
.navbar.navbar-light.bg-light{ */
     height: 12vh;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow:  1px 1px 1px  rgba(148, 148, 148, 0.4);

    background-color: f6f6f6; 
    
    z-index: 100;} 
    </style>