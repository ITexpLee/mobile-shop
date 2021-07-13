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
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-2 ml-n3 filterback">
					<ul>
						<li class="filterstag">Filter Brand</li><br><br>
						<li class="filters samsungtab">Samsung <i class="fa fa-check-circle tick1"></i></li><br>
						<li class="filters ipadstab">Ipads <i class="fa fa-check-circle tick2"></i></li><br>
						<li class="filters lenovotab">Lenovo <i class="fa fa-check-circle tick3"></i></li><br>
					</ul>
				</div>
				<!--Samsung Tablets-->
					<div class="col-lg-7">
					<div class="card-deck samsungt">
						<div class="card samsungt">
							<div class="card-body text-center">
								<div class="row">
									<div class="col-lg-6">
										<img src="images/samsung%20galaxy%20tab%20s.jpg" alt="Samsung Galaxy tablet S" height="300px" width="150px">
									</div>
									<div class="col-lg-6 mt-4">
										<div class="cardtext">Samsung Galaxy Tablet S<br>
										<kbd style="background-color:crimson;font-size:15px;">4.7<i class="fa fa-star"></i></kbd> 8596 ratings
										<ul class="features">
										<li>Android 4.4 (KitKat) | Battery: 7900 mAh</li>
										<li>Voice Call (Single Sim)</li>
										<li> 8MP Primary Camera | 2 MP Front</li>
										<li>3 GB RAM | 16 GB ROM | Expandable Upto 128 GB</li>
									</ul>
									<div class="price">
									<del>Rs.59,900</del>Rs.55,000
									<button class="btn btn-danger disabled">Buy Now</button></div>
								</div>
								</div>
								</div>
							</div>
						</div>
					</div>
						<div class="card-deck samsungt">
						<div class="card samsungt">
							<div class="card-body text-center">
								<div class="row">
									<div class="col-lg-6">
										<img src="images/samsung%20galaxy%20tab%20a.jpg" alt="Samsung Galaxy tablet A" height="300px" width="200px">
									</div>
									<div class="col-lg-6 mt-4">
										<div class="cardtext">Samsung Galaxy Tablet A<br>
										<kbd style="background-color:crimson;font-size:15px;">4.5<i class="fa fa-star"></i></kbd> 1123 ratings
										<ul class="features">
										<li>16 GB ROM</li>
										<li>26.67 cm (10.5 inch) Quad HD Display</li>
										<li>Android 4.4 (KitKat) | Battery: 7900 mAh</li>
										<li>Processor: Octa Core</li>
									</ul>
									<div class="price">
									<del>Rs.51,900</del>Rs.50,000
									<button class="btn btn-danger disabled">Buy Now</button></div>
								</div>
								</div>
								</div>
							</div>
						</div>
					</div>
						<div class="card-deck samsungt">
						<div class="card samsungt">
							<div class="card-body text-center">
								<div class="row">
									<div class="col-lg-6">
										<img src="images/samsung%20galaxy%20j%20max%20tablet.jpg" alt="Samsung Galaxy JMax Tablet" height="300px" width="150px">
									</div>
									<div class="col-lg-6 mt-4">
										<div class="cardtext">Samsung Galaxy JMax Tablet<br>
										<kbd style="background-color:crimson;font-size:15px;">4.4<i class="fa fa-star"></i></kbd> 2245 ratings
										<ul class="features">
										<li>16 GB ROM</li>
										<li>4000mAH lithium-ion battery</li>
										<li>Android v5.1 Lollipop operating system </li>
										<li>8MP primary camera with geo-tagging, touch focus</li>
									</ul>
									<div class="price">
									<del>Rs.54,900</del>Rs.53,000
									<button class="btn btn-danger disabled">Buy Now</button></div>
								</div>
								</div>
								</div>
							</div>
						</div>
					</div>
						<div class="card-deck samsungt">
						<div class="card samsungt">
							<div class="card-body text-center">
								<div class="row">
									<div class="col-lg-6">
										<img src="images/samsung%20galaxy%20tab%20s6.jpg" alt="Samsung Galaxy tablet S6" height="300px" width="300px">
									</div>
									<div class="col-lg-6 mt-4">
										<div class="cardtext">Samsung Galaxy Tablet S6<br>
										<kbd style="background-color:crimson;font-size:15px;">4.8<i class="fa fa-star"></i></kbd> 2245 ratings
										<ul class="features">
										<li>Computer_cpu_manufacturer: Qualcomm</li>
										<li>All new S Pen included</li>
										<li>AMOLED display</li>
										<li>Connectivity_technology: Bluetooth;USB;Wi Fi Built In</li>
									</ul>
									<div class="price">
									<del>Rs.58,900</del>Rs.55,000
									<button class="btn btn-danger disabled">Buy Now</button></div>
								</div>
								</div>
								</div>
							</div>
						</div>
					</div>
					<!--Ipads-->
					<div class="card-deck ipadst">
						<div class="card ipadst">
							<div class="card-body text-center">
								<div class="row">
									<div class="col-lg-6">
										<img src="images/ipad%20air.jpg" alt="Ipad Air" height="300px" width="300px">
									</div>
									<div class="col-lg-6 mt-4">
										<div class="cardtext">Ipad Air<br>
										<kbd style="background-color:crimson;font-size:15px;">4.5<i class="fa fa-star"></i></kbd> 3345 ratings
										<ul class="features">
										<li>10.5-inch Retina display with True Tone and wide color</li>
										<li>A12 Bionic chip</li>
										<li>Touch ID fingerprint sensor and Apple Pay</li>
										<li>Stereo speakers</li>
									</ul>
									<div class="price">
									<del>Rs.55,900</del>Rs.53,000
									<button class="btn btn-danger disabled">Buy Now</button></div>
								</div>
								</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-deck ipadst">
						<div class="card ipadst">
							<div class="card-body text-center">
								<div class="row">
									<div class="col-lg-6">
										<img src="images/ipad%20mini.jpg" alt="Ipad Mini" height="300px" width="300px">
									</div>
									<div class="col-lg-6 mt-4">
										<div class="cardtext">Ipad Mini<br>
										<kbd style="background-color:crimson;font-size:15px;">4.5<i class="fa fa-star"></i></kbd> 2345 ratings
										<ul class="features">
										<li>7.9-inch Retina display with True Tone and wide color</li>
										<li>A12 Bionic chip</li>
										<li>8MP back camera, 7MP FaceTime HD front camera</li>
										<li>802.11ac Wi-Fi with Gigabit-class LTE cellular data</li>
									</ul>
									<div class="price">
									<del>Rs.45,477</del>Rs.44,000
									<button class="btn btn-danger disabled">Buy Now</button></div>
								</div>
								</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-deck ipadst">
						<div class="card ipadst">
							<div class="card-body text-center">
								<div class="row">
									<div class="col-lg-6">
										<img src="images/ipad%20pro.jpg" alt="Ipad Pro" height="300px" width="300px">
									</div>
									<div class="col-lg-6 mt-4">
										<div class="cardtext">Ipad Pro<br>
										<kbd style="background-color:crimson;font-size:15px;">4.7<i class="fa fa-star"></i></kbd> 3456 ratings
										<ul class="features">
										<li>A12X Bionic chip with Neural Engine</li>
										<li>802.11ac Wi-Fi</li>
										<li>Upto 10 hours battery life</li>
										<li>12-megapixel back camera, 7-megapixel TrueDepth front camera</li>
									</ul>
									<div class="price">
									<del>Rs.61,374</del>Rs.60,000
									<button class="btn btn-danger disabled">Buy Now</button></div>
								</div>
								</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-deck ipadst">
						<div class="card ipadst">
							<div class="card-body text-center">
								<div class="row">
									<div class="col-lg-6">
										<img src="images/ipad.jpg" alt="IPad" height="300px" width="300px">
									</div>
									<div class="col-lg-6 mt-4">
										<div class="cardtext">IPad<br>
										<kbd style="background-color:crimson;font-size:15px;">4.7<i class="fa fa-star"></i></kbd> 2785 ratings
										<ul class="features">
										<li>9.7-inch Retina display</li>
										<li>Touch ID fingerprint sensor</li>
										<li>802.11ac Wi-Fi with MIMO</li>
										<li>Two speaker audio</li>
									</ul>
									<div class="price">
									<del>Rs.29,900</del>Rs.27,000
									<button class="btn btn-danger disabled">Buy Now</button></div>
								</div>
								</div>
								</div>
							</div>
						</div>
					</div>
					<!--Lenovo Tablets-->
					<div class="card-deck lenovot">
						<div class="card lenovot">
							<div class="card-body text-center">
								<div class="row">
									<div class="col-lg-6">
										<img src="images/lenovo%20tab%203%207%20essential.jpg" alt="Lenovo Tab 3 7 Essential" height="300px" width="300px">
									</div>
									<div class="col-lg-6 mt-4">
										<div class="cardtext">Lenovo Tab 3 7 Essential<br>
										<kbd style="background-color:crimson;font-size:15px;">4.6<i class="fa fa-star"></i></kbd> 1125 ratings
										<ul class="features">
										<li>2MP primary camera and 0.3MP front facing camera</li>
										<li>Android v5.1 Lollipop operating system</li>
										<li>3450mAH lithium-ion battery</li>
										<li>1 year manufacturer warranty</li>
									</ul>
									<div class="price">
									<del>Rs.6,499</del>Rs.5,000
									<button class="btn btn-danger disabled">Buy Now</button></div>
								</div>
								</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-deck lenovot">
						<div class="card lenovot">
							<div class="card-body text-center">
								<div class="row">
									<div class="col-lg-6">
										<img src="images/lenovo%20tab%204%2010.jpg" alt="Lenovo Tab 4 10" height="300px" width="300px">
									</div>
									<div class="col-lg-6 mt-4">
										<div class="cardtext">Lenovo Tab 4 10<br>
										<kbd style="background-color:crimson;font-size:15px;">4.6<i class="fa fa-star"></i></kbd> 112 ratings
										<ul class="features">
										<li>5MP Auto Focus rear camera and 2MP front facing camera</li>
										<li>Android v7.0 Nougat operating system</li>
										<li>802.11ac Wi-Fi with MIMO</li>
										<li>Two speaker audio</li>
									</ul>
									<div class="price">
									<del>Rs.17,900</del>Rs.16,000
									<button class="btn btn-danger disabled">Buy Now</button></div>
								</div>
								</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-deck lenovot">
						<div class="card lenovot">
							<div class="card-body text-center">
								<div class="row">
									<div class="col-lg-6">
										<img src="images/lenovo%20tab%207.jpg" alt="Lenovo Tab 7" height="300px" width="400px">
									</div>
									<div class="col-lg-6 mt-4">
										<div class="cardtext">Lenovo Tab 7<br>
										<kbd style="background-color:crimson;font-size:15px;">4.4<i class="fa fa-star"></i></kbd> 2222 ratings
										<ul class="features">
										<li>5MP primary camera and 2MP front facing camera</li>
										<li>17.72 centimeters (6.98-inch) capacitive touchscreen</li>
										<li>3500mAH lithium-ion battery</li>
										<li>Android v7.0 Nougat operating system</li>
									</ul>
									<div class="price">
									<del>Rs.11,900</del>Rs.10,000
									<button class="btn btn-danger disabled">Buy Now</button></div>
								</div>
								</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-deck lenovot">
						<div class="card lneovot">
							<div class="card-body text-center">
								<div class="row">
									<div class="col-lg-6">
										<img src="images/lenovo%20tab3%2010.jpg" alt="Lenovo Tab 3 10" height="300px" width="300px">
									</div>
									<div class="col-lg-6 mt-4">
										<div class="cardtext">Lenovo Tab 3 10<br>
										<kbd style="background-color:crimson;font-size:15px;">4.6<i class="fa fa-star"></i></kbd> 1123 ratings
										<ul class="features">
										<li>8MP primary camera with autofocus</li>
										<li>Android v5.1 Lollipop operating system</li>
										<li>Preload software : SHAREit, SYNCit, REACHit</li>
										<li>Two speaker audio</li>
									</ul>
									<div class="price">
									<del>Rs.29,900</del>Rs.27,000
									<button class="btn btn-danger disabled">Buy Now</button></div>
								</div>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			<br><br>	
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