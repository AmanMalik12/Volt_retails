<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Volt Retail</title>
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
	<script src="https://kit.fontawesome.com/581bb64942.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="assets/css/navbar.css">
	<link rel="stylesheet" href="assets/css/footer.css">
	<link rel="stylesheet" href="assets/js/index.js">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Your stuff -->
	<link rel="stylesheet" href="assets/css/index.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="./carousel/css/owl.carousel.min.css">
	<link rel="stylesheet" href="./carousel/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="./carousel/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">

	<script>
		// Prevent dropdown menu from closing when click inside the form
		$(document).on("click", ".navbar-right .dropdown-menu", function(e) {
			e.stopPropagation();
		});
	</script>
</head>

<body>
	<!-- importing navbar -->
	<?php
	include "components/Navbar.php";
	?>


	<div id="slider">
		<div class="slides">

			<!-- First slide -->
			<div class="slider">
				<div class="legend"></div>
				<div class="content">
					<div class="content-txt">
						<h1> Mushy Cotton Socks </h1>
						<h2> Carted form Softest combed cotton Fibers<br>Our Custom need Quality, we provide Quality</h2>
					</div>
				</div>
				<div class="images">
					<img src="./images/index/3.3.png">
				</div>
			</div>

			<!-- Second slide -->
			<div class="slider">
				<div class="legend"></div>
				<div class="content">
					<div class="content-txt">
						<h1> About Product</h1>
						<h2> Durable Fiber<br>Primum Combined cotton<br>Assisted heel & Toe<br>Anti-Micro Fiber<br>remarkable Grip<br>Cushion & Sweat absorbing Material</h2>
					</div>
				</div>
				<div class="images">
					<img src="./images/index/4.4.png">
				</div>
			</div>

			<!-- Third slide -->
			<div class="slider">
				<div class="legend"></div>
				<div class="content">
					<div class="content-txt">
						<h1> Multipurpose Socks  </h1>
						<h2> Casual, Active wear, Formal & Atheletic Performance</h2>
					</div>
				</div>
				<div class="images">
					<img src="images/index/1.1.png">
				</div>
			</div>
			
			<!-- Fourth slide -->
			<div class="slider">
				<div class="legend"></div>
				<div class="content">
					<div class="content-txt">
						<h1> Welcome to <br><b>Volt Retail</b></h1>
						<h2> Lightning has no mercy</h2>
					</div>
				</div>
				<div class="images">
					<img src="images/index/2.2.png">
				</div>
			</div>


		</div>
	</div>


<!---Product Slider-->
<div>
	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="heading-section mb-5 pb-md-4">PRODUCTS</h2>
				</div>
				<div class="col-md-12">
					<div class="featured-carousel owl-carousel">
						<div class="item">
							<div class="work">
								<div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url('./images/work-1.jpg');">
									<a href="page.php?id=shop" class="icon d-flex align-items-center justify-content-center">
										<span class="ion-ios-search"></span>
									</a>
								</div>
								<div class="text pt-3 w-100 text-center">
									<h3><a href="page.php?id=shop">Flat High Ankle Socks</a></h3>
									<span>₹185</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="work">
								<div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(./images/work-2.jpg);">
									<a href="page.php?id=shop" class="icon d-flex align-items-center justify-content-center">
										<span class="ion-ios-search"></span>
									</a>
								</div>
								<div class="text pt-3 w-100 text-center">
									<h3><a href="page.php?id=shop">Low Cut Loafer Socks</a></h3>
									<span>₹195</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="work">
								<div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(./images/work-3.jpg);">
									<a href="page.php?id=shop" class="icon d-flex align-items-center justify-content-center">
										<span class="ion-ios-search"></span>
									</a>
								</div>
								<div class="text pt-3 w-100 text-center">
									<h3><a href="page.php?id=shop">Unisex Loafer Sock</a></h3>
									<span>₹220</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="work">
								<div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(./images/work-5.jpg);">
									<a href="page.php?id=shop" class="icon d-flex align-items-center justify-content-center">
										<span class="ion-ios-search"></span>
									</a>
								</div>
								<div class="text pt-3 w-100 text-center">
									<h3><a href="page.php?id=shop">Solid Men Blue Track Pants</a></h3>
									<span>₹350</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="work">
								<div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(./images/work-6.jpg);">
									<a href="page.php?id=shop" class="icon d-flex align-items-center justify-content-center">
										<span class="ion-ios-search"></span>
									</a>
								</div>
								<div class="text pt-3 w-100 text-center">
									<h3><a href="page.php?id=shop">Solid Men Green Track Pants</a></h3>
									<span>₹350</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="work">
								<div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(./images/work-4.jpg);">
									<a href="page.php?id=shop" class="icon d-flex align-items-center justify-content-center">
										<span class="ion-ios-search"></span>
									</a>
								</div>
								<div class="text pt-3 w-100 text-center">
									<h3><a href="page.php?id=shop">Mens Stylish T-shirt</a></h3>
									<span>₹250</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
	<!--importing Slider js-->

	<script src="carousel/js/jquery.min.js"></script>
	<script src="carousel/js/popper.js"></script>
	<script src="carousel/js/bootstrap.min.js"></script>
	<script src="carousel/js/owl.carousel.min.js"></script>
	<script src="carousel/js/main.js"></script>

	<!-- importing footer -->
	<?php
	include "components/Footer.php";
	?>

	<!-- Latest compiled and minified CSS -->
	<!-- https://xstore.8theme.com/demos/hosting/-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">

</body>

</html>