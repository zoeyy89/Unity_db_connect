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

$sql = "SELECT password FROM users where username = '" . $loginUser. "' ";

echo $sql . '<br>' ;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	if($row["password"] == $loginPass)
	{
		echo "Login Success";
		// get user's data here
		
		// get player info
		
		// inventory
		
		//modify player data
	}
	else
	{
	    echo "Wrong credentail";
	}
  }
} else {
  echo "Username not exist";
}

$conn->close();

?> 