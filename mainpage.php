<?php
	$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $nameErr = "Name is required";
    alert($nameErr);  
  } else {
    $name = test_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      alert('$nameErr');    
    }
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    alert($emailErr);  
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      alert('emailErr');    
    }
  }
   if(empty($_POST["password"])){
	  alert("Password is required");
   }

}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Infinity Mobile Shop</title>
        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <!--Google Fonts-->
		<link href='https://fonts.googleapis.com/css?family=Amatic SC|Capriola|Cedarville Cursive|Hepta Slab|Leckerli One|Sofia' rel='stylesheet'>
        <!--Font Awesome-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!--Popper Js-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!--Latest Compiled Js-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <!--Font Kit-->
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <!--Personal Css File-->
        <link href="format.css" rel="stylesheet">
        <!--Personal Script File-->
        <script src="script.js"></script>
	</head>
	<body>
		<header>
		<!--MAIN NAVBAR-->
		<nav class="navbar navbar-expand-lg bg-light navbar-light nav-bar">
		  <a class="navbar-brand" href="index.php" data-toggle="tooltip" title="Infinty Mobile Shop">
            <i class='fas fa-infinity' style="font-size:40px;color:lightgreen;"></i>
		  </a><!--Navbar Items-->
		  <ul class="navbar-nav">
			<li class="nav-item">
			  <a class="nav-link" href="mobiles.php" id="menubar">Phones</a>
			</li>
            <li class="nav-item">
			  <a class="nav-link" href="tablets.php" id="menubar">Tablets</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="topsellers.php" id="menubar">Top Sellers</a>
			</li>
          </ul>
          <ul class="navbar-nav ml-auto">
			<li class="nav-item">
			  <a class="nav-link" href="login%20or%20signup.php" id="menubar">Login/SignUp</a>
			</li>
			 <li class="nav-item">
			  <a class="nav-link" href="wishlist.html" id="menubar">Wishlist</a>
			</li>
          </ul>
       </nav>
		</header><!--Unavailable Strip-->
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 text-center" style="background-color:papayawhip;height:30px;font-size:20px;color:crimson;font-family:Capriola;">
					Sorry! We are currently unavailable for delivery.
				</div>
			</div>
		</div><!--Carousel Indicators-->
		<div id="demo" class="carousel slide" data-ride="carousel">
			  <ul class="carousel-indicators mb-n3">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				  <li data-target="#demo" data-slide-to="1"></li>
				   <li data-target="#demo" data-slide-to="2"></li>
			  </ul>
              <!--Inner Carousel-->
			  <div class="carousel-inner mx-auto">
				<div class="carousel-item active">
				  <a href="mobiles.php"><img src="images/slideshow.jpg" alt="Offers"></a>
				</div>
				<div class="carousel-item">
					<a href="tablets.php"><img src="images/slideshow2.jpg" alt="Offers"></a>
				</div>
				 <div class="carousel-item">
				  <a href="tablets.php"><img src="images/slideshow3.jpg" alt="Offers"></a>
				</div>
			  </div><!--Carousel Button-->
				  <a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				  </a>
				  <a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				  </a>
			  </div><br><br>
        <!--Explore Gallery-->
		<div class="d-flex justify-content-center">
			<div class="tags"><hr>Explore Our Gallery<hr></div></div>
			<ul class="d-flex flex-nowrap justify-content-around">
				<li>
					<a href="topsellers.php"><img src="images/showcase%20part1.jpg" alt="Showcase" height="100%" width="100%"></a>
				</li>
				<li class="ml-3 mr-2">
					<a href="topsellers.php"><img src="images/showcase2.jpg" alt="Showcase" height="100%" width="100%"></a>
				</li>
			</ul>
			<ul class="d-flex flex-nowrap justify-content-around">
				<li style="margin-top:-16px;">
					<a href="topsellers.php"><img src="images/showcase%20part2.jpg" alt="Showcase" height="100%" width="100%"></a>
				</li>
				<li class="ml-3 mr-2">
					<a href="topsellers.php"><img src="images/showcase3.jpg" alt="Showcase" height="100%" width="100%"></a>
				</li>
		</ul><br><br>
        <!--Brand Vidioes-->
		<div class="jumbotron bg-muted">
		  <div class="d-flex justify-content-center">
			<div class="tags"><hr>Videos<hr></div>
		  </div>
        <div class="d-flex flex-wrap justify-content-around">
					<iframe width="300" height="300" src="https://www.youtube.com/embed/CE43ynd5dmg" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<iframe width="300" height="300" src="https://www.youtube.com/embed/x0Kv_QRWR-I" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<iframe width="300" height="300" src="https://www.youtube.com/embed/cVEemOmHw9Y" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div><!--Contact us-->
        </div><br>
		<div class="container"><!--Contact 1-->
		  <ul class="d-flex flex-wrap qualities">
			<li class="col-lg-4">
				<i class='fas fa-sync'></i>&nbsp;Hassle Free Replacement
			</li>
			<li class="col-lg-4">
				<i class='fas fa-lock'></i>&nbsp;100% Secure Payments
			</li>
			<li class="col-lg-4">
				<i class='far fa-map'></i>&nbsp;Vast Service Network
			</li>
		  </ul>
			</div><!--contact 2-->
		<div class="jumbotron jumbotron-fluid bg-muted">
			<div class="container-fluid">
			 <div class="row">
				<div class="col-lg-3">
					<ul class="links">
						<li>SUPPORT</li>
						<a href="#"><li>User Guide</li></a>
						<a href="#"><li>Bulk Orders</li></a>
						<a href="#"><li>Shipping FAQ</li></a>
						<a href="#"><li>Warranty</li></a>
						<a href="#"><li>Customer Service</li></a>
					</ul>
				</div>
				<div class="col-lg-3">
					<ul class="links">
						<li>ABOUT US</li>
						<a href="privacy%20policy.html"><li>Privacy Policy</li></a>
						<a href="#"><li>User Agreement</li></a>
						<a href="#"><li>Replacement Policy</li></a>
					</ul>
				</div>
				<div class="col-lg-3">
					<ul class="links">
						<li>CONTACT US</li>
						<a href="#"><li>Email</li></a>
						<a href="#"><li>Careers</li></a>
					</ul>
				</div>
				<div class="col-lg-3">
					<ul class="connect">
						<li>STAY IN TOUCH</li>
						<a href="https://www.facebook.com"><li><i class='fab fa-facebook-f'></i></li></a>
						<a href="https://instagram.com"><li><i class='fab fa-instagram pl-2'></i></li></a>
						<a href="https://twitter.com"><li><i class='fab fa-twitter pl-2'></i></li></a>
						<a href="https://youtube.com"><li><i class='fab fa-youtube pl-2'></i></li></a>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>