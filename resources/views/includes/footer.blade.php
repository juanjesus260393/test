  <!-- DIVCONTAINER -->
           <div class="footer-container">
           <!-- Options -->
            <div class="footer-option1">
                  <!-- logo footer -->
                 <img src="./img/Home/logo.png" class="header-footer"> 
                 <!-- /logo footer-->
                
                 <!-- contact-->
                <div class="divpowerby">
                <label class="lblfooter2">POWERED BY OCA LAW FIRM</label>
                <br>    
                </br>
                <label class="lblfooter2">FOR LATIN AMERICA</label>
                <br>    
                </br>
                <label class="lblfooter2">Copyright 2013</label>
                <br>    
                </br>
                <label class="lblfooter2">ETICA Y CUMPLIMIENTO</label>
                <br>    
                </br>
                <label class="lblfooter2">All right reserved</label>     
                </div>
                <!-- /contact -->
            </div>
               
            <div class="footer-option2">
            <!-- numbercontact -->
                <div class="divspeak">
                    <label>SPEAK UP SYSTEM FOR CITELUM Mexico&copy;</label>
                </div>
                <!-- /numbercontact -->
                <!-- email-->
                <div class="divadvice">
                   <label>Aviso de privacidad</label>
                </div>
                <!-- /email -->
            </div>   
            <!-- /Options -->
        </div> 
    <!-- / DIVCONTAINER --> 
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>


<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

<script src="js/responsiveslides.min.js"></script>
        <script>
                $(function () {
                    $("#slider").responsiveSlides({
                        auto: true,
                        pager: true,
                        nav: true,
                        speed: 1000,
                        namespace: "callbacks",
                        before: function () {
                            $('.events').append("<li>before event fired.</li>");
                        },
                        after: function () {
                            $('.events').append("<li>after event fired.</li>");
                        }
                    });
                });
            </script>
        
        <!--search-bar-->
        <script src="js/main.js"></script>  
<!--//search-bar-->

<script defer src="js/jquery.flexslider.js"></script>
<!--Start-slider-script-->
        <script type="text/javascript">
        
        $(window).load(function(){
          $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
              $('body').removeClass('loading');
            }
          });
        });
      </script>
<!--End-slider-script-->


<!-- start-smooth-scrolling -->

<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smooth-scrolling -->
<!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>
<!-- //here ends scrolling icon -->

    <!-- Lightbox -->
    <script src="js/simpleLightbox.js"></script>
<!-- //Lightbox -->

<script src="js/jquery.vide.min.js"></script>