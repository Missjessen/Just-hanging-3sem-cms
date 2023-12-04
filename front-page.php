<?php get_header() ?>
<div class="container-fluid g-0">


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

<?php
$service = new WP_Query(
    array(
        "post_type" => "service",
        "posts_per_page" => -1
    )
);
?>

    <!------------ ACF hero-video ------------>
    <!--  <section>
            <div class="video">
                <?php if (get_field('hero-video')) : ?>
                    <iframe width="560" height="315" src="<?php the_field("hero-video") ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <?php endif; ?>
            </div>
        </section> -->




    <!-------------- Hero images--------------->
    <section class="hero row">
        <div class="col-12  bg-image-full justify-content-center d-flex" style="background: url('<?php the_field("hero_images") ?>')">

            <!--tekst hero-->
            <div class="bottom-text text-center ">

                <!--   <?php if (get_field('intro_tekst')) : ?>    
                        <h1 class="text-white fs-3 fw-bolder"><?php echo esc_html(get_field('intro_tekst')); ?></h1>
                    <?php endif; ?>
                    
                    <?php if (get_field('sub_tekst_til_intro')) : ?>
                        <h2 class="text-white-50 mb-0"> <?php echo esc_html(get_field('sub_tekst_til_intro')); ?></h2>
                    <?php endif; ?> 
 -->
            </div>
        </div>
        </header>
    </section>

    
    <br>
    <!----------content test 1-------------->
    <article class="row mx-0 my-5 justify-content-center">


        <div class="col-sm-10 p-3 col-lg-8">

            <?php if (get_field('pep_overskrift_1')) : ?> <!--overskrift-->
                <h1 class=" fs-3 fw-bolder"><?php echo esc_html(get_field('pep_overskrift_1')); ?></h1>
            <?php endif; ?>

            <?php if (get_field('pep_sub_1')) : ?><!--sub-->
                <h2 class="lead"><?php echo esc_html(get_field('pep_sub_1')); ?></h2>

            <?php endif; ?>

            <?php if (get_field('pep_teskt_1')) : ?>
                <p class="mb-0"><?php echo esc_html(get_field('pep_teskt_1')); ?></p>
            <?php endif; ?>

        </div>


    </article>




    <!----------- billeder af produkter----------->

    <section>
        <!-- billede 1-->
        <div class="product-pic">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-2 col-md-12 mb-2 "> <!-- mb-lg-0 -->
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
<br>
<br>
    <hr class="divider-line-100">

    <!---------Skal måske ind, ekstra tekst------->
    <!--  Content tekst 2-->
    <article class="py-5">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">


                    <?php if (get_field('pep_overskrift_2')) : ?> <!--overskrift-->
                        <h2 class=" fs-3 fw-bolder"><?php echo esc_html(get_field('pep_overskrift_2')); ?></h2>
                    <?php endif; ?>

                    <?php if (get_field('pep_sub_2')) : ?><!--sub-->
                        <h3 class="lead"><?php echo esc_html(get_field('pep_sub_2')); ?></h3>

                    <?php endif; ?>

                    <?php if (get_field('pep_teskt_2')) : ?>
                        <p class="mb-0"><?php echo esc_html(get_field('pep_teskt_2')); ?></p>
                    <?php endif; ?>
                </div>
            </div>
    </article>


    <!------------- Content teskt 3-------------->

    <section id="instruktion-tekst" class="container">
        <h6 class="display-5  mt-4 mb-4">Følg vores brugervenlige vejledning. Installationen er enkel og kræver kun grundlæggende værktøjer.</h6>


    </section>




    <!---------- monterings-video ------------->
    <section class="instruktions video">
        <div class="instruk py-5 bg-image-full justify-content-center d-flex" style="background: url('<?php the_field("instruktion_video") ?>')">

            <!--tekst hero-->
            <div class="bottom-text text-center ">

                <!--   <?php if (get_field('intro_tekst')) : ?>    
                        <h1 class="text-white fs-3 fw-bolder"><?php echo esc_html(get_field('intro_tekst')); ?></h1>
                    <?php endif; ?>
                    
                    <?php if (get_field('sub_tekst_til_intro')) : ?>
                        <h2 class="text-white-50 mb-0"> <?php echo esc_html(get_field('sub_tekst_til_intro')); ?></h2>
                    <?php endif; ?> 
 -->
            </div>
        </div>
    </section>
<br>
    <hr class="divider-line-100">
    


    <!---------------- service------------------>

    <section id="services" class="container">
        <h2 class="display-4  mt-5 mb-3">Vores Service</h2>
        <br>

        <div id="boxes" class="row text-center d-flex justify-content-center align-self-center">
            <div class="col-12 col-md-12 mb-4 d-flex h-100 boxes-mobile">
                <?php if ($service->have_posts()) : ?>
                    <?php while ($service->have_posts()) : $service->the_post() ?>
                        <div class="card d-flex flex-grow-1 m-2 align-items-stretch" style="width:auto !important; min-width:33% !important">

                        
                            <img class="card-img-top" src="<?php echo esc_url(get_field('service_pic')); ?>" alt="" />

                            <div class="card-body">

                                <h4 class="card-title"><?php echo esc_html(get_field('service__overskirft')); ?></h4>

                                <p class="card-text"><?php echo esc_html(get_field('service_sub')); ?></p>


                            </div>
                            
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata() ?>
                <?php endif; ?>
            </div>
        </div>
    </section>






    <!--------- pep tekst før forhandler---------->
    <article class="container-fluid">
        <div class="row">
            <?php if (get_field('intro_tekst')) : ?>
                <hh5 class="text-center my-5 text-black"><?php echo esc_html(get_field('intro_tekst')); ?></h5>
                <?php endif; ?>
        </div>
    </article>

    <!--------------- business partners------------->

    <!-- business partners text-->
    <section class="bg-light py-5 py-xl-6 container-fluid">

        <div class="container mb-md-6">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6 text-center">
                    <h2 class="mb-4 display-5">Forhandler</h2>



                    <!-- business partners images-->

                    <!--    <div class="row "> --> <!-- gy-6 gy-md-6 -->
                    <?php if ($forhandlere->have_posts()) : ?>
                        <?php while ($forhandlere->have_posts()) : $forhandlere->the_post() ?>
                            <div class="bpi"> <!-- col-6 align-self-center text-center  -->
                                <!-- <div class="col-lg-6 col-md-6" style="height: 100%"> -->
                                <a href="<?php the_field("link-forhandler") ?>">
                                    <img src="<?php the_field("forhandler_logo") ?>" class="img-responsive mb-4  mx-auto">
                                </a>
                                <!-- </div> -->
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata() ?>
                    <?php endif; ?>

                    <hr class="divider-line-100">
                    <!--  </div> -->
                </div>
            </div>
    </section>
    <br>
    <br>
    <?php get_footer() ?>
</div>



<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Core theme JS-->
<script src="js/scripts.js">

</script>
