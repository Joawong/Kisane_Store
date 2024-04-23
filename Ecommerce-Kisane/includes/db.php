<?php


$db = mysqli_connect("localhost", "root", "root", "ecomm_kisanestore");
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}