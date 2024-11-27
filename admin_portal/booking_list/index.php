<!-- <?php
include "./php_code/session.php";

?> -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" href="./../../images/logofinal.png" type="image/svg+xml">


	<title>Admin Dashboard</title>
</head>
<body>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="./../../index.php" class="brand">
				<img src="./../../images/logofinal.png"  alt="logo1.png" width="40" height="40">
			</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="./../car_collection">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Car Collection</span>
				</a>
			</li>
			<li class="active">
            <a href="./../booking_list/index.php">					
                <i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Booking List</span>
				</a>
			</li>
			 <li>
				<a href="./../add_car">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Add Cars</span>
				</a>
			</li>
		</ul> 
		<ul class="side-menu">
			<li> 
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="./../../login_system/logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
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
			<i class='bx bx-menu' ></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			
			<a href="#" class="profile">
				
				<img src="img/people.png">
			 </a> 	<!--	user name have to see -->
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Booking List</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Booking_list</a> <!-- its is under theheading -->
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Recent Orders</a>
						</li>
					</ul>
				</div>

			



				
			</div>

			<!-- <ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>50</h3>
						<p>Total Cars</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>10</h3>
						<p>Total Users</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>5</h3>
						<p>Total Pending Request</p>
					</span>
				</li>
			</ul> -->


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Date Order</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Person 1</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Person 2</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Person 3</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">Process</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Person 4</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Person 5</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
	</section>

	<script src="script.js"></script>
</body>
</html>