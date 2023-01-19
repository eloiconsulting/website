<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
/* Button used to open the chat form - fixed at the bottom of the page */
/*.open-button {
  background-color: #0087c1;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;*/
/*  opacity: 0.8;*/
  /*position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}*/
.open-button {
background-color: #0087c1;
    color: white;
    padding: 12px 50px;
    border: none;
    cursor: pointer;
    /* opacity: 0.8; */
    position: fixed;
    bottom: 40px;
    right: 80px;
    width: 145px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>


<!-- <button class="open-button" onclick="openForm()">Chat</button> -->

<div class="chat-popup" id="myForm">
  <form action="#" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
<footer id="footer" class="dark" style="background-image:url('<?php echo base_url();?>assets/images/backgrounds/footerbanner2.png')">
<div class="container">

<div class="footer-widgets-wrap clearfix">
<div class="col_two_third">
<div class="col_one_third">
<div class="widget clearfix">
<!-- <img src="<?php //echo base_url();?>assets/images/Group-210-1.png" alt="" class="footer-logo"> -->
<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>
<div>
<address>
<strong>Headquarters:</strong><br>
2-4 Dalkeith Street, Barrow-In-Furness<br>
Cumbria,  England,LA141SP,UK<br>
</address>
<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 99 999 999 99<br>
<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 99 999 999 99<br>
<abbr title="Email Address"><strong>Email:</strong></abbr> <a href="#">[email&#160;protected]</a>
</div>
</div>
</div>
<div class="col_one_third">
<div class="widget widget_links clearfix " >
<h4>Menu</h4>
<ul>
<li><a href="<?php echo base_url('Homectrl/index');?>">Home</a></li>
<li><a href="<?php echo base_url('Homectrl/service');?>">Services</a></li>
<li><a href="<?php echo base_url('Homectrl/about_us');?>">About Us</a></li>
<li><a href="<?php echo base_url('Homectrl/plm_cad1');?>">Case Study</a></li>
<li><a href="<?php echo base_url('Homectrl/siemens');?>">Siemens</a></li>
<li><a href="<?php echo base_url('Homectrl/request_quote');?>">Request a Quote</a></li>
<li><a href="<?php echo base_url('Homectrl/contact_us');?>">Contact us</a></li>
</ul>
</div>
</div>
<div class="col_one_third col_last">
<div class="widget clearfix">
<div id="post-list-footer">
<div class="widget clearfix">
<!-- <img src="<?php //echo base_url();?>assets/images/Group-210-1.png" alt="" class="footer-logo"> -->
<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>
<div >
<address>
<strong>Headquarters:</strong><br>
2-4 Dalkeith Street, Barrow-In-Furness<br>
Cumbria,  England,LA141SP,UK<br>
</address>
<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 99 999 999 99<br>
<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 99 999 999 99<br>
<abbr title="Email Address"><strong>Email:</strong></abbr> <a href="" data-cfemail=""></a>
</div>
</div>

</div>
</div>
</div>
</div>
<div class="col_one_third col_last">
<div class="widget clearfix" style="margin-bottom: -20px;">
<div class="row">
<div class="col-lg-6 bottommargin-sm">
<div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
<h5 class="nobottommargin">Total Downloads</h5>
</div>
<div class="col-lg-6 bottommargin-sm">
<div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
<h5 class="nobottommargin">Clients</h5>
</div>
</div>
</div>
<div class="widget subscribe-widget clearfix">
<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
<div class="widget-subscribe-form-result"></div>
<form id="widget-subscribe-form" action="<?php echo base_url();?>Homectrl/sendmail" method="post" class="nobottommargin">
<div class="input-group divcenter">
<div class="input-group-prepend">
<div class="input-group-text"><i class="icon-email2"></i></div>
</div>
<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
<div class="input-group-append">
<button class="btn btn-success" type="submit">Subscribe</button>
</div>
</div>
</form>
</div>
<div class="widget clearfix" style="margin-bottom: -20px;">
<div class="row">
<div class="col-lg-6 clearfix bottommargin-sm">
<a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
<i class="icon-facebook"></i>
<i class="icon-facebook"></i>
</a>
<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
</div>
<div class="col-lg-6 clearfix">
<a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
<i class="icon-rss"></i>
<i class="icon-rss"></i>
</a>
<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
</div>
</div>
</div>
</div>
</div>
</div>

<div id="copyrights">
<div class="container clearfix">
<div class="col_half">
Copyrights &copy; 2014 All Rights Reserved by Eloi Consulting Pvt.Ltd<br>
<div class="copyright-links"><a href="<?php echo base_url('Homectrl/index');?>">Terms of Use</a> / <a href="<?php echo base_url('Homectrl/index');?>">Privacy Policy</a></div>
</div>
<div class="col_half col_last tright">
<div class="fright clearfix">
<a href="#" class="social-icon si-small si-borderless si-facebook">
<i class="icon-facebook"></i>
<i class="icon-facebook"></i>
</a>
<!-- <a href="#" class="social-icon si-small si-borderless si-twitter">
<i class="icon-twitter"></i>
<i class="icon-twitter"></i>
</a>
<a href="#" class="social-icon si-small si-borderless si-gplus">
<i class="icon-gplus"></i>
<i class="icon-gplus"></i>
</a>
<a href="#" class="social-icon si-small si-borderless si-pinterest">
<i class="icon-pinterest"></i>
<i class="icon-pinterest"></i>
</a>
<a href="#" class="social-icon si-small si-borderless si-vimeo">
<i class="icon-vimeo"></i>
<i class="icon-vimeo"></i>
</a>
<a href="#" class="social-icon si-small si-borderless si-github">
<i class="icon-github"></i>
<i class="icon-github"></i>
</a>
<a href="#" class="social-icon si-small si-borderless si-yahoo">
<i class="icon-yahoo"></i>
<i class="icon-yahoo"></i>
</a> -->
<a href="#" class="social-icon si-small si-borderless si-linkedin">
<i class="icon-linkedin"></i>
<i class="icon-linkedin"></i>
</a>
</div>
<div class="clear"></div>
<i class="icon-envelope2"></i> <a href="" data-cfemail="">Email ID</a> <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-999-999-9999 <span class="middot">&middot;</span> <i class="icon-skype2"></i> OnSkype
</div>
</div>
</div>
</footer>
</div>

<div id="gotoTop" class="icon-angle-up"></div>



<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins.js"></script>

<script src="<?php echo base_url();?>assets/js/functions.js"></script>

<script src="<?php echo base_url();?>assets/include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url();?>assets/include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url();?>assets/include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
<script src="<?php echo base_url();?>assets/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo base_url();?>assets/include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo base_url();?>assets/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo base_url();?>assets/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo base_url();?>assets/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo base_url();?>assets/include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo base_url();?>assets/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<script>

		var tpj=jQuery;
		var revapi31;
		tpj(document).ready(function() {
			if(tpj("#rev_slider_679_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_679_1");
			}else{
				revapi31 = tpj("#rev_slider_679_1").show().revolution({
					sliderType:"standard",
					jsFileLocation:"include/rs-plugin/js/",
					sliderLayout:"fullwidth",
					dottedOverlay:"none",
					delay:16000,
					hideThumbs:200,
					thumbWidth:100,
					thumbHeight:50,
					thumbAmount:5,
					navigation: {
	                    keyboardNavigation: "on",
	                    keyboard_direction: "horizontal",
	                    mouseScrollNavigation: "off",
	                    onHoverStop: "off",
	                    touch: {
	                        touchenabled: "on",
	                        swipe_threshold: 75,
	                        swipe_min_touches: 1,
	                        swipe_direction: "horizontal",
	                        drag_block_vertical: false
	                    },
	                    arrows: {
	                        style: "hades",
	                        enable: true,
	                        hide_onmobile: false,
	                        hide_onleave: false,
	                        tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div></div>',
	                        left: {
	                            h_align: "left",
	                            v_align: "center",
	                            h_offset: 10,
	                            v_offset: 0
	                        },
	                        right: {
	                            h_align: "right",
	                            v_align: "center",
	                            h_offset: 10,
	                            v_offset: 0
	                        }
	                    },
	                },
					responsiveLevels:[1140,1024,778,480],
					visibilityLevels:[1140,1024,778,480],
					gridwidth:[1140,1024,778,480],
					gridheight:[700,768,960,720],
					lazyType:"none",
					shadow:0,
					spinner:"off",
					stopLoop:"off",
					stopAfterLoops:-1,
					stopAtSlide:-1,
					shuffle:"off",
					autoHeight:"off",
					fullScreenAutoWidth:"off",
					fullScreenAlignForce:"off",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "0px",
					hideThumbsOnMobile:"off",
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					debugMode:false,
					fallbacks: {
						simplifyAll:"off",
						nextSlideOnWindowFocus:"off",
						disableFocusListener:false,
					}
				});
			}

            revapi31.bind("revolution.slide.onloaded",function (e) {
				setTimeout( function(){ SEMICOLON.slider.sliderParallaxDimensions(); }, 200 );
			});

			revapi31.bind("revolution.slide.onchange",function (e,data) {
				SEMICOLON.slider.revolutionSliderMenu();
			});
		});	/*ready*/
	</script>
	<script>
		$(function() {
			$( "#side-navigation" ).tabs({ show: { effect: "fade", duration: 400 } });
		});
	</script>
	<script>
			function openForm() {
			  document.getElementById("myForm").style.display = "block";
			}

			function closeForm() {
			  document.getElementById("myForm").style.display = "none";
			}
	</script>
	<script>
		$("#mydiv").load(location.href + " #mydiv");
	</script>
</body>

</html>