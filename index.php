<?php
session_start();
?>
<html>
<?php
	
	if(!isset($_SESSION["sess_user"]))
		header("location: login.html");
?>
<head>
<title>BackPacker.in</title>	
	<link rel="stylesheet" type="text/css" href="custom.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

<script src="js/jquery.min.js"></script>
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<style>


	
.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);}
	
h1{
	color: white;
    font-size: 49px;
	font-family: Copperplate, "Copperplate Gothic Light", fantasy;}
   
   
ul{ 
    width: 100%;
	list-style-type: none;
	position: relative;
	top: 0px;
    margin: 0;
    padding: 10px;
    overflow: hidden;
    background: rgba(255,255,255,0.02);
	font-size: 15px;}
	
.footer-distributed{
	background-color: #DD99FF;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 55px 50px;
	bottom: 0;}

input[type=submit] {
	background-color: navy;
	color: white;
	padding: 16px 32px;
	text-decoration: none;
	margin: 4px 2px;
	cursor: pointer;
	transition: .5s ease;}
		
input[type=submit]:hover{
	background-color: white;
	color:navy;
	transition: .5s ease;
	font-weight: bold;}
</style>
</head>
<body>
<img src="backpackers.jpg" alt="BackPacker" style="width:100%;height:650px;">
<div style="font-family:'Times New Roman', Times, serif;font-weight:bold">
<div class="top-left">
    <div id="heading">
		<ul>
		    <li><a href="home.php"><img src="logo.png" alt="BackPacker" align="left" style="width:50px;height:70px;"></a> </li>
			<h4 style="font-size: 18px;"><li><strong style="color:black; font-size:50px;">BackPacker &nbsp;</strong></li>
			<li><a href="home.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
			<li><a href="des.php">Destinations</a></li>
			<li><a href="contactus.php">Contact Us</a></li>
			<li><a href="aboutus.php">About Us</a></li>
			<li><a href="reviewsl.php">Reviews</a></li>
			<li><a href="history.php">History</a></li>
			<li><a href="logout.php">Log Out</a></li>
			</h4>
		</ul>
    </div>
</div>
</div>
<center>
 <div class="centered">
    <h1>"Don't call it a DREAM, <br>Call it a PLAN"</h1>
</div>
	<form action="search1.php" method="post"><input type="text" placeholder="Search Tours and Activities" name="s" style="width:45%;height:50px;font-size:25px;position:absolute;top:375px;left:306px;"></input><input type="submit" style="position:absolute;top:371.5px;left:910px;"></input></form>
	
</center>


	<center>
	<i><h2 style="font-family:Georgia, Garamond, Palatino, serif">You can FLY, RUN & SWIM</h2></i>
	<br><br>
	<table cellspacing="40">
	<tr>
		<th>Air Based Sports</th>
		<th style="color:forestgreen">Land Based Sports</th> 
		<th style="color:#2ABAFD;">Water Based Sports</th>
	</tr>
	<tr>
		<th><a href="air.php"><img src="air.png"></a></th>
		<th><a href="land.php"><img src="land.png"></a></th> 
		<th><a href="water.php"><img src="water.png"></a></th>
	</tr>
	<tr>
		<th>Paragliding,Sky Diving and more..</th>
		<th style="color:forestgreen">Trekking,Snowboarding and more..</th> 
		<th style="color:#2ABAFD;">Scuba Diving,kite Surfing and more..</th>
	</tr>
	</table>
	</center>
	
	

	<br><br>
	<center>
	<div  class="section" id="section-3">
<div id="portfolio" class="portfolio">
   <div class="top-tours-head text-center">
		  <h3>Gallery</h3>
		  <span></span><img src="images/star.png" alt=""><span></span>
		 	<center>
		  </div>
	      <ul id="filters" class="clearfix wow bounceIn" data-wow-delay="0.4s">
			<li><span class="filter active" data-filter="app card icon logo fun">ALL</span></li>
			<li><span class="filter" data-filter="app">Local Tours</span></li>
			<li><span class="filter" data-filter="icon">Short Date Tour</span></li>
			<li><span class="filter" data-filter="fun">Long Date Tour</span></li>
	        </ul>
				</center>
</center>
	     <div id="portfoliolist">
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="rajasthan.php" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t1.jpg" class="img-responsive" alt=""/></a>
							</div>
					</div>				
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="manali.php" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t2.jpg" class="img-responsive" alt=""/></a>
                             </div>
					</div>		
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="maharashtra.php" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t3.jpg" class="img-responsive" alt=""/></a>
							
					</div>
					</div>				
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="meghalaya.php" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t4.jpg" class="img-responsive" alt=""/></a>
							 
						</div>
					</div>	
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="andaman.php" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t5.jpg" class="img-responsive" alt=""/></a>
							 
						</div>
					</div>			
					<div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="ooty.php" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t6.jpg" class="img-responsive" alt=""/></a>
							
						</div>
			      </div>
				  <div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="goa.php" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/t7.jpg" class="img-responsive" alt=""/></a>
							
						</div>
			      </div>
				  <div class="portfolio icon mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="sikkim.php" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t8.jpg" class="img-responsive" alt=""/></a>
							 
					   </div>
			      </div>
		   <div class="clearfix"></div>	
	  </div>
</div>
</div>  
<!-- Script for gallery Here-->
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
	$(function () {
		var filterList = {
		init: function () {
// MixItUp plugin
// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
				// call the hover effect
				onMixEnd: filterList.hoverEffect()
	});				
},
		hoverEffect: function () {
// Simple parallax effect
		$('#portfoliolist .portfolio').hover(
			function () {
			$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
			$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
			},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
			}		
		);				
	}
};
// Run the show!
		filterList.init();
	});	
</script>
<br><br><br>
	<footer class="footer-distributed">
	<div class="footer-left">
				<h3>BackPacker<span>.in</span></h3>
				<p class="footer-links">
					<a href="home.php">Home |</a>
					<a href="des.php">| Destinations |</a>
					<a href="logout.php">| Log Out |</a>
					<a href="aboutus.php">| About  |</a>
					<a href="contactus.php">| Contact |</a>
					<a href="reviewsl.php">| FAQ</a></p>
				<p class="footer-company-name">BackPacker.in &copy; 2017</p></div>
				
			<div class="footer-center">
				<div><i class="fa fa-map-marker"></i><p><span>21 Altmount Road</span> Mumbai, India</p></div>
				<div><i class="fa fa-phone"></i><p>+91 987 654 3210</p></div>
				<div><i class="fa fa-envelope"></i><p><a href="mailto:support@backpacker.in">support@backpacker.in</a></p></div>
			</div>
			
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About the company</span>
					BackPacker is an ultimate location for travel enthusiastics to explore diffrent adventures in the country. </p>
				<div class="footer-icons">
					<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
					<a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
					<a href="https://www.twitter.com"><i class="fa fa-youtube"></i></a>
				</div>
			</div>
	</footer>

</body>
</html>