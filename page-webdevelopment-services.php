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
@media (min-width: 992px) {

  .card{
height:100%;
width: 260px;
}
.card img{
margin-left: 70px;
}
}

.card-title{
  font-size: 24px;
  text-align: center;
}
.card-text{
  font-size: 19px;
  text-align: center;
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

<div class="row">  

               <?php 
                 $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 4,
                 );
                 $blogposts = new WP_Query($args);
                 while($blogposts->have_posts()){
                  $blogposts->the_post();
            ?>

  <div  class="col-lg-3 col-md-3 col-sm-6 col-12 col-xl-3">
           <div class="card">
<img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" width="80" height="80" class="img-fluid">
      <div class="card-body">
    <h4 class="card-title"><?php the_title(); ?></h4>
    <p class="card-text"><?php the_content(); ?></p>
    </div>
    </div>
    </div>
          <?php }
            wp_reset_query();?>

</div>
<br>

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
