<?php

@include 'config.php';

session_start();

if(!isset($session['user_name'])){
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- <meta http-equiv="x-ua-Compatible" content="IE=edge">  -->
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>user_page</title>
        
          <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h3>hi, <span>user</span></h3>
                <h1>welcome <span><?php echo $_SESSION['user_name']?></span></h1>
                <p>this ia an user page</p>
                <a href="login_form.php" class="btn">login</a> 
                <a href="register_form.php" class="btn">register</a>
                <a href="logout.php" class="btn">logout</a>
                
                
            </div>
        </div>
    </body>
</html>