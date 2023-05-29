<?php session_start();
$home = $_SESSION["home"];
?>
<html lang="en">

<head>
 <title>Shuttle: Addamount</title>
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
    <p>Add Amount</p>
   </div>
   <h1 style="color: navy; font-size: 25px">Choose your payment mode</h1> <br> <br> <br> <br>
   <div class="add">
    <h2>Credit Card</h2>
    <div class="img">
     <a href="./payment.php">
      <img src="./image/credit.webp" alt="" width="100px">
     </a>
    </div>
    <h2>Debit Card</h2>
    <div class="img">
     <a href="./payment.php">
      <img src="./image/debit.PNG" alt="" width="100px">
     </a>
    </div>
    <h2>Net Banking</h2>
    <div class="img">
     <a href="./payment.php">
      <img src="./image/net.webp" alt="" width="100px">
     </a>
    </div>
   </div>
  </div>
 </div>
</body>

</html>