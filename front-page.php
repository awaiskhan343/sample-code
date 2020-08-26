<?php $page="index" ?>
<?php get_header(); ?>


    <div class="container-fluid">
    <div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-12">

    <div class="row xsslider">
      <div class="col-12">
        <img src="<?php echo get_template_directory_uri();?>/images/slider-bg.jpg" alt="" id="banner" class="img-fluid">
          <img  class="animated fadeInLeft" style="animation-delay:3.5s" id="img1" src="<?php echo get_template_directory_uri();?>/images/desktop.png" alt="">
          <img  class="animated fadeInLeft" style="animation-delay:4s" id="img2" src="<?php echo get_template_directory_uri();?>/images/tablet.png" alt=""/>
          <img  class="animated fadeInLeft" style="animation-delay:4.5s;" id="img3" src="<?php echo get_template_directory_uri();?>/images/cellphone.png" alt="" width="155" height="262"/>
          <p class="animated fadeIn slower" style="animation-delay:3.3s"><a href="contact.php"> Start today</a></p>
      </div>
      </div>

             <?php 
                 if(have_posts()){
                 while(have_posts()){
                  the_post();
            ?>

    <div class="row" style="background-color: #F2D9D9; margin-top:2px;padding-bottom: 10px;">
      <div class="col-lg-12 col-md-12 col-sm-12 col-12">

        <?php the_content(); ?>
      
      </div>
      </div>
                <?php } }
            wp_reset_query();?>

</div>
</div>
</div>


<div class="container-fluid">
    <div class="row" id="text">
      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <h2 style="text-align: center; color: #000; margin-top:4%;font-size:46px;">Web Services</h2>
     <p></p>
      </div>
      </div>

  <div class="row mypackages">      
      <section id="sec1">
  <div class="row">      
             <?php 
                 $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 6,
                 );
                 $blogposts = new WP_Query($args);
                 while($blogposts->have_posts()){
                  $blogposts->the_post();
            ?>
 
  <div  class="col-lg-2 col-md-2 col-sm-6 col-12 col-xl-2">
           <div class="card">
<img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" width="80" height="80" class="img-fluid">
      <div class="card-body">
    <h6 class="card-title"><?php the_title(); ?></h6>
    <p class="card-text"><?php echo wp_trim_words(get_the_content(), 30); ?></p>
    </div>
    </div>
    </div>
          <?php }
            wp_reset_query();?>


</div>
</section>
</div>

</div>


<div class="container-fluid">
    <div class="row" id="text0">
      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <h2 style="text-align: center; color: #000; margin-top:4%;font-size:46px;">Lead Generation Services</h2>
     <p></p>
      </div>
      </div>

  <div class="row mypackages">      
      <section id="sec2">
  <div class="row">      
  
               <?php 
                 $args = array(
                  'post_type' => 'Lead Generation',
                  'posts_per_page' => 6,
                 );
                 $leads = new WP_Query($args);
                 while($leads->have_posts()){
                  $leads->the_post();
            ?>

  <div  class="col-lg-2 col-md-2 col-sm-6 col-12 col-xl-2">
           <div class="card">
<img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" width="80" height="80" class="img-fluid">
      <div class="card-body">
    <h6 class="card-title"><?php the_title(); ?></h6>
    <p class="card-text"><?php echo wp_trim_words(get_the_content(), 30); ?></p>
    </div>
    </div>
    </div>
              <?php }
            wp_reset_query();?>

</div>
</section>
</div>

</div>
  
      
 <div class="container-fluid" style="background-color:#F0F0F0">

      <section id="text1">
    <div class="row" style="margin-bottom:5%">
      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <h2 style="text-align: center; color: #000; margin-top:4%;font-size:36px;">Web Application Development And Solutions</h2>
        <p style="text-align: center; color: #333;"></p>
      </div>
      </div>
    </section>

  <div class="row">
               <?php 
                 $args = array(
                  'post_type' => 'Web Development',
                  'posts_per_page' => 4,
                 );
                 $Web_Development = new WP_Query($args);
                 while($Web_Development->have_posts()){
                  $Web_Development->the_post();
            ?>
    <div class="col-lg-3 col-md-3 col-sm-6 col-12 col-xl-3">

    <h6 class="card-title"></h6>
    <p class="card-text"></p>

    <h5><?php the_title(); ?></h5>
    <p><?php the_excerpt(); ?></p>

     <a href="<?php the_permalink(); ?>">
       <img id="cir1" src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="Card Image">
     </a>

    <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
    </div>
              <?php }
            wp_reset_query();?>

</div>
</div>

  <div class="container">

  <div class="row" id="text2">
    
  <div class="col-lg-12 col-md-12 col-sm-12 col-12">

<h1 style="font-size:36px; margin-top:4%; margin-bottom:">Why Works with Us</h1>
</div>
</div>

      <section id="sec3">

<div class="row">

<div class="col-lg-12 col-md-12 col-sm-12 col-12">

    <section id="img">
       <img src="<?php echo get_template_directory_uri();?>/images/img-wcu.jpg" id="imag" style="border-radius:10px; box-shadow:#7FFF55" class="img-fluid">
       <img src="<?php echo get_template_directory_uri();?>/images/img-wcu.jpg" id="imag" style="border-radius:10px; box-shadow:#7FFF55" class="img-fluid">
       <img src="<?php echo get_template_directory_uri();?>/images/img-wcu.jpg" id="imag" style="border-radius:10px; box-shadow:#7FFF55" class="img-fluid">
     </section>

</div>
                 <?php 
                 $args = array(
                  'post_type' => 'Work',
                  'posts_per_page' => 5,
                 );
                 $Work = new WP_Query($args);
                 while($Work->have_posts()){
                  $Work->the_post();
            ?>


<div class="col-lg-3 col-md-3 col-sm-3 col-12">
  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" width="45" height="45">
  <h6><?php the_title(); ?> </h6>
    <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
</div>
               <?php }
            wp_reset_query();?>

 
  </div>
</section>
</div>
  <br>  
  
   <div class="col-lg-4 col-md-4 col-sm-4 col-12">
    

   </div>

<?php get_footer(); ?>
 
<!-- <script>$('.carousel').carousel()</script> -->
