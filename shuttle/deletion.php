<?php session_start();
$home = $_SESSION["home"]; ?>
<html lang="en">

<head>
 <title>Update Shuttle</title>
 <link rel="stylesheet" href="./css/style4.css?v=<?php echo time(); ?>">
</head>

<body style="background: #86afdb">
 <div style="background-color: #e6f2ff; padding: 1.4%; font-size: 20px; color:#626AC5; text-align: center"><a href="<?php echo $home ?>" style="text-decoration: none;">Removing Shuttle</a></div>
 <div class="centre">
  <form action="processdeletion.php" method="POST">
   <img src="./image/bus.avif" alt="" width="500px" style="margin: 10px"> <br><br>
   <label for="sid">Enter Shuttle id : </label>
   <input type="text" name="sid"> <br><br>
   <button class="pay" style="padding: 5px 15px;">Remove</button>
  </form>
 </div>
</body>

</html>