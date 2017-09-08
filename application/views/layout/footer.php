<!-- footer -->
<footer id="footerr">
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-lg-1 col-sm-1 ">

            </div>
            <div class="info992 infoxs col-md-4 col-sm-5 col-lg-2  ">
                <h4>information <i class="fa fa-info-circle" aria-hidden="true"></i> </h4>
                <hr>
                <ul>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Shipping Guide</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Send Gifts</a></li>
                    <li><a href="">International Delivery</a></li>
                </ul>
            </div>

            <div class="padEnd col-md-4 col-lg-2 col-sm-5">
                <h4>Questions <i class="fa fa-question-circle" aria-hidden="true"></i> </h4>
                <hr>
                <ul>
                    <li><a href="">Track Order</a></li>
                    <li><a href="">Exchange Policy</a></li>
                    <li><a href="">Privacy Statement</a></li>
                    <li><a href="">Warrant Policies</a></li>
                    <li><a href="">How to Pay</a></li>
                </ul>
            </div>

            <div class="medQrSm medqrmd col-xs-5 col-md-3 col-lg-2  col-sm-4 col-sm-offset-4 ">
                <h4>Join Us <i class="fa fa-users" aria-hidden="true"></i>  </h4>
                <hr>
                <ul>
                    <li><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i> <a href=""> Facebook</a></li>
                    <li><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i><a href="">Twitter</a></li>
                    <li><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i><a href="">LinkedIn Us</a></li>
                    <li><i class="fa fa-google-plus-official fa-2x" aria-hidden="true"></i><a href="">Google Plus</a></li>
                </ul>
            </div>

            <div class="medQrSm col-md-12 col-lg-5  col-sm-8 ">
                <h4>Payment  <i class="fa fa-usd" aria-hidden="true"></i>  </h4>

                <ul>
                    <img src="<?php echo base_url();?>assets/images/cod.jpg">
                    <img src="<?php echo base_url();?>assets/images/netbank.jpg">
                    <img src="<?php echo base_url();?>assets/images/epjpg.jpg">
                    <br>
                    <img src="<?php echo base_url();?>assets/images/jazz.jpg">
                    <img src="<?php echo base_url();?>assets/images/sim.jpg">
                    <img src="<?php echo base_url();?>assets/images/visa.jpg">
                </ul>

                <div class="SmDelivr xxs col-xs-12 ">
                    <br>
                    <h4>We deliver by <i class="fa fa-truck" aria-hidden="true"></i></h4>
                    <ul>
                    <img src="<?php echo base_url();?>assets/images/courr.jpg">
                    </ul>
                </div>
            </div>
            <div class="col-md-1 col-lg-2 hidden-md">
            </div>
        </div>
    </div>
    <!-- //footer -->
</footer>

    </div><!--/.container-->
     <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/slick/slick.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
    

$.noConflict();
jQuery( document ).ready(function( $ ) {
 
        $(".autoplay").slick({
        
        slidesToScroll: 1,
        autoplay: true,
        slidesToShow: 1,
        autoplaySpeed: 2000

      });
      
 
});


</script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="<?php echo base_url();?>assets/js/assets/vendor/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/css/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url();?>assets/js/assets/ie10-viewport-bug-workaround.js"></script>
    <script src="<?php echo base_url();?>assets/js/offcanvas.js"></script>
     
    <script type="text/javascript">

   

 


    $(document).ready(function() {

     
 
        $("#orderform").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                quantity: {
                    required: true
                },
                phone: {
                    required: true,
                    minlength: 11,
                    number: true
                },
                city: {
                    required: true,
                    minlength: 2
                },
                address: {
                    required: true,
                    minlength: 2
                },
                terms: {
                    required: true,
                },
                
                },

            messages: {
                name: {
                    required: "Please Enter Your Name",
                    minlength: "Please Enter Correct Length"
                },
                email: {
                    required: "Please Enter Your Email",
                    email: "Please Enter Currect Email"
                },
                quantity: {
                    required: "Please Enter Your Quanity"
                },
                phone: {
                    required: "Please Enter Your Contact Number",
                    minlength: "Please Enter atleast 11 Number",
                    number: "Enter Number in Digits"
                },
                city: {
                    required: "Please Enter Your City",
                    minlength: "Enter The Correct City"
                },
                address: {
                    required: "Please Enter Your Address",
                    minlength: "Please Enter Correct Length"
                },
                terms: {
                    required: "Please Agree That",
                },
                
            }
        });


        $("#askaquestion").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                contactno: {
                    required: true,
                    minlength: 11,
                    number: true
                },
                question: {
                    required: true,
                    minlength: 10
                },  
                },

            messages: {
                name: {
                    required: "Please Enter Your Name",
                    minlength: "Please Enter Correct Length"
                },
                email: {
                    required: "Please Enter Your Email",
                    email: "Please Enter Currect Email"
                },
                contactno: {
                    required: "Please Enter Your Contact Number",
                    minlength: "Please Enter atleast 11 Number",
                    number: "Enter Number in Digits"
                },
                question: {
                    required: "Please Enter Your Question",
                    minlength: "Please Enter Correct Length"
                },
                
                
            }
        });
});
    
  
  $(function(){
 var shrinkHeader = 200;
 $('.headerr').addClass('shrink');
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
    var wid = $(window).width();
    wid = parseInt(wid);
    if ( wid <  992){
     
      $('.headerr').addClass('shrink');

    }
    else {

      if ( scroll >= shrinkHeader ) {
           $('.headerr').removeClass('shrink');
            $(".headerrr").css('background-image', 'none');
        }
        else {
            $('.headerr').addClass('shrink');
              $('.headerrr').css('background-image', 'url("<?php echo base_url();?>assets/images/green.jpg")');
        }

    }
  });
   
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});



</script>

  </body>
</html>
