<?php
if (have_posts()) :
    while (have_posts()) : the_post(); 
        
    endwhile;
endif;
?>

                                 <!--------- media-iconer----------->

<link href='//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<body>
<hr class="hr-or">
        <span class="span-or">or</span>
<hr class="hr-or">
<hr class="hr-or">
<footer class="nb-footer">
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="about">
  <img src="images/logo.png" class="img-responsive center-block" alt="">
  <p></p>

                                     <!--------- media-iconer----------->


  <div class="social-media">
    <ul class="list-inline">
    <?php if ( get_field('facebook_media_' ) ): ?>
      <li><a href="<?php the_field("facebook_media_") ?>" title=""><i class="fa fa-facebook"></i></a></li>
        <?php endif; ?>
        <?php if ( get_field('instagram-media' ) ): ?>
      <li><a href="<?php the_field("instagram-media") ?>" title=""><i class="fa fa-instagram"></i></a></li>
        <?php endif; ?>
        <?php if ( get_field('pinterest_media' ) ): ?>
      <li><a href="<?php the_field("pinterest_media") ?>"title=""><i class="fa fa-pinterest"></i></a></li>
        <?php endif; ?>
        <?php if ( get_field('linkedin_media' ) ): ?>
      <li><a href="<?php the_field("linkedin_media") ?>" title=""><i class="fa fa-linkedin"></i></a></li>
        <?php endif; ?>
    </ul>
  </div>
</div>
</div>

                                   <!--------- logo----------->
                                    
<section class="bund">
   <div class="col-md-3 col-sm-6">
      <?php if (get_field('png_logo')) : ?>
         <div class="footer-info-single">
           <ul>
             <?php $image = get_field("png_logo") ?> 
               <img src="<?php echo $image["sizes"]["thumbnail"] ?>" alt="<?php echo $image["alt"] ?>">
           </ul>
        </div>
     </div>
<?php endif; ?>

                                     <!--------- Firma info----------->
<div class="col-md-3 col-sm-6">
   <div class="footer-info-single">
  <h2 class="title">Just hanging</h2>
  <ul class="list-unstyled">
 
   <?php if ( get_field('firma_navn' ) ): ?> 
    <p><?php echo esc_html( get_field('firma_navn') ); ?></p>
    <?php endif; ?>
    
        
             <?php if ( get_field('adresse_felt' ) ): ?> 
               <p><?php echo esc_html( get_field('adresse_felt') ); ?></p>
             <?php endif; ?>

             <?php if ( get_field('postnr_by' ) ): ?> 
               <p><?php echo esc_html( get_field('postnr_by') ); ?></p>
             <?php endif; ?>

             <?php if ( get_field('cvr_nr' ) ): ?> 
               <p> CVR nr.:  <?php echo esc_html( get_field('cvr_nr') ); ?> </p>
             <?php endif; ?>
        </ul>
       </div>
      </div>

                                <!--------- kontakt---------->
  <div class="col-md-3 col-sm-6">
        <div class="footer-info-single">
          <h2 class="title">Kontakt info</h2>
            <ul class="list-unstyled">
                <?php if ( get_field('kontakt_nummer' ) ): ?> 
                    <p>Telefon: <?php echo esc_html( get_field('kontakt_nummer') ); ?> </p>
                <?php endif; ?>
            <?php if ( get_field('firma_mail' ) ): ?> 
        <p>Mail: <?php echo esc_html( get_field('firma_mail') ); ?> </p>
      <?php endif; ?>
    </ul>
  </div>
</div>

                                  <!--------- om os---------->

<div class="col-md-3 col-sm-6">
   <div class="footer-info-single">
     <h2 class="title">om os</h2>
       <p class="what-just"> 

         <?php if ( get_field('just-hanging-vision' ) ): ?> 
           <p><?php echo esc_html( get_field('just-hanging-vision') ); ?></p>
         <?php endif; ?>
       </p>
  
      </div>
    </div>
  </div>
 </div>
</section>

<section class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
        <p></p>
      </div>
    <div class="col-sm-6"></div>
   </div>
  </div>
 </section>
</footer>


</main>
</body>
<?php wp_footer()?>


<style scoped>
/* Footer */
footer.nb-footer {
    background: #222;
    border-top: 4px solid #676763; }
footer.nb-footer .about {
    margin: 0 auto;
    margin-top: 40px;
    max-width: 1170px;
    text-align: center; }
footer.nb-footer .about p {
    font-size: 13px;
    color: #999;
    margin-top: 30px; }
footer.nb-footer .about .social-media {
    margin-top: 15px; }
footer.nb-footer .about .social-media ul li a {
    display: inline-block;
    width: 45px;
    height: 45px;
    line-height: 45px;
    border-radius: 50%;
    font-size: 16px;
    color: #857866;
    border: 1px solid rgba(255, 255, 255, 0.3); }
footer.nb-footer .about .social-media ul li a:hover {
    background: #857866;
    color: #fff;
    border-color: #857866; }
footer.nb-footer .footer-info-single {
    margin-top: 30px; }
footer.nb-footer .footer-info-single .title {
    color: #aaa;
    text-transform: uppercase;
    font-size: 16px;
    border-left: 4px solid #857866;
    padding-left: 5px; }78c33
footer.nb-footer .footer-info-single ul p {
    display: block;
    color: #aaa;
    padding: 2px 0; }

footer.nb-footer .footer-info-single p {
    font-size: 10px;
    line-height: 20px;
    color: #aaa; }
footer.nb-footer .copyright {
    margin-top: 15px;
    background: #111;
    padding: 7px 0;
    color: #999; }
footer.nb-footer .copyright p {
    margin: 0;
    padding: 0; }

.p.what-just{
    font-size: 3px;
    }

.col-md-3{
 display: flex;
}
</style>