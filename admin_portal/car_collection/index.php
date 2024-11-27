<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin page</title>
<!-- Boxicons -->
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <!-- custom css file link  -->
  <link rel="stylesheet" href="styles.css">

</head>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="./../../index.php" class="brand">
				<img src="./../../images/logofinal.png"  alt="logo1.png" width="40" height="40">
			</span>
		</a>
		<ul class="side-menu top">
			<li >
      <!-- class="active" -->
				<a href="./../dashboard/adminindex.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active" >
				<a href="./../car_collection">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Car Collection</span>
				</a>
			</li>
			<li>
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
			<li>

				
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
				
			<!-- user name have to see  -->
			 </a> 		
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<!-- <main>


			

				car collection	 -->
				<div class="left">
					<h1>Car Collection</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Cars Dashboard</a> 
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Cars</a>
						</li>
					</ul>
				</div>



				
			</div>

			

			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	


  <section class="section featurecar" id="featured car">
    <div class="container">

      <div class="title-wrapper">
       
          <ion-icon name="arrow-forward-outline"></ion-icon>
        </a>
       

      </div>


      <?php
      @include './../../config.php';

      $query = "SELECT * FROM car_details";
      $result = mysqli_query($conn, $query);

      echo "<ul class='featured-car-list'>";
      if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $companyName = $row['company'];
          $carName = $row['car'];
          $year = $row['year'];
          $people = $row['people'];
          $carType = $row['car_type'];
          $carMilage = $row['mileage'];
          $gearType = $row['gear_type'];
          $price = $row['price'];

          echo "<li>";
          echo "<div class='featured-car-card'>";
          // echo "<figure class='card-banner'>";
          // echo "<img src='../../images/maruti-suzuki-dzire.jpg' alt='$carName' loading='lazy' width='440' height='300'>";
          // echo "</figure>";
          echo "<div class='card-content'>";
          echo "<div class='card-title-wrapper'>";
          echo "<h3><a href='#'>$companyName $carName</a> <span class='year'>$year</span></h3>";
          echo "</div>";
          echo "<ul class='card-list'>";
          echo "<li><ion-icon name='people-outline'></ion-icon> $people People</li>";
          echo "<li><ion-icon name='flash-outline'></ion-icon> $carType</li>";
          echo "<li><ion-icon name='speedometer-outline'></ion-icon> $carMilage km / 1-litre</li>";
          echo "<li><ion-icon name='hardware-chip-outline'></ion-icon> $gearType</li>";
          echo "</ul>";
          echo "<div class='card-price-wrapper'>";
          echo "<p class='card-price'><strong>₹$price</strong> / Per day</p>";
          echo "<button class='dustbin-button' onclick='deleteCar($row[id])'> Dustbin</button>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
          echo "</li>";
        }
      }
      echo "</ul>";
      ?>
    </div>
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