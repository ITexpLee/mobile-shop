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
		</div>
		<div class="container">
				<div class="row">
				<div class="col-lg-12 text-center">
					<div class="p-2 text-secondary" style="font-size: 25px;">Register now and make the most of My Account.</div>
					<form action="mainpage.php" method="post" class="p-2">
				<input type="text" name="fname" id="fname" placeholder="Enter First Name" size="50" required><br><br>
				<input type="email" name="email" id="email" placeholder="Enter Email" size="50" required><br><br>
				<input type="password" name="password" id="password" placeholder="Choose Password" size="50" required><br><br>
				<input type="submit" class="btn btn-danger text-white" value="Sign Up" name="signup">
			</form>
			</div>
			</div>
			</div><br><br>
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