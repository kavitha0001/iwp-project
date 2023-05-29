<?php
$want = $_POST["radio"];
$sid = $_POST["sid"];
$server = "localhost";
$user = "root";
$pass = "";
$db = "Shuttle";
$conn = mysqli_connect($server, $user, $pass, $db);
if (!$conn)
 die("connection fail" . mysqli_connect_error());


if ($want == "shuttle type") {
 $type = $_POST["radio1"];
 if ($type == "micro") {
  $sql = "update shuttleinfo set type='$type', amount=15, vacancy=vacancy-5 where sid='$sid'";
  mysqli_query($conn, $sql);
  header('location:updation.php');
 }
 if ($type == "mini") {
  $sql = "update shuttleinfo set type='$type', amount=20, vacancy=vacancy+5 where sid='$sid'";
  mysqli_query($conn, $sql);
  header('location:updation.php');
 }
}

if ($want == "driver name") {
 $dname = $_POST["dname"];
 $sql = "update shuttleinfo set dname='$dname' where sid='$sid'";
 mysqli_query($conn, $sql);
 header('location:updation.php');
}
