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
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
	<!-- bootstrap link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- for animation -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
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
<div class="container teacher">
	<div class="row">
		<h1>MEET OUR TEACHERS</h1>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<img src="images/mot1.jpg"  height="550px" width="90%">
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mt-2">
				<img src="images/review1.jpg" height="auto" width="250px">
				<img src="images/review2.jpg" height="auto" width="250px">
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<img src="images/review3.jpg" height="auto" width="250px">
				<img src="images/review4.jpg" height="auto" width="250px">
			</div>
	</div>
</div>
<!-- teacher end -->
<footer class="container-fluid mt-5">
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
