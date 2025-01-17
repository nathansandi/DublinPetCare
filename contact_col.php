<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dublin PetCare</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />

	<!-- the SHIVS below are used to ensure old browser compatibility for HTML5-->
		
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"> </script>   <![endif]-->
   
		<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<img src="images/logo1.jpg" alt="logo image">
				
			</div>
		</div>
		<div id="menu" class="container">
			<ul>
				<li><a href="index.html">Homepage</a></li>				
				<li><a href="sitemap.html">Site Map</a></li>
				<li><a href="faq.html">FAQ</a></li>
				<li><a href="product.html">Products</a></li>
				<li><a href="staff.html">About us</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li class="current_page_item"><a href="pet_profile.html">Pet Profile</a></li>
			</ul>
		</div>
	</div>
	<div id="page" class="container">
		<div id="sidebar1">
			<div id="box1">
				<h2>Get Involve...</h2>
				<ul class="style1"> <!--list 1 with the name of class > style 1-->
					<li class="first">Dublin PetCare</li>
					<li>Address: Dublin 2 - O'Connel Street Number:021</li>
					<li>Open hours: 9:00am - 5:00pm</li>
					<li>Cellphone: 086086654</li>
				</ul>
				<br><br>
				<h2>Links</h2>
				<ul class="style1"> <!--list 1 with the name of class > style 1-->
					<li><a href="https://www.happycatuk.com/">Happy Cat</a></li>
					<li><a href="http://www.ie.pedigree.com/">Pedigree</a></li>
					<li><a href="https://www.whiskas.ie/">Whiskas</a></li>
				</ul>
				<br><br>
				<a href="testimonials.html"><img src="images/testimonials.jpg" width="200" height="200" alt="" /></a>
				 </div>			
		</div>
		<div id="content">
			<h2>Your Form:</h2>
				<fieldset>
                        <a href="index.html">Return to the home page</a><br><br>
                        Welcome <?php echo $_GET["fname"];?>!<br>
                         <?php echo $_GET["lname"];?>.<br>
                        E-mail: <?php echo $_GET["email"];?>.<br>
						Comments: <?php echo $_GET["coments"];?>.<br>
                   
			
				</fieldset>
			</div>
		<div id="sidebar2">
			<div>
				<h2> Animal Welfare Award 2013</h2>
				<ul class="style2">
					<li class="first">
						<h3>Dr Jones</h3>
						<p>He won the AWA with his project to help animals on the street with support and assistance</p>
					</li>
					<li>
						<h3>Social Networks</h3>
						<p><img src="images/face.jpg" width="40" height="40" alt="" /><img src="images/twitter.jpg" width="40" height="40" alt="" /><img src="images/gmail.jpg" width="40" height="40" alt="" /></p>
					</li>
					
				</ul>
				<a href="care.html"><img src="images/care.jpg" width="200" height="200" alt="" /></a> </div>
		</div>
	</div>
	<div id="footer">
	<p>Copyright (c) 2013. All rights reserved. Design by Nathanyel Sandi.</p>
    </div>
	
</div>

</body>
</html>