
<?php
session_start();
$cid = $_SESSION["cid"];
//connection
$server = "localhost";
$user = "root";
$pass = "";
$db = "Shuttle";
$conn = mysqli_connect($server, $user, $pass, $db);
if (!$conn)
 die("connection fail" . mysqli_connect_error());
//clear history
$sql = "delete from ride where cid='$cid'";
mysqli_query($conn, $sql);
header('location:history.php');
?>