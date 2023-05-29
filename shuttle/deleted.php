
<?php
session_start();
$cid = $_SESSION["cid"];
$del = $_POST["delete"];
//connection
$server = "localhost";
$user = "root";
$pass = "";
$db = "Shuttle";
$conn = mysqli_connect($server, $user, $pass, $db);
if (!$conn)
 die("connection fail" . mysqli_connect_error());
if ($del = "Delete") {
 $sql = "delete from ride where cid='$cid'";
 mysqli_query($conn, $sql);
 $sql = "delete from customer where cid='$cid'";
 mysqli_query($conn, $sql);
}
header('location:index.php');
?>