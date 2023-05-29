<?php session_start();
$home = $_SESSION["home"]; ?>
<html lang="en">

<head>
 <title>Update Shuttle</title>
 <link rel="stylesheet" href="./css/style4.css?v=<?php echo time(); ?>">
</head>

<body style="background: #86afdb">
 <div style="background-color: #e6f2ff; padding: 1.4%; font-size: 20px; color:#626AC5; text-align: center"><a href="<?php echo $home ?>" style="text-decoration: none;">Reset Shuttle</a></div>
 <div class="centre">
  <form action="processreset.php" method="POST">
   <img src="./image/bus.avif" alt="" width="500px" style="margin: 10px"> <br><br>
   <label for="dname">Enter Shuttle id : </label><br>
   <input type="text" name="sid"> <br><br>
   <button class="pay" style="padding: 5px 15px;" onclick="alert('reset is success')">Reset</button><br><br>
   <label for="">*Reset shuttle only if that particular shuttle has completed it's ride</label>
  </form>
 </div>
</body>

</html>