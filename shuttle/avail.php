<?php session_start();
$home = $_SESSION["home"];
?>
<html lang="en">

<head>
 <title>Shuttle: Availability</title>
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
   <a href="./call.php">
    <button class="call">
     Call Shuttle
    </button>
   </a>
  </div>

  <?php
  $server = "localhost";
  $user = "root";
  $pass = "";
  $db = "Shuttle";
  $conn = mysqli_connect($server, $user, $pass, $db);
  if (!$conn)
   die("connection fail" . mysqli_connect_error());

  $sql = "select * from shuttleinfo";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  ?>

  <div class="container2">
   <div class="border2">
    <p>Shuttles Available</p>
   </div>
   <div class="avail">
    <table class="table">
     <tr>
      <td><strong>Shuttles</strong></td>
      <td><strong>Driver name</strong></td>
      <td><strong>Students waiting</strong></td>
      <td><strong>Vacancy</strong></td>
      <td><strong>Type of shuttle</strong></td>
     </tr>
     <?php
     while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      $t1 = $row["sid"];
      echo "<td> $t1 </td>";
      $t2 = $row["dname"];
      echo "<td> $t2 </td>";
      $t3 = $row["studwait"];
      echo "<td> $t3 </td>";
      $t4 = $row["vacancy"];
      echo "<td> $t4 </td>";
      $t5 = $row["type"];
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