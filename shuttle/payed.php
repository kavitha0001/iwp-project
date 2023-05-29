
<?php
session_start();
$cid = $_SESSION["cid"];
$amount = $_SESSION["amount"];
$server = "localhost";
$user = "root";
$pass = "";
$db = "Shuttle";
$conn = mysqli_connect($server, $user, $pass, $db);
if (!$conn)
 die("connection fail" . mysqli_connect_error());
$submit = $_POST["submit"];
$amn = $_POST["amount"];

if ($submit == "pay") {
 $_SESSION["amount"] = $amount + $amn;
 $amount = $_SESSION["amount"];
 $sql = "update customer set amount='$amount' where cid='$cid'";
 mysqli_query($conn, $sql);
}
header('location: payment.php');
?>