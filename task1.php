  

  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_1";




//create connection
$conn = new mysqli("localhost", "root", "", "db_1");
if(mysqli_connect_error()){

die();

}

else
if(isset($_POST['save'])){


$motor1 = $_POST['motor1:'];
$motor2 = $_POST['motor2:'];
$motor3 = $_POST['motor3:'];
$motor4 = $_POST['motor4:'];
$motor5 = $_POST['motor5:'];
$motor6 = $_POST['motor6:'];


$sql =  "INSERT INTO motors (Motor1, Motor2, Motor3, Motor4, Motor5, Motor6)
VALUES('$motor1', '$motor2' , '$motor3', '$motor4', '$motor5', '$motor6')";

if($conn->query($sql)){

    echo"The data inserted successfully";

}

else{

    die();
}
}
if(isset($_POST['run'])){



$sql = "select * from motors_1 ";

if($conn->query( $sql))
{

    echo "Item added successfully!";
}
else{

    die();
}
mysql_close($conn);
}
?>




