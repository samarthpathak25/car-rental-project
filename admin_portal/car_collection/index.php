
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin page</title>

  <!-- custom css file link  -->
  <link rel="stylesheet" href="styles.css">

</head>

<body>

  <h3>Welcome Admin</h3>


  <section class="section featurecar" id="featured car">
    <div class="container">

      <div class="title-wrapper">
        <h2 class="h2 section-title">Featured Cars</h2>

        <a href="#" class="featured-car-link">
          <span>View more</span>
          <ion-icon name="arrow-forward-outline"></ion-icon>
        </a>
        <a href="./../add_car" class="btn-download">
          <span class="text">Add New Car</span>
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

</body>


</html>