
<?php
session_start();
$cid = $_SESSION["cid"];
$amount = $_SESSION["amount"];
$sid = $_POST["sid"];
$source = $_POST["source"];
$desti = $_POST["desti"];
//database connection
$server = "localhost";
$user = "root";
$pass = "";
$db = "Shuttle";
$conn = mysqli_connect($server, $user, $pass, $db);
if (!$conn)
 die("connection fail" . mysqli_connect_error());
$sql = "select type from shuttleinfo where sid='$sid'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result))
 $ctype = $row["type"];
//finding the shuttle type
if ($ctype == "micro") {
 $fare = 15;
 if ($amount >= 15) {
  $sql = "select studwait, vacancy from shuttleinfo where sid='$sid'";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
   $studwait = $row["studwait"];
   $vacancy = $row["vacancy"];
  }
  if ($vacancy > 0) {
   if ($source != $desti) {
    $amount -= 15;
    $_SESSION["amount"] = $amount;
    $sql = "update customer set amount='$amount' where cid='$cid'";
    mysqli_query($conn, $sql);
    $vacancy--;
    $sql = "update shuttleinfo set vacancy='$vacancy' where sid='$sid'";
    mysqli_query($conn, $sql);
    $studwait++;
    $sql = "update shuttleinfo set studwait='$studwait' where sid='$sid'";
    mysqli_query($conn, $sql);
    $sql = "insert into ride(cid, sid, source, desti, ctype, fare) values ('$cid', '$sid', '$source', '$desti', '$ctype', '$fare')";
    mysqli_query($conn, $sql);
    header('location:booked.php');
   } else {
    header('location: same.php');
   }
  } else {
   header('location: novacancy.php');
  }
 } else {
  header('location: noamount.php');
 }
}

if ($ctype == "mini") {
 $fare = 20;
 if ($amount >= 20) {
  $sql = "select studwait, vacancy from shuttleinfo where sid='$sid'";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
   $studwait = $row["studwait"];
   $vacancy = $row["vacancy"];
  }
  if ($vacancy > 0) {
   if ($source != $desti) {
    $amount = $amount - 20;
    $_SESSION["amount"] = $amount;
    $sql = "update customer set amount='$amount' where cid='$cid'";
    mysqli_query($conn, $sql);
    $vacancy = $vacancy - 1;
    $sql = "update shuttleinfo set vacancy='$vacancy' where sid='$sid'";
    mysqli_query($conn, $sql);
    $studwait = $studwait + 1;
    $sql = "update shuttleinfo set studwait='$studwait' where sid='$sid'";
    mysqli_query($conn, $sql);
    $sql = "insert into ride(cid, sid, source, desti, ctype, fare) values ('$cid', '$sid', '$source', '$desti', '$ctype', '$fare')";
    mysqli_query($conn, $sql);
    header('location:booked.php');
   } else {
    header('location: same.php');
   }
  } else {
   header('location: novacancy.php');
  }
 } else {
  header('location: noamount.php');
 }
}
?>