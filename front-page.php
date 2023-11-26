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