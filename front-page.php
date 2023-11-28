<?php get_header() ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post(); 
        
    endwhile;
endif;
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



     <!-- Header - set the background image for the header in the line below-->
     
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
        
       

        <!--2 section kort beskrivelse under hero-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Full Width Backgrounds</h2>
                        <p class="lead">A single, lightweight helper class allows you to add engaging, full width background images to sections of your page.</p>
                        <p class="mb-0">The universe is almost 14 billion years old, and, wow! Life had no problem starting here on Earth! I think it would be inexcusably egocentric of us to suggest that we're alone in the universe.</p>
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
                        <h2>Engaging Background Images</h2>
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
                    <div class="col-lg-6">
                        <h2>Engaging Background Images</h2>
                        <p class="lead">The background images used in this template are sourced from Unsplash and are open source and free to use.</p>
                        <p class="mb-0">I can't tell you how many people say they were turned off from science because of a science teacher that completely sucked out all the inspiration and enthusiasm they had for the course.</p>
                    </div>
                </div>
            </div>
        </section>
        </section>

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <!--card-->

        <div class="container">
  <div class="card">
     <div class="card__image-container">
       <img class="card__image" src="https://images.unsplash.com/photo-1519999482648-25049ddd37b1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2126&q=80" alt="">
    </div>
      
      <svg class="card__svg" viewBox="0 0 800 500">

        <path d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400 L 800 500 L 0 500" stroke="transparent" fill="#333"/>
        <path class="card__line" d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400" stroke="pink" stroke-width="3" fill="transparent"/>
      </svg>
    
     <div class="card__content">
       <h1 class="card__title">Lorem ipsum</h1>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta dolor praesentium at quod autem omnis, amet eaque unde perspiciatis adipisci possimus quam facere illo et quisquam quia earum nesciunt porro.</p>
    </div>
  </div>
</div>
    
    </body>

    <!-- ACF intro-tekst -->
<article class="container-fluid">
<div class="row">
    <?php if ( get_field('intro_tekst') ): ?> 
      <h1 class="text-center mt-5 text-black"><?php echo esc_html( get_field('intro_tekst') ); ?></h1>
    <?php endif; ?>
    </div>
</article>
</html>

---


</html>
</main>

<?php get_footer() ?> 

<style>

* {
  box-sizing: border-box;
  line-height: 1.5;
  font-family: 'Open Sans', sans-serif;
}

img {
  max-width: 100%;
}

.container {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  background: #444;
}

.card {
  position: relative;
  background: #333;
  width: 400px;
  height: 75vh;
  border-radius: 6px;
  padding: 2rem;
  color: #aaa;
  box-shadow: 0 .25rem .25rem rgba(0,0,0,0.2),
    0 0 1rem rgba(0,0,0,0.2);
  overflow: hidden;
  
  &__image-container {
    margin: -2rem -2rem 1rem -2rem;
  }
  
  &__line {
  opacity: 0;
  animation: LineFadeIn .8s .8s forwards ease-in;
  }

  &__image {
    opacity: 0;
    animation: ImageFadeIn .8s 1.4s forwards;
  }

  &__title {
    color: white;
    margin-top: 0;
    font-weight: 800;
    letter-spacing: 0.01em;
  }
  
  &__content {
    margin-top: -1rem;
    opacity: 0;
    animation: ContentFadeIn .8s 1.6s forwards;
  }
  
  &__svg {
    position: absolute;
    left: 0;
    top: 115px;
  }
}

@keyframes LineFadeIn {
  0% { opacity: 0; d: path("M 0 300 Q 0 300 0 300 Q 0 300 0 300 C 0 300 0 300 0 300 Q 0 300 0 300 "); stroke: #fff; }
  50% { opacity: 1; d: path("M 0 300 Q 50 300 100 300 Q 250 300 350 300 C 350 300 500 300 650 300 Q 750 300 800 300"); stroke: #888BFF; }
  100% { opacity: 1; d: path("M -2 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 802 400"); stroke: #545581; }
}

@keyframes ContentFadeIn {
  0% { transform: translateY(-1rem); opacity: 0; }
  100% { transform: translateY(0); opacity: 1; }
}

@keyframes ImageFadeIn {
  0% { transform: translate(-.5rem, -.5rem) scale(1.05); opacity: 0; filter: blur(2px); }
  50% { opacity: 1; filter: blur(2px); }
  100% { transform: translateY(0) scale(1.0); opacity: 1; filter: blur(0); }
}
</style>