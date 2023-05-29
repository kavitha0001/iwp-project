<?php session_start();
$home = $_SESSION["home"];
?>
<html lang="en">

<head>
 <title>Shuttle: Modify Account</title>
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
    <p>Modify Account</p>
   </div>
   <div class="modi">
    <div class="modi1">
     <form action="modified.php" method="POST">
      <h2>To modify your username</h2> <br>
      <p style="font-size: 20px; color: black">Enter new username:</p>
      <input type="text" name="mname">
      <input type="submit" value="update name" name="submit" style="font-size: 15px; padding: 2px 10px; margin-top: 4px">
     </form>
    </div>
    <div class="modi2">
     <form action="modified.php" method="post">
      <h2>To modify your password</h2> <br>
      <p style="font-size: 20px; color: black">Enter new password:</p>
      <input type="password" name="mpass">
      <input type="submit" value="update password" name="submit" style="font-size: 15px; padding: 2px 10px; margin-top: 4px">
     </form>
    </div>
    <div class="modi3">
     <form action="modified.php" method="POST">
      <h2>To modify your email id</h2> <br>
      <p style="font-size: 20px; color: black">Enter new email id:</p>
      <input type="email" name="memail" id="mail">
      <input type="submit" value="update email" name="submit" style="font-size: 15px; padding: 2px 10px; margin-top: 4px">
     </form>
    </div>
   </div>
  </div>
 </div>
</body>

</html>