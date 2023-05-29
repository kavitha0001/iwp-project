<?php session_start();
$home = $_SESSION["home"];
?>
<html lang="en">

<head>
 <title>Shuttle: Delete Account</title>
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

  <div class="container2">
   <div class="border2">
    <p>Delete Account</p>
   </div>
   <div class="delete">
    <form action="deleted.php" method="POST">
     <label for="button" style="color: navy; font-size: 25px">Click here to delete your Account !</label> <br> <br>
     <button>Delete</button>
    </form>
   </div>
  </div>
 </div>
</body>

</html>