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
}
;
?>

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

  <form action="" method="post">
    <h3>Add New Car</h3>
    <input type="text" name="company" required placeholder="Enter company name">
    <input type="text" name="car_name" required placeholder="Enter car name">
    <input type="text" name="years" required placeholder="Enter the year of car">
    <input type="text" name="num_person" required placeholder="Enter your total perons">
    <select name="car_type">
      <option value="Hybrid">Hybrid</option>
      <option value="Gasoline">Gasoline</option>
    </select>
    <input type="text" name="mileage" required placeholder="Enter Your car mileage">
    <select name="gear_type">
      <option value="Manual">Manual</option>
      <option value="Automatic">Automatic</option>
    </select>
    <input type="text" name="price" required placeholder="Enter rent price">
    <input type="submit" name="submit" value="Add Car" class="form-btn">

  </form>
</body>
</html>