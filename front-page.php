<?php get_header() ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();

    endwhile;
endif;
?>

<?php
$forhandlere = new WP_Query(
    array(
        "post_type" => "forhandler",
        "posts_per_page" => -1
    )
);
?>

        <!-- ACF hero-video -->
       <!--  <section>
            <div class="video">
                <?php if (get_field('hero-video')) : ?>
                    <iframe width="560" height="315" src="<?php the_field("hero-video") ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <?php endif; ?>
            </div>
        </section> -->




        <!-- Hero images-->
        <section class="hero">
            <div class="py-5 bg-image-full justify-content-center d-flex" style="background: url('<?php the_field("hero_images") ?>')">

                <div class="bottom-text text-center ">

                    <?php if (get_field('intro_tekst')) : ?>
                        <h1 class="text-white fs-3 fw-bolder"><?php echo esc_html(get_field('intro_tekst')); ?></h1>
                    <?php endif; ?>
                    <?php if (get_field('sub_tekst_til_intro')) : ?>
                        <h2 class="text-white-50 mb-0"> <?php echo esc_html(get_field('sub_tekst_til_intro')); ?></h2>
                    <?php endif; ?>
                </div>
            </div>
            </header>
        </section>

        <br>

<!--content test 1-->
        <section class="py-5">
            <article class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <?php if (get_field('pep_overskrift_1')) : ?>
                            <h1 class="text-white fs-3 fw-bolder"><?php echo esc_html(get_field('pep_overskrift_1')); ?></h1>
                        <?php endif; ?>

                        <?php if (get_field('pep_sub_1')) : ?>
                            <h2 class="lead"><?php echo esc_html(get_field('pep_sub_1')); ?></h2>

                        <?php endif; ?>

                        <?php if (get_field('pep_teskt_1')) : ?>
                            <p class="mb-0"><?php echo esc_html(get_field('pep_teskt_1')); ?></p>
                        <?php endif; ?>

                    </div>
                </div>
            </article>
        </section>
<!---------------->     

<!-- billeder af produkter-->
 
<section> 
   <!-- billede 1-->
       <div="product-pic">
            <div class="row">
                <div class="col-lg-2 col-md-12 mb-2 mb-lg-0">
                    <div class="bg-image ripple shadow-1-strong rounded" data-ripple-color="light">
                        <?php if (get_field('show_case_4')) : ?>
                            <?php $image = get_field("show_case_4") ?>
                            <img src="<?php echo $image["sizes"]["large"] ?>" alt="<?php echo $image["alt"] ?>" class="w-100" />

                </div>
            </div>
        <?php endif; ?>


         <!-- billede 2-->
            <div class="col-lg-2 mb-2 mb-lg-0">
                <div class="bg-image ripple shadow-1-strong rounded" data-ripple-color="light">

                    <?php if (get_field('show_case_5')) : ?>
                        <?php $image = get_field("show_case_5") ?>
                        <img src="<?php echo $image["sizes"]["large"] ?>" alt="<?php echo $image["alt"] ?>" class="w-100" />


                </div>
            </div>
        <?php endif; ?>


         <!-- billede 3-->
            <div class="col-lg-2 mb-2 mb-lg-0">
                <div class="bg-image ripple shadow-1-strong rounded" data-ripple-color="light">
                    <?php if (get_field('show_case_6')) : ?>
                        <?php $image = get_field("show_case_6") ?>
                        <img src="<?php echo $image["sizes"]["large"] ?>" alt="<?php echo $image["alt"] ?>" class="w-100" />

                </div>
            </div>
        <?php endif; ?>


         <!-- billede 4-->
        <div class="col-lg-2 mb-2 mb-lg-0">
            <div class="bg-image ripple shadow-1-strong rounded" data-ripple-color="light">
                <?php if (get_field('show_case_7')) : ?>
                    <?php $image = get_field("show_case_7") ?>
                    <img src="<?php echo $image["sizes"]["large"] ?>" alt="<?php echo $image["alt"] ?>" class="w-100" />

            </div>
          </div>
        <?php endif; ?>
      </div>
    </section>
<!----------------> 

        <hr>

                                    <!---------Skal måske ind-------> 
        <!--  Content tekst 2-->
        <!-- <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                       
                        <h2 class="lead">Vi tror på, at selv de mest funktionelle elementer i hjemmet fortjener opmærksomhed</h2>
                        <p class="mb-0">Vi tror på, at selv de mest funktionelle elementer i hjemmet fortjener opmærksomhed, og vores sortiment af skjulte design tørrestativer afspejler denne overbevisning. Fra elegante linjer til diskrete farver er hvert træk omhyggeligt udformet for at tilføre rummet en subtil, men bemærkelsesværdig skønhed. Vi tror på, at det, der er praktisk, også kan være smukt.ores sortiment af skjulte design tørrestativer afspejler denne overbevisning. Fra elegante linjer til diskrete farver er hvert træk omhyggeligt udformet for at tilføre rummet en subtil, men bemærkelsesværdig skønhed. Vi tror på, at det, der er praktisk, også kan være smukt.</p>
                    </div>
                </div>
            </div>
        </section> --> 

                                 <!------------- Content teskt 3-------------->
    
       <section class="py-5">
          <div class="container my-5">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                        <h2>Vi tror på, at selv de mest funktionelle elementer i hjemmet fortjener opmærksomhed</h2>
                        <p class="lead"></p>
                        <p class="mb-0">Vores sortiment af skjulte design tørrestativer afspejler denne overbevisning. Fra elegante linjer til diskrete farver er hvert træk omhyggeligt udformet for at tilføre rummet en subtil, men bemærkelsesværdig skønhed. Vi tror på, at det, der er praktisk, også kan være smukt.</p>
                    </div>
                </div>
            </div>
        </section>
  



                                  <!---------- monterings-video ------------->
  <section>
         
         <div class="montage">
           <divs class="row justify-content-md-center">
             <div class="py-5 bg-image-full justify-content-center d-flex" style="background-image: url('https://source.unsplash.com/4ulffa6qoKA/1200x800')">
                <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
              <div style="height: 25rem"></div>
            </div>
          </div>
       </section>

        <br>
        <hr>


                                  <!---------------- service------------------>

        <section id="services" class="container">
            <h2 class="display-4  mt-5 mb-3">Our Services</h2>
            <br>

            <div id="boxes" class="row text-center">
                <div class="col-md-3 mb-4">
                    <div class="card h-60">
                        <?php if (get_field('service_1')) : ?>
                            <img class="card-img-top" src="<?php echo esc_url(get_field('service_1')); ?>" alt="">
                            <?php endif; ?>
                            <div class="card-body">
                            <?php if (get_field('service_trae_overskirft')) : ?>
                                <h3 class="card-title"><?php echo esc_html(get_field('service_trae_overskirft')); ?></h3>
                                <?php endif; ?>
                                <?php if (get_field('service_trae_sub')) : ?>
                                <p class="card-text"><?php echo esc_html(get_field('service_trae_sub')); ?></p>
                                <?php endif; ?>
                            </div>

                    </div>
                </div>
       

            

            <div class="col-md-3 mb-4">
                <div class="card h-60">
                    <?php if (get_field('service_2')) : ?>
                        <img class="card-img-top" src="<?php echo esc_url(get_field('service_2')); ?>" alt="Design">
                        <div class="card-body">
                            <?php if (get_field('skabsmontering_overskrift_')) : ?>
                                <h3 class="card-title"><?php echo esc_html(get_field('skabsmontering_overskrift_')); ?></h3>
                                <?php endif; ?>
                                <?php if (get_field('skabsmontering_sub')) : ?>
                                <p class="card-text"><?php echo esc_html(get_field('skabsmontering_sub')); ?></p>
                                <?php endif; ?>
                            </div>

                </div>
            </div>
        <?php endif; ?>

        <div class="col-md-3 mb-4">
            <div class="card h-60">
                <?php if (get_field('service_3')) : ?>
                    <img class="card-img-top" src="<?php echo esc_url(get_field('service_3')); ?>" alt="Design">
                    <div class="card-body">
                            <?php if (get_field('kvalitets_af_produkt_overskrift')) : ?>
                                <h3 class="card-title"><?php echo esc_html(get_field('kvalitets_af_produkt_overskrift')); ?></h3>
                                <?php endif; ?>
                                <?php if (get_field('kvalitet_af_produkt_sub')) : ?>
                                <p class="card-text"><?php echo esc_html(get_field('kvalitet_af_produkt_sub')); ?></p>
                                <?php endif; ?>
                            </div>

            </div>
        </div>
    <?php endif; ?>
            </div>
        </section>






                                 <!--------- pep tekst før forhandler---------->
        <article class="container-fluid">
            <div class="row">
                <?php if (get_field('intro_tekst')) : ?>
                    <h1 class="text-center mt-5 text-black"><?php echo esc_html(get_field('intro_tekst')); ?></h1>
                <?php endif; ?>
            </div>
        </article>

                                <!--------------- business partners------------->

<!-- business partners text-->
        <section class="bg-light py-5 py-xl-6">

<div class="container mb-5 mb-md-6">
 <div class="row justify-content-md-center">
     <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6 text-center">
     <h2 class="mb-4 display-5">Forhandler</h2>
     
    
 
 

<!-- business partners images-->
       
        <div class="row gy-5 gy-md-6">
        <?php if ($forhandlere->have_posts()) : ?>
            <?php while ($forhandlere->have_posts()) : $forhandlere->the_post() ?>
                <div class="col-6 col-md-2 align-self-center text-center">
                    <div class="col-lg-6 col-md-6" style="height: 100%">
                        <a href="<?php the_field("link-forhandler") ?>">
                            <img src="<?php the_field("forhandler_logo") ?>" class="img-responsive mb-4 display-5 mx-auto" style="vertical-align: bottom; position: absolute;">
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata() ?>
        <?php endif; ?>
        <hr class="w-50 mx-auto mb-0 text-secondary">
        </div>
        </div>
        </div>
      
</section>
<br>
---



<?php get_footer() ?>


<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Core theme JS-->
<script src="js/scripts.js">

</script>

<style>
    .hero {
        display: flex;
        justify-content: center;
        align-items: center;
        

    }

    .product-pic{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .col-lg-3.col-md-12.mb-3.mb-lg-0 {
        display: flex;
        justify-content: center;

    }

    #boxes {
        display: flex;
        justify-content: center;
        flex-direction: row;

    }

    .bg-image.hover-overlay.ripple.shadow-1-strong.rounded {
        height: 80%;
        width: 80%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        border-radius: 1rem;

    }

    .bg-image.hover-overlay.ripple.shadow-1-strong.rounded.img {
        height: 80%;
        width: 80%;
        display: flex;
        flex-direction: row;
        border-radius: 1rem;


    }

    .col-lg-2.col-md-12.mb-2.mb-lg-0 {
        display: flex;
        justify-content: center;

    }

    .bg-image-full {
        width: 98%;
        background-position: absolute;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        justify-content: center;
        background-color: aquamarine;

        border-radius: 1rem;
        box-shadow: 1px 1px 1px rgba(148, 148, 148, 0.4);

        position: center;


    }

    .bottom-text {
        position: absolute;
        bottom: 100px;
        width: 80%;
        margin: 0 auto;
        font-family: "itc-avant-garde-gothic-pro", sans-serif ;
font-weight: 300;
font-style: normal;
    }

    .text-center {
        color: f6f6f6;
        display: flex;
        flex-direction: column;
        align-content: end;

        font-size: 2rem;
        opacity: 0.8;

    }

    .text-white-50 {
        color: f6f6f6;
        font-size: medium;
    }

    .w-100 {
        display: flex;
        justify-items: center;
        align-items: center;
        height: 80 %;
        width: 80%;
        border-radius: 1rem;
        box-shadow: 1px 1px 1px rgba(148, 148, 148, 0.4);
        margin: 1rem;
    }

    .span-or {
        display: block;
        position: absolute;
        left: 50%;
        top: -2px;
        margin-left: -25px;
        background-color: #fff;
        width: 50px;
        text-align: center;
    }

    .hr-or {
        background-color: #cdcdcd;
        height: 1px;
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }

    .bg-light.py-5.py-xl-6 {
        justify-items: center;
        width: 97%;
        border-radius: 2rem;
    }

    .card-img-top{
        max-height: 20rem;
        width: 100%;
        display: flex;
        flex-direction: row;
      
    }
    .montage{
     
        

    }
</style>