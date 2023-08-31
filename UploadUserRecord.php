 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unitybackend";

//variable submited by user
$userName = $_POST["name"];
$userSeconds = $_POST["seconds"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// insert record of user into database
$sql = "INSERT INTO run_records( name, seconds) VALUES ('" . $userName . "', '" . $userSeconds. "')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

?> 