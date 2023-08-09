<?php


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "robot";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

  
    if ($conn->connect_error) {
        die("connection field" . $conn->connect_error);
    }

    $number = $_GET['number'];
    $sql = "INSERT INTO senseor (Number) VALUES ('$number')";

    
    // تنفيذ الاستعلام
    if ($conn->query($sql) === TRUE) {
        echo "<br>";
    } else {
        echo "an error happened" . $conn->error;
    }

    $sql = "SELECT * FROM senseor WHERE id=(SELECT MAX(id)FROM senseor)";


$result = $conn->query($sql);


if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "num: "   . $_GET["number"] ;echo " <br>ID : " . $row["id"];
    }
} else {
    echo "there is no data";
}
    
    $conn->close();

?>