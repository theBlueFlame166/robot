<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot";


    $speech=$_POST["voice"];
    

    // Create a new database connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check the database connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert the direction into the directions table
    $sql = "INSERT INTO voicereq (speech) VALUES ('$speech')";

    if (mysqli_query($conn, $sql)) {
        echo $speech;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);

?>
<html>
<body>
<form action="voice.html" method="post">
    <button type="submit" name="back" value="back">Record new voice</button>
</form>
</body>
</html>
