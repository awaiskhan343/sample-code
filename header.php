<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php wp_head(); ?>

<title><?php bloginfo('name')?> | <?php bloginfo('description')?></title>

<style type="text/css">
  
  body{
    padding-left: 0;
    padding-right: 0;
  }
</style>

</head>

<body>

    <div class="container-fluid" style="height: 110px;">
      
    <div class="row">
      
    <div class="col-md-4 col-lg-3 col-sm-4 col-12">
      <?php the_custom_logo()?>
   </div>
    <div class="col-md-8 col-lg-9 col-sm-8 col-12" style="margin-top:1%">
      
       <button  class="btn btn-sm btnbiz" style="background:#CCC"><a href="<?php echo site_url('/contact');?>" style="text-decoration: none; color: black">CONTACT US</a></button>
    
        <button class="btn btn-sm btnbiz mar" href="#">GROW MY BUSINESS</button>

    <span  style="font-weight:bold;padding-left:2%;float:right;color: #000">
     <img src="<?php echo get_template_directory_uri();?>/images/usa.png" class="rounded-circle" width="35" height="35">
      <img src="<?php echo get_template_directory_uri();?>/images/canada.jpg" class="rounded-circle" width="35" height="35">
   Special Offers.
   <br> 10% Discount On All Services for Canada & USA Citizens </span>
      
    </div>
  </div>
  <br>
</div>

<header class="header" id="myHeader">
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="custom-nav">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

<?php
wp_nav_menu( array(
    'theme_location'  => 'primary-menu',
    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => 'div',
    'container_class' => 'collapse navbar-collapse',
    'container_id'    => 'bs-example-navbar-collapse-1',
    'menu_class'      => 'navbar-nav ml-auto',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
) ); ?>


  </div>
</nav>
</header>

<?php if (is_front_page() || is_home()) {   
  ?>

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
   
             <?php 
                 $args = array(
                  'post_type' => 'project',
                  'posts_per_page' => 1,
                 );
                 $blogposts = new WP_Query($args);
                 while($blogposts->have_posts()){
                  $blogposts->the_post();
            ?>

    <div class="carousel-inner">
      <div class="carousel-item active">
 
      <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" id="banner" class="img-fluid" alt="Card Image">
  
         <?php the_content(); ?>        

         <?php the_excerpt(); ?>

        </div>
      </div> 


    </div>
              <?php }
            wp_reset_query();?>

  </div>
</div>

<?php } ?>