<?php
session_start();
?>
<html>
<head>
<?php
	
	if(!isset($_SESSION["sess_user"]))
		header("location: login.html");
?>
<title>BackPacker.in</title>	
	<link rel="stylesheet" type="text/css" href="custom.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

<script src="js/jquery.min.js"></script>
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<style>


   
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
	
	input[type=submit] {
			background-color: navy;
			border-color: navy;
			border-width:1px;
			border-radius:7px;
			color: white;
			padding: 16px 32px;
			text-decoration: none;
			margin: 4px 2px;
			cursor: pointer;
			transition: .5s ease;
		}

		input[type=submit]:hover{
			background-color: white;
			color:navy;
			transition: .5s ease;
		}
		
		


</style>
</head>
<body>


<img src="aboutus.png" alt="BackPacker" style="width:100%;height:650px;">
<div style="font-family:'Times New Roman', Times, serif;font-weight:bold">
<div class="top-left">
    <div id="heading">
		<ul>
		    <li><a href="index.php"><img src="logo.png" alt="BackPacker" align="left" style="width:50px;height:70px;"></a> </li>
			<h4 style="font-size: 18px;"><li><strong style="color:black; font-size:50px;">BackPacker &nbsp;</strong></li>
			<li><a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
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
<br><br>
<h2 style="font-size:18px;">
India - the five letter word is a Power, a Diversity so Strong, a Story which has been there for long! 
Times have come and gone, and the soil still is as fresh. The air still smells as fresh and the name always resounds the bells ringing in a temple! 
The sound of the morning prayer at a mosque and the melody of Gurbani at the Gurudwara.<br><center><span style="color:blue;font-size:30px;">India has it all!</span></center>
<br> To explore this magical country, we are a platform to connect with all this country has to offer.
<span style="color:blue;font-size:30px;">BackPacker</span> is an ultimate location for travel enthusiastics to explore diffrent adventures in the country.
We provide everything from choice of packages to booking inclusive of all the costs.
</h2>


<br><br><br><br>

	<table>
	<tr>		
		<th style="font-size: 100px; text-align:center;"><i class="fa fa-inr" aria-hidden="true"></i></th> 
		<th style="font-size: 100px; text-align:center;"><i class="fa fa-wifi" aria-hidden="true"></i></th>
		<th style="font-size: 100px; text-align:center;"><i class="fa fa-car" aria-hidden="true"></i></th>
	</tr>
	<tr>
		<th style="font-size: 30px; text-align:center;">Low Price Guaranteed</th>
		<th style="font-size: 30px; text-align:center;">Easy Anywhere, Anytime</th> 
		<th style="font-size: 30px; text-align:center;">HANDPICKED Tours & Activities</th>
	</tr>
	<tr>
		<th style="text-align:center;"> If loving deals is wrong, we dont want to be right.Getting a great deal makes a fantastic trip even better. 
		     <br>So naturally, we offer great deals.<br> In fact, many of our deals cant be found anywhere else.<br> 
		     And we will save you the time of trying with our low price guarantee. 
		     Now your wallet can relax like its on vacation, too.</th>
		<th style="text-align:center;">Find out of your way places without going out of your way.
		    At Backpacker its all about making things easier for you.<br> 
		    You want to pre-book your trips at home from a laptop? Youve got it. <br>
		    You want to book on the go, in your destination, from your phone or mobile device?<br> No problem. 
		    At this site you get insider access, however youd like to access it.<br>			
		<th style="text-align:center;">Customized packages for you and your family.
		    Find out of your way places without going out of your way.</th>
	</tr>
	<tr>
	    <th>
		<th><br><center><a href="des.php" class="button" ><input type="submit" value="Travel With Us" ></a></center></th> 
		<th>
	</tr>
	</table>
	
	<br><br><br>
	<footer class="footer-distributed">
	<div class="footer-left">
				<h3>BackPacker<span>.in</span></h3>
				<p class="footer-links">
					<a href="index.php">Home |</a>
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