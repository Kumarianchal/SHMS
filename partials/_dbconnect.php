<?php
$servername="localhost";
$username="root";
$password="";
$database="shms";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Connection failed");
}
?>