<?php get_header(); ?>

             <?php 
                 if(have_posts()){
                 while(have_posts()){
                  the_post();
            ?>


<style type="text/css">
body {
/*   background-image: url(<?php echo get_template_directory_uri();?>/images/bigbg.png);
background-repeat: no-repeat;
background-color: #000;
 */}

 .portfolio-box {
  border: 2px solid #CCC;
  padding: 15px !important;
  -webkit-transition: background 0.7s ease;
  -moz-transition: background 0.7s ease;
  -o-transition: background 0.7s ease;
  -ms-transition: background 0.7s ease;
  transition: background 0.7s ease;
  background-color: transparent;
  margin-top: 0;
  margin-right: 2px;
  margin-bottom: 40px;
  margin-left: 0;
}

.portfolio-box:hover {
  -webkit-transition: background 0.7s ease;
  -moz-transition: background 0.7s ease;
  -o-transition: background 0.7s ease;
  -ms-transition: background 0.7s ease;
  transition: background 0.7s ease;
  background-color: white;
  border: 2px solid #BCDF54;
}
 


.btn-success{

	background-color: orange;
	color:white;
	font-size: 13px;
	border-color: white;
}
.btn-success:hover{
	background-color: #ffdd00;
	color: black;
}

#p,#aa {
	font-family: "Lucida Grande", Arial, sans-serif;
	color: #000;
}

</style>
<!-- portfolio -->

<section>

             <?php 
                 $args = array(
                  'post_type' => 'portfolio',
                  'posts_per_page' => 6,
                 );
                 $portfolio = new WP_Query($args);
                 while($portfolio->have_posts()){
                  $portfolio->the_post();
            ?>
 
     <div class="col-lg-4  col-md-4 col-sm-6 col-12">
      <div class="content-highlight portfolio-box">

        <?php the_content() ?>
       <p id="p"><?php the_title(); ?></p>
       <span id="aa"><?php the_excerpt(); ?></span>
    </div>
    </div>
          <?php }
            wp_reset_query();?>

</section>

     <!------- -->            
<!-- end portfolio -->


                <?php }
                }
                else{
                 echo '<p> No Content found </p>';
                 }
            wp_reset_query();?>


<?php get_footer(); ?>
