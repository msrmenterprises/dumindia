<!-- copyright div starts here -->
	<div class="row" id="buckyroberts_dum_copyright">
		<div class="col-sm-12">
			<ul>
				<li><a href="https://www.facebook.com/Distribution-Utility-Meet-DUM-1203351576478554/" target="_blank"><img src="images/k_icon1.png"></a></li>
				<li><a href="https://twitter.com/DUM_India" target="_blank"><img src="images/k_icon2.png"></a></li>
				<li><a href="https://www.linkedin.com/company/28480899"><img src="images/iconfinder_linke.png"></a></li>
				<!-- 
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li> -->
			</ul>
			<div class="buckyroberts_dum_copyright_text">
				<h4>Copyright © 2018. All Rights Reserved</h4>
				<h5>Terms and Conditions</h5>
			</div>
			
		</div>
	</div>
<!-- copyright div ends here -->


<!-- download brochure -->
<div class="k_fixed_bro">
    <a href="http://dumindia.in/dumpdf/DUM2019Brochure03.10.2019.pdf" target="_blank"><img src="images/brochure-download-icon.png" alt=""></a>
</div>
<!-- download brochure -->


<!-- social links -->
 <div class="k_fixed_social k_icons_header social-width head-vin-icon-web">
          <ul>
            <li class="f1"><a href="https://www.facebook.com/Distribution-Utility-Meet-DUM-1203351576478554/" target="_blank"><img src="images/fb.png"></a></li>
            <li class="f2"><a href="https://twitter.com/DUM_India" target="_blank"><img src="images/tw.png"></a></li>
			<li><a href="https://www.linkedin.com/company/28480899/" target="_blank"><img src="images/LinkedIn22.png"></a></li>
        <!--<li><a href=""><img src="images/k_icon3.jpg"></a></li>
        <li><a href=""><img src="images/k_icon4.jpg"></a></li>-->
      </ul>
    </div>
<!-- social links -->

<!-- modal for location starts-->

  <!-- Modal -->
  <div class=" modal fade" id="myModal" role="dialog">
    <div class="k_map_dialoge modal-dialog">
    
      <!-- Modal content-->
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.459181108968!2d72.81726711490069!3d19.04353848710646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c945f2fb1149%3A0xa2ba742a39963b31!2sTaj+Lands+End%2C+Mumbai!5e0!3m2!1sen!2sin!4v1535631654529" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
 <!-- download brochure ends here --> 

</div>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script type='text/javascript' src='unitegallery/js/jquery-11.0.min.js'></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script src="js/pgwslider.js"></script>
<script>
$(document).ready(function() {
    $('.pgwSlider').pgwSlider();
});
</script>


  <script src="js/flipclock.js"></script>
	 <!--font awesome js-->
    <script src="https://use.fontawesome.com/505ad70894.js"></script>	
	<script src="js/script.js"></script>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>



<script type='text/javascript' src='unitegallery/js/unitegallery.min.js'></script>  
<script type='text/javascript' src='unitegallery/themes/tiles/ug-theme-tiles.js'></script>

<script type="text/javascript">
jQuery(document).ready(function()
{
  jQuery("#gallery").unitegallery();
}); 
</script>
	<script type="text/javascript" src="js/stellarnav.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			jQuery('.stellarnav').stellarNav({
				theme: 'light'
			});
		});
	</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<script>
		/* --------------------------
 * GLOBAL VARS
 * -------------------------- */
// The date you want to count down to
var targetDate = new Date("2017/11/29 10:00:00");   

// Other date related variables
var days;
var hrs;
var min;
var sec;

/* --------------------------
 * ON DOCUMENT LOAD
 * -------------------------- */
$(function() {
   // Calculate time until launch date
   timeToLaunch();
  // Transition the current countdown from 0 
  numberTransition('#days .number', days, 1000, 'easeOutQuad');
  numberTransition('#hours .number', hrs, 1000, 'easeOutQuad');
  numberTransition('#minutes .number', min, 1000, 'easeOutQuad');
  numberTransition('#seconds .number', sec, 1000, 'easeOutQuad');
  // Begin Countdown
  setTimeout(countDownTimer,1001);
});

/* --------------------------
 * FIGURE OUT THE AMOUNT OF 
   TIME LEFT BEFORE LAUNCH
 * -------------------------- */
function timeToLaunch(){
    // Get the current date
    var currentDate = new Date();

    // Find the difference between dates
    var diff = (currentDate - targetDate)/1000;
    var diff = Math.abs(Math.floor(diff));  

    // Check number of days until target
    days = Math.floor(diff/(24*60*60));
    sec = diff - days * 24*60*60;

    // Check number of hours until target
    hrs = Math.floor(sec/(60*60));
    sec = sec - hrs * 60*60;

    // Check number of minutes until target
    min = Math.floor(sec/(60));
    sec = sec - min * 60;
}

/* --------------------------
 * DISPLAY THE CURRENT 
   COUNT TO LAUNCH
 * -------------------------- */
function countDownTimer(){ 
    
    // Figure out the time to launch
    timeToLaunch();
    
    // Write to countdown component
    $( "#days .number" ).text(days);
    $( "#hours .number" ).text(hrs);
    $( "#minutes .number" ).text(min);
    $( "#seconds .number" ).text(sec);
    
    // Repeat the check every second
    setTimeout(countDownTimer,1000);
}

/* --------------------------
 * TRANSITION NUMBERS FROM 0
   TO CURRENT TIME UNTIL LAUNCH
 * -------------------------- */
function numberTransition(id, endPoint, transitionDuration, transitionEase){
  // Transition numbers from 0 to the final number
  $({numberCount: $(id).text()}).animate({numberCount: endPoint}, {
      duration: transitionDuration,
      easing:transitionEase,
      step: function() {
        $(id).text(Math.floor(this.numberCount));
      },
      complete: function() {
        $(id).text(this.numberCount);
      }
   }); 
};
	</script>

	<script type="text/javascript">
		var clock;
		
		$(document).ready(function() {
			var clock;

			clock = $('.clock').FlipClock({
		        clockFace: 'DailyCounter',
		        autoStart: false,
		        callbacks: {
		        	stop: function() {
		        		$('.message').html('The clock has stopped!')
		        	}
		        }
		    });
				    
		    clock.setTime(1199980);
		    clock.setCountdown(true);
		    clock.start();

		});
	</script>



<script>
 $(document).ready(function(){
     $('[data-toggle="popover"]').popover();   
 });
 </script>

<!--    <script src="js/jquery.marquee.min.js"></script>

 <script>
  $('.marquee').marquee({
      //speed in milliseconds of the marquee
      duration: 9000,
      //gap in pixels between the tickers
      gap: 50,
      //time in milliseconds before the marquee will start animating
      delayBeforeStart: 0,
      //'left' or 'right'
      direction: 'left',
      //true or false - should the marquee be duplicated to show an effect of continues flow
      duplicated: true,
      pauseOnHover: true
  });
</script> -->

<style>
.marquee 
{
    width: 100%;
    overflow: hidden;
/*    border: 1px solid #ccc;
    background: #ccc;*/
  }
</style>

</body>
</html>