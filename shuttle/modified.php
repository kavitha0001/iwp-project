
<?php
session_start();
$cid = $_SESSION["cid"];
$server = "localhost";
$user = "root";
$pass = "";
$db = "Shuttle";
$conn = mysqli_connect($server, $user, $pass, $db);
if (!$conn)
 die("connection fail" . mysqli_connect_error());
$submit = $_POST["submit"];

if ($submit == "update name") {
 $mname = $_POST["mname"];
 $sql = "update customer set name='$mname' where cid='$cid'";
 mysqli_query($conn, $sql);
}

if ($_POST["submit"] == "update password") {
 $mpass = $_POST["mpass"];
 $sql = "update customer set password='$mpass' where cid='$cid'";
 mysqli_query($conn, $sql);
}

if ($_POST["submit"] == "update email") {
 $memail = $_POST["memail"];
 $sql = "update customer set email='$memail' where cid='$cid'";
 mysqli_query($conn, $sql);
}

header('location: login.php');
?>