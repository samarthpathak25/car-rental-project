<?php
@include './config.php';

$query = "SELECT * FROM car_details";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    $car = mysqli_fetch_assoc($result);
} else {
    echo "No results found!";
}
?>