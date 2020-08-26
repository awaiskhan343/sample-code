<?php get_header(); ?>

             <?php 
                 if(have_posts()){
                 while(have_posts()){
                  the_post();
            ?>

<div class="container">

  <div class="row">

    <div class=" intro col-lg-12 col-md-12 col-sm-12 col-12">

<p style="text-transform:capitalize;">
<?php echo the_content(); ?>

</p>
<img id="image" src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" width="810" height="400" class="img-fluid" style="border-radius: 20px;">

</div>

</div>

</div>
                <?php }
                }
                else{
                 echo '<p> No Content found </p>';
                 }
            wp_reset_query();?>


<?php get_footer(); ?>
