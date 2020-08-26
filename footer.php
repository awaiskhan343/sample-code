
<style type="text/css">
  h4{
  margin-left:0%;
  margin-top:7%;
  font-weight:bold;
  }
 a{
    color:black;
    text-decoration: none;
    background-color: transparent;
 }
 a:hover {
    text-decoration: none;
    color:white;
 }
</style>
<div class="container-fluid">
<div class="row" style="background: linear-gradient(to bottom, 
#ffa84c 0%,#ff7b0d 100%);">
  
  <div class="col-lg-4">
  <h4>Echo Softwares</h4>

            <?php wp_nav_menu(array(
        'theme_location' => 'footer-menu',    
        'menu'            => 'footer-menu',
         )
        ); ?>

  </div>
    <div class="col-lg-4">
  <h4>Contact Us</h4>
  <ul id="footer">

  <li>+928767868</li>

    <li>EchosoftTec.com</li>
</ul>  
    </div>
  <div class="col-lg-4" style="margin-bottom: 5px">
      <h4>Follow Us On</h4>
      <a href="https://en-gb.facebook.com/login/" class="fab fa-facebook"></a>
    <a href="https://twitter.com/login" class="fab fa-twitter"></a>    
    <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
    <a href="#"><i class="fab fa-github"></i></a>
   </div>
  </div>
  
  
  <div class="row" style="background-color:#595858; color:#DBD9D9;">
                <div class="col-lg-12">
                    <b><p class="copyright" style="margin-top: 2%">Copyright &copy; 2019 Echo Software Technologies| All Rights Reserved | <a style="text-decoration: none; color:#DBD9D9;" href="#">Privacy Policy</a> | <a style="color:#DBD9D9; text-decoration: none;" href="#">Terms of Service</a></p></b>
                </div>
            </div>

</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

  <?php wp_footer(); ?>

<script>
new WOW().init();
if ($(window).width() <= 991){ 
$(".wow").removeClass("wow");
}
</script>

<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

<style type="text/css">
  
  #sec1{
     animation-duration: 2s;
  }
  #text{
     animation-duration: 2s;
  }
  #text0{
     animation-duration: 2s;
  }
  #text1{
     animation-duration: 1.5s;
  }

  #text2{
     animation-duration: 3.5s;
  }
  #sec2{
     animation-duration: 2s;
  }
  #img{
     animation-duration: 2.5s;
     animation-timing-function: ease-in;
     animation-timing-function: ease-out;
  }

</style>

 <script type="text/javascript">
   
$(document).ready(function() {

   $(window).scroll(function() {
     
     var positiontop = $(document).scrollTop();
     console.log(positiontop);
     
     if((positiontop>700)&&(positiontop<900)){

      $('#sec1').addClass('animated flipInX');
     }

     if((positiontop>400)&&(positiontop<600)){

      $('#text').addClass('animated zoomIn');
     }    
     if((positiontop>1200)&&(positiontop<1400)){

      $('#sec2').addClass('animated flipInX');
     }
     if((positiontop>1000)&&(positiontop<1200)){

      $('#text0').addClass('animated zoomIn slow');
     }    

     if((positiontop>2200)&&(positiontop<2350)){

      $('#text2').addClass('animated flipInX slower');
     }    

     if((positiontop>1600)&&(positiontop<1800)){

      $('#text1').addClass('animated fadeInUp faster');
     }

     if((positiontop>2000)&&(positiontop<2250)){

      $('#cir1').addClass('animated rotateIn');
     }
     
     if((positiontop>2401)&&(positiontop<2600)){

      $('#sec3').addClass('animated jello delay-1s');
     }


     if((positiontop>2300)&&(positiontop<2600)){

      $('#img').addClass('animated zoomIn faster');
     }

   });
  
});

 </script> 


</body>
</html>