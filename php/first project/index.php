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
	<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

	<!-- Indicators/dots -->
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
		<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
		<button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
	</div>
	
	<!-- The slideshow/carousel -->
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="images/image1.jpg" alt="image1" class="d-block" style="width:100%; height: 700px;">
		</div>
		<div class="carousel-item">
			<img src="images/image2.jpg" alt="image2" class="d-block" style="width:100%; height: 700px;">
		</div>
		<div class="carousel-item">
			<img src="images/image3.jpg" alt="image3" class="d-block" style="width:100%; height: 700px;">
		</div>
	</div>
	
	<!-- Left and right controls/icons -->
	<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
		<span class="carousel-control-next-icon"></span>
	</button>
</div>
<!-- carousel end -->
<div class="container-fluid dashboard">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12">
			<center><i class="fa-solid fa-phone-volume"></i></center>
			<h1><a href="contact.php">Ask a Question</a> </h1>
			<h3>not sure what you need? ask our advisors</h3>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<center><i class="fa-solid fa-user-plus"></i></center>
			<h1><a href="courses.php">join today</a> </h1>
			<h3>Sign up now for free trial</h3>
		</div>
	</div>
</div>
<!-- dashboard end -->
<div class="courses container">
	<center><h1><b>OUR COURSES</b></h1></center>
	<div class="row">
		<div class="col-lg-4 col-md-6 col-sm-12">
			<a href="#"><img src="images/html.jpg"></a>
			<h1>HTML</h1>
			<p>HTML(hyper text markup language) is the standard markup language for creating Web pages.</p>
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
	</div>
	<center><button><a href="courses.php">view more</a></button></center>
</div>
<!-- courses end -->
<div class="about container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-12 col-sm-12">
			<img class="mt-3" src="images/about.jpg">
		</div>
		<div class="col-lg-6 col-md-12 col-sm-12">
			<h1>ABOUT US</h1>
			<p>The vision for our organization began 13 years ago. Our director, Eric Vasquez, moved to Pomona and began volunteering on campuses throughout PUSD from 2007-2014. Living and working in the city opened his eyes to the great need for intentional mentoring,particularly with the at-promise populations. He began to invest in young lives through mentoring across the city and began to see a transformation.<br><br><br>From 2014-2016 JU4Y was incubated under the fiscal sponsor and non-profit Inland Valley Volunteer and Resource Center (IVVRC). JU4Y was a program of IVVRC, and it was during these years that IVVRC began doing business with the district through the On-Point Program, our first pilot. We served two campuses, including Garey High School and Simons Middle School. During this time, JU4Y expanded the organization and developed our programs. In the 2016-2017 school year, JU4Y attained its non-profit status and began doing business with the district independently. Since then, JU4Y has been effective in providing long-term support and care to youth and families in urban inner cities.</p>
		</div>
	</div>
</div>
<!-- about end -->
<div class="container teacher">
	<div class="row">
		<h1>MEET OUR TEACHERS</h1>
				<div class="col-lg-6 col-md-6 col-sm-12">
						<img class="imgs" src="images/mot1.jpg"  height="550px" width="90%">
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
<div class="contact container">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12">
			<h1>CONTACT US</h1>
			<form method="POST" action="#" enctype="multipart/form-data">
				<label>roll number</label><br>
				<input type="number" name="roll_no" placeholder="enter roll no."><br><br>
				<label>Name</label><br>
				<input type="text" name="name" placeholder="enter name"><br><br>
				<label>phone number</label><br>
				<input type="number" name="phone_no" placeholder="enter phone no."><br><br>
				<label>email</label><br>
				<input type="email" name="email" placeholder="enter email"><br><br>
				<label>select course</label><br>
				<select name="course">
					<option>select</option>
					<option value="html">html</option>
					<option value="css">css</option>
					<option value="javascript">javascript</option>
					<option value="bootstrap">bootstrap</option>
					<option value="jquery">jquery</option>
					<option value="php">php</option>
					<option value="python">python</option>
					<option value="react native">react native</option>
					<option value="wordpress">wordpress</option>
				</select><br><br>
				<input class="submit" type="submit" name="submit">
			</form>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<img class="mt-3" src="images/contact.jpg" height="450px" width="100%">
		</div>
	</div>
</div>
<!-- contact end -->
<div class="studentsection">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12">
			
		</div>
	</div>
</div>
<!-- student section end -->
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
			<button><a href="contact.php">subscribe</a></button>
		</div>
	</div>
</footer>
</body>
</html>

<?php 

include 'connection.php';
if (isset($_POST['submit'])) {
	$roll_no=$_POST['roll_no'];
	$name=$_POST['name'];
	$phone_no=$_POST['phone_no'];
	$email=$_POST['email'];
	$course=$_POST['course'];

  $sql="INSERT INTO `contact`(`roll_no`, `name`, `phone_no`, `email`, `course`) VALUES ('$roll_no','$name','$phone_no','$email','$course')";
  $result= mysqli_query($conn,$sql);
  if ($result) {
  	echo 'inserted';
  } else {
  	echo 'error';
  }
  
}

?>


