 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unitybackend";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    // die("Connection failed: " . $conn->connect_error);
}

// echo "Connected successfully, now we will showing the users<br><br>";

$sql = "SELECT id, name, seconds FROM run_records order by seconds desc LIMIT 5";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo $row["id"]. "," .
		     $row["name"]. "," .
			 $row["seconds"]. 
			 chr(10);
    }
}  

$conn->close();

?> 