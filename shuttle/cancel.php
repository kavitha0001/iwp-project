<?php session_start();
$home = $_SESSION["home"]; ?>
<html lang="en">

<head>
 <title>Update Shuttle</title>
 <link rel="stylesheet" href="./css/style4.css?v=<?php echo time(); ?>">
</head>

<body style="background: #86afdb">
 <div style="background-color: #e6f2ff; padding: 1.4%; font-size: 20px; color:#626AC5; text-align: center">Cancel Booking</div>
 <div class="centre">
  <form action="processcancel.php" method="POST">
   <img src="./image/bus.avif" alt="" width="500px" style="margin: 10px"> <br><br>
   <label for="rid">Enter Ride id : </label>
   <input type="text" name="rid"> <br><br>
   <button class="pay" style="padding: 5px 15px;">Cancel</button>
  </form>
  <h4 style="margin-top: 20px;">Note: </h4>
  <p>1) Booking can be cancelled only before riding, because for every ride booking history of the student will be cheked</p>
  <p>2) Amount will be returned to student's account after booking is cancelled</p>
 </div>
</body>

</html>