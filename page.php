<?php get_header(); ?>
<style type="text/css">
    .row .intro{
    display:block;
 background: linear-gradient(to bottom right,#FFBF55,#FFF); /* Standard syntax */
 
 
    color:#000;
    border:#F93 solid thin;
    border-radius:20px;
                 box-shadow: 3px  5px 10px #FF9966;

    padding-top:20px;
    padding-bottom:20px;
    padding-left:50px;
    padding-right:50px;
    margin-top:18px;
    margin-bottom:10px;
    }
    .tbrow{
    
    color:#000;
    font-size:24px;
    border-bottom:#FFF solid thin;
    font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
    }   
</style>

             <?php 
                 if(have_posts()){
                 while(have_posts()){
                  the_post();
            ?>

<div class="container">

  <div class="row">

    <div class=" intro col-lg-12 col-md-12 col-sm-12 col-12">

<?php echo the_content(); ?>

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
