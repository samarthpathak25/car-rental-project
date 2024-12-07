<?php

@include './../../config.php';

if (isset($_POST['submit'])) {
	$company = mysqli_real_escape_string($conn, $_POST['company']);
	$car_name = mysqli_real_escape_string($conn, $_POST['car_name']);
	$years = mysqli_real_escape_string($conn, $_POST['years']);
	$num_person = mysqli_real_escape_string($conn, $_POST['num_person']);
	$car_type = mysqli_real_escape_string($conn, $_POST['car_type']);
	$mileage = mysqli_real_escape_string($conn, $_POST['mileage']);
	$gear_type = mysqli_real_escape_string($conn, $_POST['gear_type']);
	$price = mysqli_real_escape_string($conn, $_POST['price']);

	$select = "INSERT INTO `car_details`
   (`company`, `car`, `year`, `people`, `car_type`, `mileage`, `gear_type`, `price`) VALUES 
   ('$company', '$car_name','$years','$num_person','$car_type','$mileage','$gear_type','$price')";
	
	$result = mysqli_query($conn, $select);
	
	if ($result) {
		echo "Car details added successfully!";
	} else {
		echo "Error adding car details.";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>admin page</title>
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

	<!-- custom css file link  -->
	<link rel="stylesheet" href="styles.css">

</head>

<body>
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="./../../index.php" class="brand">
			<img src="./../../images/logofinal.png" alt="logo1.png" width="40" height="40">
			</span>
		</a>
		<ul class="side-menu top">
			<li> <!--class="active"-->
				<a href="./../dashboard/adminindex.php">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>

			<li class="active">
				<a href="./../add_car">

					<i class='bx bxs-shopping-bag-alt'></i>
					<span class="text">Add Cars</span>
				</a>
			</li>

			<li>
				<a href="./../car_collection">
					<i class='bx bxs-shopping-bag-alt'></i>
					<span class="text">Car Collection</span>
				</a>
			</li>

			<li>
				<a href="./../booking_list/index.php">
					<i class='bx bxs-doughnut-chart'></i>
					<span class="text">Booking List</span>
				</a>
			</li>

			<ul class="side-menu">
				
				<li>
					<a href="./../../login_system/logout.php" class="logout">
						<i class='bx bxs-log-out-circle'></i>
						<span class="text">Logout</span>
					</a>
				</li>
			</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>

			</a>
			<!-- <a href="<?php echo $href; ?>" class="btn user-btn" aria-label="Profile">
				<a href="" class="btn user-btn" aria-label="Profile">
				<ion-icon name="person-outline"></ion-icon>
				<h6><?php if ($user_name) {
					echo $user_name;
				} ?></h6>
			</a> -->
			<!-- name should be see as admin in riht top -->
			<!-- <img src="img/people.png"> -->
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>

			<div class="head-title">
				<div class="left">
					<h1>Add Cars Details</h1>
				</div>
			</div>
			<form action="" method="post">
				<ul class="box-info">
					<li>

						<span class="text">
							<input type="text" name="company" required placeholder="Enter company name"
								class="form-input1">


						</span>
					</li>
					<li>

						<span class="text">
							<input type="text" name="car_name" required placeholder="Enter car name"
								class="form-input1">

						</span>
					</li>
					<li>

						<input type="text" name="years" required placeholder="Enter the year of car"
							class="form-input1">

					</li>


					<li>

						<input type="text" name="num_person" required placeholder="Enter your total perons"
							class="form-input1">

					</li>
					<li>

						<select name="car_type" class="form-input1">
							<option value="Hybrid">Hybrid</option>
							<option value="Gasoline">Gasoline</option>
						</select>

					</li>
					<li>

						<input type="text" name="mileage" required placeholder="Enter Your car mileage"
							class="form-input1">
					</li>

					<li>

						<select name="gear_type" class="form-input1">
							<option value="Manual">Manual</option>
							<option value="Automatic">Automatic</option>
						</select>

					</li>
					<li>

						<span class="text">
							<input type="text" name="price" required placeholder="Enter rent price" class="form-input1">
						</span>
					</li>					
				</ul>
				<input type="submit" name="submit" value="Add Car" class="btn">
			</form>
		</main>

		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script src="style.js"></script>

</body>

</html>