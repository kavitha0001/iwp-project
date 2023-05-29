
<?php
session_start();
$server = "localhost";
$user = "root";
$pass = "";
$db = "Shuttle";
$conn = mysqli_connect($server, $user, $pass, $db);
if (!$conn)
 die("connection fail" . mysqli_connect_error());
$amount = 0;
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$type = $_POST["radio"];
$sql = "insert into customer(name, email, password, type, amount) values ('$name', '$email', '$password', '$type', '$amount')";
mysqli_query($conn, $sql);
header('location: index.php');
?>