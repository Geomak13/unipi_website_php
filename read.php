<html>
<body>
<center><img src='unipi.jpg'>
<h1 align="center">Master of Digital Systems Security</h1>

<br>

</body>

<?php
$servername = "localhost";
$username = "geomak";
$password = "test";
$dbname = "unipi";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 // output data of each row
 while($row = mysqli_fetch_assoc($result)) {
 echo "name: " . $row["username"]. " - pass: " . $row["password"]." - email: " . $row["email"]. "<br>";
 }
} else {
 echo "0 results";
}
mysqli_close($conn);
?>
</html>
<a href="http://localhost/index.php">Go Back</a>
