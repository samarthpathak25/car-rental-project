<?php

@include 'config.php';

session_start();
session_unset();
session_destroy();

header('location: http://localhost/samarth_project/car-rental-project');

?>