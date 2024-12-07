<?php
@include './../../config.php';
include 'sessionDetails.php';
if ($userType == 'admin') {
    $query = "SELECT * FROM user_booking INNER JOIN car_details ON user_booking.car_id=car_details.id";
} else {
    $query = "SELECT * FROM user_booking INNER JOIN car_details ON user_booking.car_id=car_details.id where user_id=$userId ";
}
$bookingListResult = mysqli_query($conn, $query);
if ($bookingListResult->num_rows > 0) {
    while ($booking = mysqli_fetch_assoc($bookingListResult)) {
        $company = $booking['company'];
        $car = $booking['car'];
        $transaction_id = $booking['transaction_id'];
        $rent_days = $booking['rent_days'];
        $price = $booking['price'];
        $status = $booking['status'];
        $booking_id = $booking['booking_id'];
        $totalAmount = $price * $rent_days;
        echo "<tr>";
        echo "<td>";
        echo "<p>$company $car</p>";
        echo "</td>";
        echo "<td>$rent_days</td>";
        echo "<td>$transaction_id</td>";
        echo "<td><p>
        $totalAmount
        </p></td>";
        // echo "<td><span class='status completed'>3000</span></td>";
        if (
            $userType == 'admin' &&
            $status == 'pending'
        ) {
            echo
                "<td>
  <form method='POST' action=''>
  <input type='hidden' name='booking_id' value=$booking_id>
    <div class='btn-container'>
      <button class='acc-btn' name='accept'>Accept</button>
      <button class='rej-btn' name='reject'>Reject</button>
    </div>
  </form>
</td>
";
        } else {
            echo "<td><p>$status</p></td>";
        }
        echo "</tr>";
    }
} else {
    echo "<tr><td>No Car has been rented...!!!</tr></td>";
}

if (isset($_POST['accept'])) {
    $bookingId = $_POST['booking_id'];
    $query = "UPDATE user_booking SET status='accepted' WHERE booking_id=$bookingId";
    $acceptResult = mysqli_query($conn, $query); // Run your SQL query
    echo $booking_id;
    if ($acceptResult) {
        echo "Booking accepted!";
    }
}
if (isset($_POST['reject'])) {
    $bookingId = $_POST['booking_id'];
    $query = "UPDATE user_booking SET status='rejected' WHERE booking_id=$bookingId";
    $rejectResult = mysqli_query($conn, $query); // Run your SQL query
    if ($rejectResult) {
        echo "Booking Rejected!";

    }
}
?>