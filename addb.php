<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot";

// include_once 'SummerTrainnig/add.php'
// $forward = $_POST["forward"];
// $left = $_POST["left"];
// $stop = $_POST["stop"];
// $right = $_POST["right"];
// $buttom = $_POST["buttom"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//put the insert code here 

echo "bottom";
echo "<br>";
    $sql = "insert into moves (move)
    values('bottom')";
  

if (mysqli_query($conn, $sql)) {
  echo "\n New record created successfully ";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

