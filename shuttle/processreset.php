
<?php
$sid = $_POST["sid"];
$server = "localhost";
$user = "root";
$pass = "";
$db = "Shuttle";
$conn = mysqli_connect($server, $user, $pass, $db);
if (!$conn)
 die("connection fail" . mysqli_connect_error());
$sql = "select type from shuttleinfo where sid='$sid'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
while ($row = mysqli_fetch_assoc($result)) {
 $type = $row["type"];
}

if ($type == "micro") {
 $sql = "update shuttleinfo set studwait=0, vacancy=15 where sid='$sid'";
 mysqli_query($conn, $sql);
 header('location: reset.php');
}

if ($type == "mini") {
 $sql = "update shuttleinfo set studwait=0, vacancy=20 where sid='$sid'";
 mysqli_query($conn, $sql);
 header('location: reset.php');
}

?>