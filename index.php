<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link href='http://fonts.googleapis.com/css?family=Neucha' rel='stylesheet' type='text/css'>
    
    <link rel="shortcut icon" href="http://epaxman.com/favicon.png">

	<meta name="author" content="Eleanor Paxman" />
    <meta name="keywords" content="interaction design, interaction designer, web designer, graphic designer, illustrator, concept artist" />
<meta name="Description" content="I am an interaction designer. I have designed interfaces for websites, iPhone and iPad applications, software applications and interactive games, visual branding solutions,logo design, marketing materials, packaging and flash advertising." />

	<link rel='stylesheet' type='text/css' href='css/style1.css' />
	<link rel='stylesheet' type='text/css' href='css/jquery.lightbox.css' />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.lightbox.js"></script>

	<title>Interaction Design | Eleanor Paxman</title>
	
	<script type="text/javascript">
		$(document).ready(function() {
    		$('#gallery1 a').lightBox();
    		$('#gallery2 a').lightBox();
    		$('#gallery3 a').lightBox();
		});
	</script>
</head>
<body>

<div id="home">
	<div id="header">
		<div id="logo">
			epaxman
		</div>
		<div id="nav">
			<ul>
				<li><a href="#home">Home</a></li>
				<li><a href="#my_work">My Work</a></li>
				<li><a href="#contact_me">Contact Me</a></li>
			</ul>
		</div>
	</div>
	<div class="dividertop">&nbsp;</div>
	<div id="homecontent">
		<div id="homecontentpadding">
			<h1>I am an interaction designer.</h1>
			<p>I always start on paper. With a broad experience including designing interfaces for websites, iPhone and iPad applications, software and interactive games, as well as visual branding solutions from start to finish including logo design, marketing materials, packaging and flash advertising, I have also created printed materials from business cards and brochures to large-scale publications. I have illustrated for children's educational materials and storybooks, and created concept and character designs for interactive games.<br />I currently work for <a href="http://www.creativeintersection.com" class="joblink" target="_blank">Creative Intersection.</a></p>
		</div>
	</div>
</div>

<div id="bottom">
	<div id="my_work">
		<div id="work">
			<h2>My Work - click thumbnails to view gallery</h2>
			<div class="examples">
				<div id='gallery1'>
					<a href="images/tinbilly.jpg" title="June 2010: Website Design and CMS implementation for Brisbane backpackers', 			Tinbilly (Creative Intersection)">
						<img src="images/lightbox-1-1.jpg" class="thumbnail" />
					</a>
                    <a href="images/wedding.gif" title="June 2011: Website design for CompareWeddingVenues.com.au (Creative Intersection)"></a>
					<a href="images/ci.jpg" title="May 2011: Website Redesign for Creative Intersection"></a>
                    <a href="images/fg.gif" title="May 2009: Interface design and XML implementation of 'Fundamentals Games' for Origo Education"></a>
				</div>
				<h3>Web Design & Development</h3>
			</div>
			<div class="examples notfirst">
				<div id='gallery2'>
					<a href="images/gw.jpg" title="January 2009: Design of brochure and various marketing materials for Groundworks conference (Origo Education)">
						<img src="images/lightbox-2-1.jpg" class="thumbnail" />
					</a>
					<a href="images/nc.jpg" title="October 2009: Logo, branding, packaging and flash card design for 'The Number Case' (Origo Education)"></a>
                    <a href="images/cover.jpg" title="February 2009: Cover design for Origo Education's yearly catalogue"></a>
				</div>
				<h3>Graphic Design & Branding</h3>
			</div>
			<div class="examples notfirst">
				<div id='gallery3'>
					<a href="images/apartment.gif" title="March 2010: 'The Apartment' Flash game incl. concept design, illustration, animation and coding">
						<img src="images/lightbox-3-1.jpg" class="thumbnail" />
					</a>
                    <a href="images/map.png" title="July 2011: Illustration for untitled game (World Map)"></a>
					<a href="images/picture-cards.jpg" title="October 2009: Detail of flash cards from 'The Number Case' (Origo Education)"></a>
                    <a href="images/school.jpg" title="November 2010: Illustrations for school uniforms for schoolthreads.com.au (Creative Intersection)"></a>
				</div>
				<h3>Concept Design & Illustration</h3>
			</div>
            <a href="#home" class="toplinks">Back to top</a>
		</div>
		<div class="dividerbottom">&nbsp;</div>
		<div id="contact_me">
			<h2>Contact Me - send me a message</h2>
			<form id="contact" action="index.php" method="post">
				<div id="formleft">
					<div class="fieldscontainer">
						<label for="name">Name:</label>
						<input type="text" name="name" class="formfields" />
						<div class="clear"></div>
					</div>
					<div class="fieldscontainer">
						<label for="email">Email:</label>
						<input type="text" name="email" class="formfields" />
						<div class="clear"></div>
					</div>
					<div class="fieldscontainer">
						<label for="name">Subject:</label>
						<input type="text" name="subject" class="formfields" />
						<div class="clear"></div>
					</div>
				</div>
				<div id="formright">
					<div class="fieldscontainer">
						<label for="message">Message:</label>
						<textarea name="message" rows="10" cols="32" /></textarea>
					</div>
					<input type="submit" class="submitbtn" value="Send Message" />
				</div>
				<div class="clear"></div>
			</form>
        <a href="#home" class="toplinks">Back to top</a>
		</div>
		<div class="function">
		  <?php
		  if(isset($_POST['subject'])) {
			  $emailSubject = "";
			  $emailMessage = $_POST['subject'] . "\n\r" . $_POST['message'];
			  $emailFrom = $_POST['email'];
			  $emailFromName = $_POST['name'];
			  
			  $emailTo = 'e.paxman.design@gmail.com';
			  $headers = "From: ".$emailFrom;
			  
			  if (strlen($emailMessage) == 0) {
				  echo 'You have not entered a message.';
			  } else {
				  
				  if (strlen($emailFrom) > 0) {
					  $emailSubject = '*** Website Contact from: "' . $emailFromName . '" <' . $emailFrom . '>'.'***';
				  } else {
					  $emailSubject = '*** Website Contact ***';
				  }
				  
				  /* Send Email */
				 if (mail($emailTo, $emailSubject, $emailMessage, $headers)) {
					echo 'Your message has been sent!';
				 } else {
					 echo 'There was an internal error whilst sending your email.<br>';
					echo 'Please try again later.';    
				 }
			  }
			  
		  }
		  ?>
		</div>
		<div class="dividerbottom">&nbsp;</div>
	</div>
</div>

<div id="footer">
	&copy; Eleanor Paxman 2011 | Website design and development by Eleanor Paxman
</div>

