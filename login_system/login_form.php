<?php

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {
    // $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    // $cpass = md5($_POST['cpassword']);
    // $user_type = $_POST['user_type'];

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    // $result = mysqli_query(mysql: $conn, query: $select);
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows(result: $result) > 0) {

        $row = mysqli_fetch_array(result: $result);

        if ($row['user_type'] == 'admin') {

            $_SESSION['admin_name'] = $row['name'];
            header(header: 'location:./../admin_portal/dashboard/adminindex.html');

        } elseif ($row['user_type'] == 'user') {

            $_SESSION['user_name'] = $row['name'];
            header(header: 'location:user_page.php');

        }

    } else {
        $error[] = 'Incorrect email or password...!';
    }

}
;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="container">
        <!-- Left Side: Image (Background) -->
        <div class="left-side">
            <img src="./images/ezgif.com-gif-maker-98-5.webp" alt="Login background image"
                class="background-image">
        </div>

        <!-- Right Side: Login Card -->
        <div class="right-side">
            <div class="login-card">
                <h2 class="login-heading">LOGIN</h2>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required placeholder="Enter your email">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required placeholder="Enter your password">
                    </div>

                    <button type="submit" name="submit" value="login now">Login Now</button>
                </form>
                <?php
                if (isset($error)) {
                    foreach ($error as $error) {
                        echo '<div class="error-container">
            <h4 class="error-msg">' . $error . '</h4>
            </div>';
                    }
                    ;
                }
                ?>
            </div>
            <p class="dont-have-account">Don't have an account? <a class="register-now"
                    href="register_form.php">Register Now</a></p>


        </div>
    </div>
</body>

</html>
