<?php
$servername = "localhost";
$username = "root";
$password = "ventrix";
$database = "saku_pharmacy";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$database);

// Check connection
if ($conn) {
    echo("connected");
    header("Location:index2.php");
} else {
    echo ("Connected successfully");
}

?>