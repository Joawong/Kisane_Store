<?php


$db = mysqli_connect("localhost", "root", "root", "ecomm_kisanestore");
if (mysqli_connect_errno()) {
    // If connection failed, output an error message and terminate the script
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}