
<?php
$dname = $_POST["dname"];
$type = $_POST["radio"];
$server = "localhost";
$user = "root";
$pass = "";
$db = "Shuttle";
$conn = mysqli_connect($server, $user, $pass, $db);
if (!$conn)
 die("connection fail" . mysqli_connect_error());
if ($type == "micro") {
 $amount = 15;
 $vacancy = 15;
 $studwait = 0;
 $sql = "insert into shuttleinfo(dname, studwait, vacancy, type, amount) values ('$dname', '$studwait', '$vacancy', '$type', '$amount')";
 mysqli_query($conn, $sql);
 header('location:update.php');
}
if ($type == "mini") {
 $amount = 20;
 $vacancy = 20;
 $studwait = 0;
 $sql = "insert into shuttleinfo(dname, studwait, vacancy, type, amount) values ('$dname', '$studwait', '$vacancy', '$type', '$amount')";
 mysqli_query($conn, $sql);
 header('location:update.php');
}
?>