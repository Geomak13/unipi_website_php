<?php
$servername = "localhost";
$username = "geomak";
$password = "test";
$dbname = "unipi";
$name = $_POST['name'];
$pass = $_POST['pass'];
$email = $_POST['email'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO user (username,password,email) VALUES ('$name','$pass','$email')";
echo $sql; //for debugging
if (mysqli_query($conn, $sql)) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<a href="http://localhost/index.php">Go Back</a>
