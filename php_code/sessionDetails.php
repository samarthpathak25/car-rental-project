<?php
if (!session_id()) {
    session_start();
}
$userId = '';
$userName = '';
$userType = '';
if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
}
if (isset($_SESSION['user_name'])) {
    $userName = $_SESSION['user_name'];
}
if (isset($_SESSION['user_type'])) {
    $userType = $_SESSION['user_type'];
}

?>