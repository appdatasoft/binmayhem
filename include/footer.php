  <footer id="footer-sec">
      <!-- Social -->
   
      
      <!-- Main Footer -->
      <section class="section-1 background-dark">
        <div class="line">
          <div class="margin">
            <!-- Collumn 1 -->
            <div class="s-12 m-12 l-4 margin-m-bottom-2x">
              <div class="line">
                <h4 class="text-uppercase text-strong">About Our Company</h4>
                <div class="margin">
                  <div class="s-12 m-12 l-4 margin-m-bottom">
                    <a class="image-hover-zoom" href="/"><img src="img/about.png" alt=""></a>
                  </div>
                  <div class="s-12 m-12 l-8 margin-m-bottom">
                    <p>Bin Mayhem is Phoenix's new and most unique retail concept!  Our prices are determined by the day...</p>
                    <a class="text-more-info text-primary-hover" href="about.php">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Collumn 2 -->
            <div class="s-12 m-12 l-4 margin-m-bottom-2x">
              <h4 class="text-uppercase text-strong">Contact Us</h4>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-placepin text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><b>Adress:</b> 4377 W Bell RD Glendale,AZ 85308, United State</p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-mail text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><a href="mailto:info@binmayhem.com" class="text-primary-hover" target="_blank"><b>E-mail:</b> info@binmayhem.com</a></p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-smartphone text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><b>Phone:</b> (602) 833-4400</p>
                </div>
              </div>
              <!--div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class=" icon-instagram_circle text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><a href="/" class="text-primary-hover"><b>Instagram</b></a></p>
                </div>
              </div-->
              <!--div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-facebook text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11">
                  <p><a href="https://www.facebook.com/BinMayhemPhoenix" class="text-primary-hover" target="_blank"><b>Facebook</b></a></p>
                </div>
              </div-->
            </div>
            
            <!-- Collumn 3 -->
            <div class="s-12 m-12 l-4">
              <!-- <h4 class="text-uppercase text-strong">Leave a Message</h4> -->
              <p>Join our VIP Coupon Club and receive a coupon text to you once a week</p>
              <!--p>CLICK SUBSCRIBE BELOW TO RECEIVE $5 OFF YOUR FIRST PURCHASE FOR 4 OR MORE ITEMS</p-->
                 <form method="post"  id="Subscribe_form" class="padding-t">
                  <div class="form-group d-flex">
                    <p class="" id="msg"></p>
                   <!--  <div class="mcwidget-embed" data-widget-id="11718595" data-widget-payload="binlife"></div> -->
                    <input type="Number" class="form-control email" name="email" id="email" placeholder="Enter your Mobile Number here*" required >
                     <input type="hidden" class="form-control" name="access_token" value="<?php echo $_SESSION['access_token'];?>" /> 
                    <input type="submit" class="btn btn-primary text-white px-4 send_email" id="sub_btn" value="Subscribe Now">
                  </div>
                </form>
               <!-- Begin Mailchimp Signup Form -->
<!--div id="mc_embed_signup">
<form action="https://binmayhem.us17.list-manage.com/subscribe/post?u=62d32820be1409ee7e355e8b9&amp;id=4068f1e3d3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate customform" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
<div class="mc-field-group">
	<label for="mce-EMAIL">Phone Number  <span class="asterisk">*</span>
</label>
	<input type="text" value="" name="EMAIL" class="required email" id="mce-EMAIL" style="background:white;">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <!--div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_62d32820be1409ee7e355e8b9_4068f1e3d3" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" style="background:#38acc7;"></div>
    </div>
</form>
</div-->

<!--End mc_embed_signup-->
               <!--  <p class="" id="msg"></p> -->
            </div>
          </div>
        </div>
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      
      <!-- Bottom Footer -->
      <section class="padding background-dark">
        <div class="line">
          <!-- <div class="s-12 l-6">
            <p class="text-size-12">Copyright 2019, Vision Design - graphic zoo</p>
            <p class="text-size-12">All images have been purchased from Bigstock. Do not use the images in your website.</p>
          </div>
          <div class="s-12 l-6">
            <a class="right text-size-12" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding<br> by Responsee Team</a>
          </div> -->
        </div>
      </section>
    </footer> 
    <script type="text/javascript" src="./js/responsee.js"></script>
    <script type="text/javascript" src="./owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="./js/template-scripts.js"></script>
    <script type="text/javascript">
      $(function () {
        $('form').on('submit', function (e) {
          e.preventDefault();
          $.ajax({
            type: 'post',
            beforeSend: function(){
                $('#sub_btn').val('Loading...');
                $('#sub_btn').prop('disabled', true);
            },
            url: 'action.php',
            data: $('form').serialize(),         
            success:function(response) {
                console.log(response);
                $('#msg').html(response);
                // $('#msg').addClass('green');
                $('#msg').css('color','#ffffff');
            },
            complete: function(){
                $('#sub_btn').val('Subscribe Now');
                $('#email').val('');
                $('#sub_btn').prop('disabled', false);
            },
            error: function(response) {
                console.log(response);
                $('#msg').html(response);
                $('#msg').addClass('red');
                $('#sub_btn').prop('disabled', false);
            }
          });
          return false;
        });
      });
    </script>
    <!--script type="text/javascript">
      $(function () {
        $('form').on('submit', function (e) {
          e.preventDefault();
          $.ajax({
            type: 'post',
            beforeSend: function(){
                $('#sub_btn').val('Loading...');
                $('#sub_btn').prop('disabled', true);
            },
            url: 'action.php',
            data: $('form').serialize(),         
            success:function(response) {
                console.log(response);
                $('#msg').html(response);
                // $('#msg').addClass('green');
                $('#msg').css('color','#ffffff');
            },
            complete: function(){
                $('#sub_btn').val('Subscribe Now');
                $('#email').val('');
                $('#sub_btn').prop('disabled', false);
            },
            error: function(response) {
                console.log(response);
                $('#msg').html(response);
                $('#msg').addClass('red');
                $('#sub_btn').prop('disabled', false);
            }
          });
          return false;
        });
      });
    </script-->