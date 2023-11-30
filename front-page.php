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
"post_type" => "post-type-slug",
"posts_per_page" => -1
)
);
?>


<main>
<!-- ACF hero-video -->
 <section>
        <div class="video">
            <?php if (get_field('hero_video')) : ?>
                <video class="w-50 h-50" autoplay loop muted>
                    <source type="video/mp4" src="<?php echo esc_url(get_field('hero_video')); ?>" />
                </video>
            <?php endif; ?>
        </div>
    </section>



<!-- Hero-->
     
     <header class="py-5 bg-image-full justify-content-center d-flex" style="background: url('<?php the_field("hero_images") ?>')">
       
        <div class="bottom-text text-center ">
               
                <?php if ( get_field('intro_tekst') ): ?> 
                <h1 class="text-white fs-3 fw-bolder"><?php echo esc_html( get_field('intro_tekst') ); ?></h1>
                <?php endif; ?>
                <?php if ( get_field('sub_tekst_til_intro') ): ?>
                <h2 class="text-white-50 mb-0"> <?php echo esc_html( get_field('sub_tekst_til_intro') );?></h2>
                <?php endif; ?>
            </div>
        </header>
        
 <br>
<!-- business partners text-->
<section class="bg-light py-5 py-xl-6">

   <div class="container mb-5 mb-md-6">
    <div class="row justify-content-md-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6 text-center">
        <h2 class="mb-4 display-5">Forhandler</h2>
        <p class="text-secondary mb-4 mb-md-5">...</p>
        <hr class="w-50 mx-auto mb-0 text-secondary">
      </div>
    </div>
  </div>

<!-- business partners images-->
<div class="container overflow-hidden">
    
    <div class="row gy-5 gy-md-6">
    <?php if($forhandlere->have_posts()): ?>
    <?php while($forhandlers->have_posts()): $forhandlere->the_post() ?>
       <div class="col-6 col-md-3 align-self-center text-center">
       <div class="col-lg-6 col-md-6" style="height: 100%">
    
       <img src=<img src="<?php the_field("forhandler_logo") ?>" class="img-responsive" style="vertical-align: bottom; position: absolute;">    
  </div>
</div>
      <?php endwhile; ?>
      <?php wp_reset_postdata() ?>
    </div>
  </div>
      <?php endif; ?>
</section>
<br>


<!-- new card -->

<section id="services" class="container">
   <h2 class="display-4 text-center mt-5 mb-3">Our Services</h2>
   
   <div id="boxes" class="row text-center">
      <div class="col-md-4 mb-4" >
         <div class="card h-100" >
         <?php if (get_field('showcase_images1')) : ?>
            <img class="card-img-top" src="<?php echo esc_url(get_field('showcase_images1')); ?>" alt="Design">
            <div class="card-body">
               <h4 class="card-title">Design</h4>
               <p class="card-text">Deliver the best user experience 
               with our carefully designed responsive websites and applications!</p>
            </div>
            <div class="card-footer py-4">
               <a href="#" class="btn btn-secondary">See portfolio &raquo;</a>
            </div>
         </div>
      </div>
      
      <div class="col-md-4 mb-4">
         <div class="card h-100">
            <img class="card-img-top" src="development.jpg" alt="Development">
            <div class="card-body">
               <h4 class="card-title">Development</h4>
                  <p class="card-text">You need software that works on every device. 
                  Leverage the latest technologies and the most powerful tools!</p>
            </div>
            <div class="card-footer py-4">
               <a href="#" class="btn btn-secondary">See projects &raquo;</a>
            </div>
         </div>
      </div>
      <?php endif; ?>
      
      <div class="col-md-4 mb-4">
         <div class="card h-100">
            <img class="card-img-top" src="analytics.jpg" alt="Analytics">
            <div class="card-body">
               <h4 class="card-title">Analytics</h4>
               <p class="card-text">Consult our experts to set up proper goals and 
               find the best stack for your next application!</p>
            </div>
            <div class="card-footer py-4">
               <a href="#" class="btn btn-secondary">See testimonials &raquo;</a>
            </div>
         </div>
      </div>
   </div>
</section>


<!--2 section kort beskrivelse under hero-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2>Optimér din plads med vores væghængte tørrestativ!</h2>
                        <p class="lead">Skønhed er ikke vores eneste fokus.</p>
                        <p class="mb-0">Vores skjulte design tørrestativer er skabt med kvalitet og funktionalitet i højsædet. Vi forstår vigtigheden af at skabe produkter, der ikke kun ser godt ud, men også leverer på deres løfte om at gøre hverdagen mere bekvem. Fra smarte folde-mekanismer til holdbare materialer er vores tørrestativer designet til at imødekomme alle aspekter af moderne livsstil.</p>
                    </div>
                </div>
            </div>
        </section>



 <!-- Modal gallery -->
  <section class="">
    <!-- Section: Images -->
       <section class="product-pic">
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
        >
        <?php if (get_field('showcase_images1')) : ?>
          <img
            src="<?php echo esc_url(get_field('showcase_images1')); ?>" 
            class="w-100"
          />
          <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
          </a>
        </div>
      </div>
        <?php endif; ?>


      
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div
          class="bg-image hover-overlay ripple shadow-1-strong rounded"
          data-ripple-color="light">

          <?php if (get_field('showcase_images2')) : ?>
        <img
            src="<?php echo esc_url(get_field('showcase_images2')); ?>"
            class="w-100"
          />
          <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
          </a>
        </div>
      </div>
        <?php endif; ?>

      <div class="col-lg-4 mb-4 mb-lg-0">
        <div
          class="bg-image hover-overlay ripple shadow-1-strong rounded"
          data-ripple-color="light"
        >
        <?php if (get_field('showcase_images_3')) : ?>
          <img
            src="<?php echo esc_url(get_field('showcase_images_3')); ?>"
            class="w-100"
          />
          <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
          </a>
        </div>
      </div>
        <?php endif; ?>
    </div>
  </section>
  <!-- Section: Images -->

  <!-- Section: Modals -->
  <section class="">
    <!-- Modal 1 -->
    <div
      class="modal fade"
      id="exampleModal1"
      tabindex="-1"
      aria-labelledby="exampleModal1Label"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="ratio ratio-16x9">
            <iframe
              src="https://www.youtube.com/embed/A3PDXmYoF5U"
              title="YouTube video"
              allowfullscreen
            ></iframe>
          </div>

          <div class="text-center py-3">
            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 2 -->
    <div
      class="modal fade"
      id="exampleModal2"
      tabindex="-1"
      aria-labelledby="exampleModal2Label"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="ratio ratio-16x9">
            <iframe
              src="https://www.youtube.com/embed/wTcNtgA6gHs"
              title="YouTube video"
              allowfullscreen
            ></iframe>
          </div>

          <div class="text-center py-3">
            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 3 -->
    <div
      class="modal fade"
      id="exampleModal3"
      tabindex="-1"
      aria-labelledby="exampleModal3Label"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="ratio ratio-16x9">
            <iframe
              src="https://www.youtube.com/embed/vlDzYIIOYmM"
              title="YouTube video"
              allowfullscreen
            ></iframe>
          </div>

          <div class="text-center py-3">
            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Modals -->
</section>
<!-- Modal gallery -->

        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Optimér din plads med vores væghængte tørrestativ!</h2>
                        <p class="lead">The background images used in this template are sourced from Unsplash and are open source and free to use.</p>
                        <p class="mb-0">I can't tell you how many people say they were turned off from science because of a science teacher that completely sucked out all the inspiration and enthusiasm they had for the course.</p>
                    </div>
                </div>
            </div>
        </section>
      
       <!-- Modal gallery -->
        <!-- Image element - set the background image for the header in the line below-->
        <div class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/4ulffa6qoKA/1200x800')">
            <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
            <div style="height: 20rem"></div>
        </div>
        <!-- Content section-->
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
        </section>

       
        
      

       
    
    </body>

    <!-- ACF intro-tekst -->
<article class="container-fluid">
<div class="row">
    <?php if ( get_field('intro_tekst') ): ?> 
      <h1 class="text-center mt-5 text-black"><?php echo esc_html( get_field('intro_tekst') ); ?></h1>
    <?php endif; ?>
    </div>
</article>

</main>

<?php get_footer() ?> 


<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- Core theme JS-->
        <script src="js/scripts.js">

</script>

<style>
    *{
        background-color: 424444;

    }

    #boxes{
        display: flex;
        flex-direction: row;
       
    }

    .bg-image.hover-overlay.ripple.shadow-1-strong.rounded{
        height: 80%;
        width: 80%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        
    }

    .bg-image.hover-overlay.ripple.shadow-1-strong.rounded.img{
        height: 80%;
        width: 80%;
        display: flex;
        flex-direction: row;
       
        
    }

    .customize-support{
        
      background-color: 424444;
    }
    </style>