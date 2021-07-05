<?php

$severname = 'localhost';
$username ='root';
$password = '';
$db_name = 'direction';


// Create connection
$connection = mysqli_connect("localhost", "root", "", "direction");

// Check connection
if (mysqli_connect_error()) { 
   

  echo "could not connect." .$mysqli_connect_error();
$conn->close();
}
if(isset($_POST["add"])){

$Forward = $_POST["Forward"];
$Stop = $_POST["Stop"];
$Right = $_POST["Right"];
$Left = $_POST["Left"];
$Backward = $_POST["Backward"];

$sql = "INSERT INTO direction (Forward,Stop,Right,Left,Backward)
VALUES ('varchar', 'varchar', 'varchar','varchar','varchar')";



 $conn->query($sql);
  
    echo "New record created successfully";
  
  
  
  $conn->close();}















