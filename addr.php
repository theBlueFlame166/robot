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


// $x=$_POST["x"];
// $y=$_POST["y"];


    $sql = "insert into moves (move,xdir,ydir)
    values('right','10','10')";




if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


