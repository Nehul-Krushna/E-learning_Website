<?php
$name = $_POST['Name'];
$username = $_POST['user'];
$password = $_POST['pass'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "login";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
$SELECT = "SELECT username From users Where username = ? Limit 1";
$INSERT = "INSERT Into users (Name, username, password) values(?,?,?)";

$stmt = $conn->prepare($SELECT);
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($username);
$stmt->store_result();
$rnum = $stmt->num_rows;

if ($rnum==0) {
	$stmt->close();

	$stmt = $conn->prepare($INSERT);
	$stmt->bind_param("sss" , $name, $username, $password);
	$stmt->execute();
	echo "New record inserted sucessfully";
} else {
	echo "Someone already register using this email";
}
$stmt->close();
$conn->close();

?>