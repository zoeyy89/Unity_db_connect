 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unitybackend";

//variable submited by user
$loginUser = $_POST["loginUser"];
$loginPass = $_POST["loginPass"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully, now we will showing the users<br>";

$sql = "SELECT username FROM users where username = '" . $loginUser. "' ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Tell user the name is already taken
  echo "Username is already taken";
  

} else {
  echo "Create user...";
  // insert the user and password into database
  $sql2 = "INSERT INTO users (username, password, level) VALUES ('" . $loginUser. "', '" . $loginPass. "', 1)";
  if ($conn->query($sql2) === TRUE) {
      echo "New record created successfully";
  } 
  else 
  {
      echo "Error: " . $sql2 . "<br>" . $conn->error;
  }
}

$conn->close();

?> 