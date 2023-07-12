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


echo "stop";
echo "<br>";

    $sql = "insert into moves (move)
    values('stop')";
  

  
  // if($left==""){
  
  //   $sql = "insert into moves (move)
  //   values('$left')";
  
  // }
  
  // if($stop==""){
  
  //   $sql = "insert into moves (move)
  //   values('$stop')";
  
  
  // }
  
  // if($right==""){
  
  //   $sql = "insert into moves (move)
  //   values('$right')";
  
  
  // }
  
  // if($bottom==""){
  
  //   $sql = "insert into moves (move)
  //   values('$bottom')";
  
  
  // }

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

