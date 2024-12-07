<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>admin page</title>
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
			<li>
				<!-- class="active" -->
				<a href="./../dashboard/adminindex.php">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="./../add_car">
					<i class='bx bxs-shopping-bag-alt'></i>
					<span class="text">Add Cars</span>
				</a>
			</li>
			<li class="active">
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

			<li>


				<ul class="side-menu">
					
					<li>
						<a href="./../../login_system/logout.php" class="logout">
							<i class='bx bxs-log-out-circle'></i>
							<span class="text">Logout</span>
						</a>
					</li>
				</ul>
	</section>
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
			<!-- <input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>-->
			<!-- <a href="<?php echo $href; ?>" class="btn user-btn" aria-label="Profile">
	  
		<ion-icon name="person-outline"></ion-icon>
		<h6><?php if ($user_name) {
			echo $user_name;
		} ?></h6>
	  </a> -->

			<!-- <img src="img/people.png"> -->
			</a> <!--	user name have to see -->
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Car Collection</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Car Collection</a> <!-- its is under theheading -->
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Cars Lists</a>
						</li>
					</ul>
				</div>


			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Cars Lists</h3>
						<i class='bx bx-search'></i>
						<i class='bx bx-filter'></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Company Name</th>
								<th>Car Name</th>
								<th>Years</th>
								<th>Total person</th>
								<th>Car Type</th>
								<th>Car Mileage</th>
								<th>Gear Type</th>
								<th>Rent Price</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
							<?php
							@include './../../config.php';

							$query = "SELECT * FROM car_details";
							$result = mysqli_query($conn, $query);
							if ($result->num_rows > 0) {
								while ($car = mysqli_fetch_assoc($result)) {
									$companyName = $car['company'];
									$carName = $car['car'];
									$year = $car['year'];
									$people = $car['people'];
									$carType = $car['car_type'];
									$carMilage = $car['mileage'];
									$gearType = $car['gear_type'];
									$price = $car['price'];
									$carId = $car['id'];

									echo "<tr>
									<td>$companyName</td>
									<td>$carName</td>
									<td>$year</td>
									<td>$people person</td>
									<td>$carType</td>
									<td>$carMilage km/ltr</td>
									<td>$gearType</td>
									<td>$price</td>
									<form action='delete_car.php' method='POST'>
									<input type='hidden' name='car_id' value='$carId'>
									<td>
									<button type='submit' 
									onclick=return confirm('Are you sure you want to delete this item?')
									>
									<i class='fa fa-trash-o' style='font-size:24px;color:red'></i>
									</button>
									</td>
									</form>
								</tr>";
								}
							} else {
								echo "<tr>
									<td colspan=9>No cars available.</td>
								</tr>";
							}
							?>

						</tbody>
					</table>
				</div>

			</div>
		</main>
		<!-- }
	  }
	  echo "</ul>";
	  ?>
	</div> -->

		</div>
		<!-- MAIN -->
	</section>
	</section>
	<!-- CONTENT -->





	</section>

	<!-- <script>
	function confirmDelete(carId) {
	  if (confirm("Are you sure you want to delete this car?")) {
		window.location.href = `delete_car.php?id=${carId}`;
	  }
	}
  </script> -->
	<script src="style.js"></script>
</body>


</html>