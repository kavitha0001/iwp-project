<?php session_start();
$home = $_SESSION["home"]; ?>
<html lang="en">

<head>
 <title>Update Shuttle</title>
 <link rel="stylesheet" href="./css/style4.css?v=<?php echo time(); ?>">
</head>

<body style="background: #86afdb">
 <div style="background-color: #e6f2ff; padding: 1.4%; font-size: 20px; color:#626AC5; text-align: center"><a href="<?php echo $home ?>" style="text-decoration: none;">Updating Shuttle</a></div>
 <div class="centre">
  <form action="processupdation.php" method="POST">
   <img src="./image/bus.avif" alt="" width="300px" style="margin: 10px"> <br><br>
   <label for="sid">Enter Shuttle id : </label>
   <input type="text" name="sid" required> <br><br>
   <label for="type">Want to update ?</label> <br>
   <input type="radio" name="radio" value="shuttle type" checked><label for="type">shuttle type</label><br>
   <input type="radio" name="radio" value="driver name"><label for="type">driver name</label><br>
   <label for="type">Enter driver name: </label>
   <input type="text" name="dname">
   <br><br>
   <label for="type">Choose Shuttle Type</label> <br>
   <input type="radio" name="radio1" value="micro"><label for="type">micro</label><br>
   <input type="radio" name="radio1" value="mini"><label for="type">mini</label>
   <br><br>
   <button class="pay" style="padding: 5px 15px;" onclick="alert('updated successfully')">Update</button>
  </form>
 </div>
</body>

</html>