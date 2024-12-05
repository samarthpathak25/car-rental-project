<?php

@include './../../config.php';

if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $contact = mysqli_real_escape_string($conn, $_POST['contact']);
   $address = mysqli_real_escape_string($conn, $_POST['address']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {

      $error[] = 'user already exist!';

   } else {

      if ($pass != $cpass) {
         $error[] = 'password not matched!';
      } else {
         $insert = "INSERT INTO `user_form`(`name`, `contact`, `address`, `email`, `password`, `user_type`) VALUES ('$name', '$contact', '$address','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:./login_system/login/');
      }
   }

}
;


?>


<?php
if (isset($error)) {
   foreach ($error as $error) {
      echo '<span class="error-msg">' . $error . '</span>';
   }
   ;
}
;
?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="styles.css">

</head>

<body>
   <div class="container">
      <!-- Left Side: Image (Background) -->
      <!-- <div class="left-side">
         <img src="./../images/ezgif.com-gif-maker-98-5.webp" alt="Login background image"
            class="background-image">
      </div> -->

      <div class="form-container">

         <form action="" method="post">
            <h3>register now</h3>

            <input type="text" name="name" required placeholder="enter your name">
            <input type="text" name="contact" required placeholder="enter your contact number">
            <input type="text" name="address" required placeholder="enter your Address">
            <input type="email" name="email" required placeholder="enter your email">
            <input type="password" name="password" required placeholder="enter your password">
            <input type="password" name="cpassword" required placeholder="confirm your password">
            <select name="user_type">
               <option value="user">user</option>
               <option value="admin">admin</option>
            </select>
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>Already have an account? <a href="./../login">login now</a></p>
         </form>

      </div>

</body>

</html>