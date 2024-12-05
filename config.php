<?php

$conn = mysqli_connect(hostname: 'localhost', username: 'root', password: '', database: 'user_db');
if ($conn) {
    // echo "ok";

} else {
    echo "error";
}
?>