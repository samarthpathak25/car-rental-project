<?php
@include './../../config.php'; // Adjust the path to match your project structure

if (isset($_GET['id'])) {
    $carId = $_GET['id']; // Get the car ID from the query string

    // Query to delete the car record
    $query = "DELETE FROM car_details WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        // Redirect back to the admin page with a success message
        header("Location: admin_page.php?message=Car Deleted Successfully");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "No car ID provided!";
}
?>
