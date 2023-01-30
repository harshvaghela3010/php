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
<div class="about container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-12 col-sm-12">
			<img src="images/about.jpg">
		</div>
		<div class="col-lg-6 col-md-12 col-sm-12">
			<h1>ABOUT US</h1>
			<p>The vision for our organization began 13 years ago. Our director, Eric Vasquez, moved to Pomona and began volunteering on campuses throughout PUSD from 2007-2014. Living and working in the city opened his eyes to the great need for intentional mentoring,particularly with the at-promise populations. He began to invest in young lives through mentoring across the city and began to see a transformation.<br><br><br>From 2014-2016 JU4Y was incubated under the fiscal sponsor and non-profit Inland Valley Volunteer and Resource Center (IVVRC). JU4Y was a program of IVVRC, and it was during these years that IVVRC began doing business with the district through the On-Point Program, our first pilot. We served two campuses, including Garey High School and Simons Middle School. During this time, JU4Y expanded the organization and developed our programs. In the 2016-2017 school year, JU4Y attained its non-profit status and began doing business with the district independently. Since then, JU4Y has been effective in providing long-term support and care to youth and families in urban inner cities.</p>
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