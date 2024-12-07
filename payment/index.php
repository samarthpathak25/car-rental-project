<?php

@include './../config.php';

session_start(); // Start the session if not already started

$id = isset($_GET['id']) ? $_GET['id'] : null;
if ($id) {
    $query = "SELECT * FROM `car_details` WHERE id=$id;";
    $result = mysqli_query($conn, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $carId = $row['id'];
            $price = $row['price'];
        }
    } else {
        echo "No records found.";
    }
}



if (isset($_POST['submit'])) {
    if (isset($_SESSION['user_id'])) {
        $userId = $_SESSION['user_id'];
        
    }
    $upiId = mysqli_real_escape_string($conn, $_POST['upiId']);
    $rent_days = mysqli_real_escape_string($conn, $_POST['num_rent_days']);

    $query = "INSERT INTO `user_booking`(`user_id`, `car_id`, `rent_days`, `transaction_id`) VALUES (
        '$userId',
        '$carId',
        '$rent_days',
        '$upiId'
    )";

    // Execute query and check result
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Payment Request Raised successfully!');</script>";
        header('location: ./../user_portal/user_dashboard');
    } else {
        echo "<script>alert('Error in Payment Request: " . mysqli_error($conn) . "');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing</title>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/pstyle.css">
    <link rel="shortcut icon" href="./../images/logofinal.png" type="image/svg+xml">
</head>

<body>

    <div class="container">
        <form action="" method="POST" id="upiForm">
            <div class="row">
                <div class="col">

                    <h3 class="title">billing </h3>

                    <div class="inputBox">
                        <span>UPI Id :</span>
                        <input type="text" id="upiId" name="upiId" class="input-field"
                            placeholder="e.g. example.name@upi" />
                        <span id="errorMessage" class="error" style="color: red; font-size: 0.9em;"></span>
                    </div>
                    <div class="inputBox">
                        <span>number of days to rent :</span>
                        <input type="text" name="num_rent_days" id="num_rent_days" required
                            placeholder="Enter number of days to rent">
                    </div>
                    <span id="total_amount" class="pay"></span>
                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            const numberInput = document.getElementById("num_rent_days");
                            const resultDisplay = document.getElementById("total_amount");
                            const upiRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+$/;

                            // Calculate total amount dynamically
                            numberInput.addEventListener("input", () => {
                                const inputValue = parseFloat(numberInput.value) || 0;
                                const pricePerDay = <?php echo $price; ?>; // Assume $price is defined in PHP
                                const total = inputValue * pricePerDay;
                                resultDisplay.textContent =
                                    "Total Money you have to pay: " +
                                    Intl.NumberFormat("en-IN", {
                                        style: "currency",
                                        currency: "INR",
                                    }).format(total);
                            });

                            // UPI ID Validation
                            const form = document.getElementById("upiForm");
                            const upiField = document.getElementById("upiId");
                            const errorMessage = document.getElementById("errorMessage");

                            form.addEventListener("submit", function (event) {
                                const upiId = upiField.value.trim();

                                if (!upiRegex.test(upiId)) {
                                    errorMessage.textContent = "Invalid UPI ID format. Use format: username@bank";
                                    event.preventDefault(); // Prevent form submission if invalid
                                } else {
                                    errorMessage.textContent = ""; // Clear error message if valid
                                }
                            });
                        });
                    </script>
                </div>

                <div class="col">
                    <h3 class="title">payment</h3>
                    <div class="inputBox">
                        <span> only qR accepted :</span>
                        <img src="images/py1.jpg" alt="qr code">
                    </div>
                </div>
            </div>

            <input type="submit" name="submit" class="submit-btn">
        </form>
    </div>

</body>

</html>