<?php session_start();
$home = $_SESSION["home"];
$cid = $_SESSION["cid"];
?>
<html lang="en">

<head>
 <title>Shuttle: View History</title>
 <link rel="stylesheet" href="./css/style3.css?v=<?php echo time(); ?>">
</head>

<body>
 <div class="nav">
  <strong>Shuttle</strong>
  <a style="margin-left: 60%" href=<?php echo $home ?>><button class="button1" type="submit">Home</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="./about.php"><button class="button1" type="submit">About</button></a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;
  <a href="./feedback.php"><button class="button1" type="submit">Feedback</button></a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;
  <a href="./login.php"><button class="button1" type="submit">Logout</button></a>
 </div>
 <div class="parent">
  <div class="container1">
   <div class="border1">
    <p>Your information</p>
   </div>
   <img src="./image/profile2.webp" alt="">
   <p>Name: <?php echo $_SESSION["name"] ?></p>
   <p>Email: <?php echo $_SESSION["email"] ?></p>
   <p>Type: <?php echo $_SESSION["type"] ?></p>
   <p>Account Balance: <?php echo $_SESSION["amount"] ?></p>
   <button class="history"><a href="./cancel.php">Cancel booking</a></button>
   <button class="history"><a href="./clear.php">Clear History</a></button>
  </div>
  <?php
  $server = "localhost";
  $user = "root";
  $pass = "";
  $db = "Shuttle";
  $conn = mysqli_connect($server, $user, $pass, $db);
  if (!$conn)
   die("connection fail" . mysqli_connect_error());

  $sql = "select rid, sid, fare, source, desti, ridetime from ride where cid='$cid'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  ?>

  <div class="container2">
   <div class="border2">
    <p>Ride History</p>
   </div>
   <div class="avail">
    <table class="table">
     <tr>
      <td><strong>Ride id</strong></td>
      <td><strong>Shuttle id</strong></td>
      <td><strong>Amout paid</strong></td>
      <td><strong>Source</strong></td>
      <td><strong>Destination</strong></td>
      <td><strong>Booked time</strong></td>
     </tr>
     <?php
     while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      $t0 = $row["rid"];
      echo "<td> $t0 </td>";
      $t1 = $row["sid"];
      echo "<td> $t1 </td>";
      $t2 = $row["fare"];
      echo "<td> $t2 </td>";
      $t3 = $row["source"];
      echo "<td> $t3 </td>";
      $t4 = $row["desti"];
      echo "<td> $t4 </td>";
      $t5 = $row["ridetime"];
      echo "<td> $t5 </td>";
      echo "</tr>";
     }
     ?>
    </table>
   </div>
  </div>
 </div>
</body>

</html>