
<?php
session_start();
$server = "localhost";
$user = "root";
$pass = "";
$db = "Shuttle";
$conn = mysqli_connect($server, $user, $pass, $db);
if (!$conn)
  die("connection fail" . mysqli_connect_error());
$name = $_POST["name"];
$pass = $_POST["password"];
$sql = "select * from customer where name='$name' && password='$pass'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if ($num == 1) {
  while ($row = mysqli_fetch_assoc($result)) {
    $_SESSION["cid"] = $row["cid"];
    $_SESSION["name"] = $row["name"];
    $_SESSION["email"] = $row["email"];
    $_SESSION["password"] = $row["password"];
    $_SESSION["type"] = $row["type"];
    $_SESSION["amount"] = $row["amount"];
  }
  $type = $_SESSION["type"];
  if ($type == "user") {
    $_SESSION["home"] = "./home1.php";
    header('location:home1.php');
  } else if ($type == "admin") {
    $_SESSION["home"] = "./home2.php";
    header('location:home2.php');
  }
} else {
  header('location:index.php');
}
?>