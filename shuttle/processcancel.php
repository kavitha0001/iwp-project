
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
$rid = $_POST["rid"];

//delete history
$sql = "select fare from ride where rid='$rid'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
while ($row = mysqli_fetch_assoc($result)) {
 $amn = $row["fare"];
}
$sql = "delete from ride where rid='$rid'";
mysqli_query($conn, $sql);

//amount updated
$_SESSION["amount"] = $amount + $amn;
$amount = $_SESSION["amount"];
$sql = "update customer set amount='$amount' where cid='$cid'";
mysqli_query($conn, $sql);
header('location: history.php');
?>