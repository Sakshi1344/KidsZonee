<?php 
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "kidszonecontactdb";

$conn = mysqli_connect($servername,$username,$password,$database );

if(!$conn) {
    die("Error deleting record:".mysqli_error($conn));
}
 ?>