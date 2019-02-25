<?php 
$errors = '';
$myemail = 'monogram.paintersdecorators@gmail.com';//<-----Put Your email address here.
if(empty($_POST['first_name'])  || 
   empty($_POST['surname'])  || 
   empty($_POST['email']) || 
   empty($_POST['telephone_number'])  || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$first_name = $_POST['first_name']; 
$surname = $_POST['surname']; 
$email_address = $_POST['email']; 
$telephone_number = $_POST['telephone_number']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
    $to = $myemail; 
    $email_subject = "Monogram Decorators, new email from: $first_name $surname";
    $email_body = "You have received a new message. ".
    " Here are the details:\n First name: $first_name \n Surname: $surname \n Email: $email_address \n Telephone Number: $telephone_number \n \n Message: \n $message"; 
    
    $headers = "From: $myemail\n"; 
    $headers .= "Reply-To: $email_address";
    
    mail($to,$email_subject,$email_body,$headers);
    //redirect to the 'thank you' page
    header('Location: contact-form-thank-you.html');
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="initial-scale=1.0, maximum-scale=1.0" name="viewport">
	<title>We have some issues with your form</title>
	<meta content="Painters and Decorators in Edinburgh - Monogram Decorators offer high quality painter and decorator services in Edinburgh." name="description">
	<meta content="Marcin Augustyn" name="author">
	<meta content="painters, decorators, painters and decorators, edinburgh, professional, high quality, painter services, decorator services, about us." name="keywords">
	<link href="styles.css" media="screen" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="favicon.png" rel="shortcut icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
</head>
<body>
	<!--Header Section-->
	<header>
		<div class="header">
			<div id="logo">
				<a href="index.html"><img src="images/logo.jpg"></a>
			</div>
			<div class="contact-top">
				<p>Mobile: 07398159350</p>
				<p><a href="mailto:monogram.paintersdecorators@gmail.com" target="_top">Email: monogram.paintersdecorators@gmail.com</a></p>
			</div>
		</div>
		<div class="clear"></div>
		<!--Navigation-->
		<div class="navigation">
			<ul>
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="about.html">About Us</a>
				</li>
				<li>
					<a href="ourservices.html">Our Services</a>
				</li>
				<li>
					<a href="contact.html">Contact Us</a>
				</li>
			</ul>
		</div>
		<div class="clear"></div>
	</header>
	<!--Mobile menu, hidden until width is 700px or below-->
	<div class="mobile-menu">
		<div class="cnt__nav">
			<div class="navigation-mobile">
				<ul>
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="about.html">About Us</a>
					</li>
					<li>
						<a href="ourservices.html">Our Services</a>
					</li>
					<li>
						<a href="contact.html">Contact Us</a>
					</li>
				</ul>
			</div>
		</div>
		<!--Mobile menu icon-->
		<div id="cnt__nav-trigger">
			<div class="nav-trigger">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
	</div>
	<!--Big Image-->
	<div class="big-image1"><img src="images/error-img.jpg"></div>
	<!--h1 Heading-->
	<div class="heading-page">
		<h1>Ups, we have a problem!</h1>
	</div>
	<!--Erorr page section-->
	<div class="page-section">
		<p><?php
		        echo nl2br($errors);
		    ?></p>
		<p style="color:#ff7052;"><a href="contact.html">Click here to fill your form again.</a></p>
	</div>
	<!--Footer-->
	<footer>
		<div class="footer-sections">
			<!--Footer location section-->
			<div class="footer-section">
				<h3>Location</h3>
				<p>6/5 Loganlea Gardens</p>
				<p>EH7 6LH</p>
				<p>Edinburgh</p>
				<p>United Kingdom</p>
			</div>
			<!--Contact us section-->
			<div class="footer-section">
				<h3>Contact</h3>
				<p>Mobile: 07398159350</p>
				<p><a href="mailto:monogram.paintersdecorators@gmail.com" target="_top">Email: monogram.paintersdecorators@gmail.com</a></p>
			</div>
			<!--Footer follow us section-->
			<div class="footer-section">
				<h3>Follow Us</h3>
				<p><span><img src="images/facebook-icon.png"></span><span><img src="images/twitter-icon.png"></span></p>
			</div>
		</div>
		<div class="clear"></div>
		<!--Footer portfolio section-->
		<div class="portfolio">
			<p style="text-align:center;font-size:10pt;color:#fff;padding-top:25px;">Produced and Designed by:</p>
			<p style="text-align:center;"><a href="http://www.maugustyn.com" target="_blank"><img src="images/logo-portfolio-ma.jpg"></a></p>
		</div>
	</footer>
	<script>
	       $('#cnt__nav-trigger, .cnt__nav').click(function() {
	       $('.nav-trigger').toggleClass('is-open');
	       $('.cnt__nav').toggleClass('is-open');
	       });
	</script>
</body>
</html>