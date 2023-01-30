<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>school management system</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- for icon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- for font -->
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Mukta&family=Playfair+Display&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Chivo+Mono&family=Open+Sans&family=Raleway&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<!-- bootstrap link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<nav>
	<input type="checkbox" id="check">
	<label for="check" class="checkbtn"><i class="fa-solid fa-bars"></i></label>
	<label class="logo"><img src="images/logo.jpg"></label>
	<ul>
		<li><a href="index.php">home</a></li>
		<li><a href="courses.php">our courses</a></li>
		<li><a href="teachers.php">our teachers</a></li>
		<li><a href="contact.php">contact us</a></li>
		<li><a href="about.php">about us</a></li>
		<li><a href="login.php"><button>admin</button></a></li>
	</ul>
	</nav>
	<!-- header end -->
<div class="courses container">
<center><h1><b>OUR COURSES</b></h1></center>
	<div class="row">
		<div class="col-lg-4 col-md-6 col-sm-12">
			<a href="#"><img src="images/html.jpg"></a>
			<h1>HTML</h1>
			<p>HTML is the standard markup language for creating Web pages.</p>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<a href="#"><img src="images/css.jpg"></a>
			<h1>CSS</h1>
			<p>CSS is a stylesheet language used to describe the presentation of a document written in HTML.</p>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<a href="#"><img src="images/javascript.jpg"></a>
			<h1>JAVASCRIPT</h1>
			<p>used to create dynamic and interactive web content like applications and browsers.</p>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<a href="#"><img src="images/bootstrp.jpg"></a>
			<h1>BOOTSRAP</h1>
			<p>Bootstrap is the most popular CSS Framework for developing responsive and mobile-first websites.</p>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<a href="#"><img src="images/jquery.jpg"></a>
			<h1>JQUERY</h1>
			<p>JQuery is a lightweight, "write less, do more", JavaScript library.</p>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<a href="#"><img src="images/php.jpg"></a>
			<h1>PHP</h1>
			<p>PHP is a programming language used to script websites that are dynamic and interactive.</p>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<a href="#"><img src="images/python.jpg"></a>
			<h1>PYTHON</h1>
			<p>Python is an interpreted, object-oriented, high-level programming language with dynamic semantics.</p>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<a href="#"><img src="images/react.jpg"></a>
			<h1>REACT NATIVE</h1>
			<p>React Native combines the best parts of native development with React, a best-in-class JavaScript library for building user interfaces.</p>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<a href="#"><img src="images/wordpress.jpg"></a>
			<h1>WORDPRESS</h1>
			<p>WordPress is the simplest, most popular way to create your own website or blog.</p>
		</div>
	</div>
</div>

<footer class="container-fluid">
	<div class="row">
		<div class="col-lg-4 col-md-6 col-sm-12">
			<img src="images/logo.jpg">
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<ul>
				<h5>our courses</h5>
				<li><a href="#">html</a></li>
				<li><a href="#">css</a></li>
				<li><a href="#">javascript</a></li>
				<li><a href="#">bootstrap</a></li>
				<li><a href="#">jquery</a></li>
				<li><a href="#">php</a></li>
				<li><a href="#">python</a></li>
				<li><a href="#">react native</a></li>
				<li><a href="#">wordpress</a></li>
			</ul>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<input type="email" name="email" placeholder="enter email address"><br>
			<button><a href="contact.html">subscribe</a></button>
		</div>
	</div>
</footer>
</body>
</html>