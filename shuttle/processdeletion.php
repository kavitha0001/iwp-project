
<?php
session_start();
$cid = $_SESSION["cid"];
$sid = $_POST["sid"];
//connection
$server = "localhost";
$user = "root";
$pass = "";
$db = "Shuttle";
$conn = mysqli_connect($server, $user, $pass, $db);
if (!$conn)
 die("connection fail" . mysqli_connect_error());

$sql = "select studwait from shuttleinfo where sid='$sid'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
while ($row = mysqli_fetch_assoc($result)) {
 $wait = $row["studwait"];
}

if ($wait > 0) {
 header('location: waiting.php');
} else {
 $sql = "delete from shuttleinfo where sid='$sid'";
 mysqli_query($conn, $sql);
 header('location: home.php');
}
?>