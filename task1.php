  

  <?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "db_1";

// Create connection
$con = mysqli_connect('servername', 'username', 'password', 'dbname');

$con = mysqli_connect('localhost','root','', 'db_1');


$motor1 = $_POST['motor1:'];
$motor2 = $_POST['motor2:'];
$motor3 = $_POST['motor3:'];
$motor4 = $_POST['motor4:'];
$motor5 = $_POST['motor5:'];
$motor6 = $_POST['motor6:'];
//database insert SQL code

$sql = "INSERT INTO motors_1 (motor1, motor2, motor3, motor4, motor5,motor6)
VALUES ('motor1', 'motor2' , 'motor3', 'motor4', 'motor5', 'motor6')";

//insert in database
$rs = mysqli_query($con, $sql);
if($rs)
{
    echo"Value Added Successfully";



}
?>




