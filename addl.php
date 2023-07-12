<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//put the insert code here 


echo "left";
echo "<br>";

    $sql = "insert into moves (move)
    values('left')";


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

