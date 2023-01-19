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

<!-- <div class="chat-popup" id="myForm">
  <form action="#" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div> -->
<section >
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="postcontent nobottommargin">
				<h4 id="queryh4">Let's Discuss</h4>
				
				<h5 style="font-size: 16px;">Please fill in the form below and we will get in touch with you shortly.</h5>
				<div class="form-widget">
				<div class="form-result"></div>
					<form class="nobottommargin" id="cform" name="cform" action="" method="post">
						<div class="form-process"></div>
						<div class="col_one_third">
							<label id = "enqfrmfireld" for="contactform-name">Name <small>*</small></label>
							<input type="text" id="username" name="username" value="" class="required sm-form-control formdesgn" required/>
						</div>
						<div class="col_one_third">
							<label id = "enqfrmfireld" for="contactform-email">Email <small>*</small></label>
							<input type="email" id="email" name="email" value="" class="required email sm-form-control formdesgn" required/>
						</div>
						<div class="col_one_third col_last">
							<label id = "enqfrmfireld" for="contactform-phone">Phone</label>
							<input type="text" id="phone" name="phone" value="" class="required sm-form-control formdesgn" required/>
						</div>
						<div class="clear"></div>
						<div class="col_two_third">
							<label id = "enqfrmfireld" for="contactform-subject">Subject <small>*</small></label>
							<input type="text" id="subject" name="subject" value="" class="required sm-form-control formdesgn" required/>
						</div>
						<div class="clear"></div>
						<div class="col_full">
							<label id = "enqfrmfireld" for="contactform-message">Message <small>*</small></label>
							<textarea class="required sm-form-control formdesgn" id="message" name="message" rows="6" cols="30" required></textarea>
						</div>
						<div class="col_full">
							<button class="button button-3d nomargin" type="submit" id="submit" name="submit" value="submit">Send Message</button>
						</div>
						<input type="checkbox" name="" value="GDPR" checked>&nbsp;
							I would like to receive relevant updates from Expleo via e-mail and agree to commercial processing of my data.GDPR Opt In<br>
						<input type="checkbox" name="" value="">&nbsp;I accept the Data Protection Policy.*<br>
							You can revoke your privacy consent and stop receiving our updates at any time by notifying us via all known communication channels. For more information click here.
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="line"></div>
<!-- <section id="content" style="width: 50% !important;height: auto;">
	<img src="<?php echo base_url();?>assets/images/eloi_logo.png">
</section> -->
<footer class="footer">
	<div class="container bottom_border">
		<div class="row">
			<div class=" col-sm-4 col-md col-sm-4  col-12 col">
			<h5 class="headin5_amrc col_white_amrc pt2" style="color: #49a2d1;font-size: 22px;">Eloi Engineering Services</h5>
			<!--headin5_amrc-->
			<p class="mb10">A leader in Product lifecycle Management (PLM) Solutions, ELOI’s solutions span the entire product lifecycle from concept to implementation and retirement, enabling customers enhance productivity, raise process efficiencies and reduce time to market.</p>
			<!-- <p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
			<p><i class="fa fa-phone"></i>  +91-9999878398  </p>
			<p><i class="fa fa fa-envelope"></i> info@example.com  </p> -->


			</div>


			<div class=" col-sm-4 col-md  col-6 col">
				<h5 class="headin5_amrc col_white_amrc pt2" style="color: #49a2d1;font-size: 22px;">Our Expertise</h5>
				<!--headin5_amrc-->
				<ul class="footer_ul_amrc">
					<li><a href="#">PLM Solutions</a></li>
					<li><a href="#">ERP Solutions</a></li>
					<li><a href="#">Bespoke IT Solutions</a></li>
					<li><a href="#">Product Engineering</a></li>
					<li><a href="#">Manufacturing Automation's</a></li>
				</ul>
			<!--footer_ul_amrc ends here-->
			</div>


			<div class=" col-sm-4 col-md  col-6 col">
				<h5 class="headin5_amrc col_white_amrc pt2" style="color: #49a2d1;font-size: 22px;">Insights</h5>
				<!--headin5_amrc-->
				<ul class="footer_ul_amrc">
					<li><a href="#">Defence & Aerospace</a></li>
					<li><a href="#">Automotives</a></li>
					<li><a href="#">Healthcare</a></li>
					<li><a href="#">Consumer Electronics</a></li>
					<li><a href="#">Industrial Products</a></li>
					<li><a href="#">Energy</a></li>
				</ul>
			<!--footer_ul_amrc ends here-->
			</div>


			<div class=" col-sm-4 col-md  col-12 col">
				<h5 class="headin5_amrc col_white_amrc pt2" style="color: #49a2d1;font-size: 22px;">Contact Us</h5>
				<!--headin5_amrc ends here-->

				<ul class="footer_ul2_amrc">
					<h5 class="headin5_amrc col_white_amrc " style="color:#ccc">Headquarters</h5>
					<li class="col_white_amrc" style="color:#ccc">2-4 Dalkeith Street, Barrow-In-Furness<br>
					Cumbria,  England,LA141SP,UK<br></li>
					<li><p><i class="fa fa-phone"></i>  +44 787 650 0946  </p>
					<p><i class="fa fa fa-envelope"></i> info@eloiconsulting.com  </p></li>
				</ul>
			<!--footer_ul2_amrc ends here-->
			</div>
		</div>
	</div>


	<div class="container">
	
	<!--foote_bottom_ul_amrc ends here-->
	<p class="text-center">Copyright @2014 | Designed With by <a href="#">Eloi Engineering & Technology Services</a></p>

	<ul class="social_footer_ul">
	<li><a href="https://www.facebook.com/EloiConsulting/"><i class="fa fa-facebook-f"></i></a></li>
	<li><a href="https://mobile.twitter.com/consultingeloi"><i class="fa fa-twitter"></i></a></li>
	<li><a href="https://in.linkedin.com/company/eloi-consulting-ltd"><i class="fa fa-linkedin"></i></a></li>
	<!-- <li><a href="#"><i class="fa fa-instagram"></i></a></li> -->
	</ul>
	<!--social_footer_ul ends here-->
	</div>

</footer>

<div id="gotoTop" class="icon-angle-up"></div>



<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins.js"></script>
<script src="<?php echo base_url();?>assets/dist/jquery.flipster.min.js"></script>

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
<script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js"></script>
<script>window.modernizr || document.write('<script src="<?php echo base_url();?>assets/carosel/lib/modernizr/modernizr-custom.js"><\/script>')</script>
	<script src="<?php echo base_url();?>assets/carosel/js/mislider.js"></script>
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