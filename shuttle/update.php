<?php session_start();
$home = $_SESSION["home"]; ?>
<html lang="en">

<head>
 <title>Update Shuttle</title>
 <link rel="stylesheet" href="./css/style4.css?v=<?php echo time(); ?>">
</head>

<body style="background: #86afdb">
 <div style="background-color: #e6f2ff; padding: 1.4%; font-size: 20px; color:#626AC5; text-align: center"><a href="<?php echo $home ?>" style="text-decoration: none;">Adding Shuttle</a></div>
 <div class="centre">
  <form action="processupdate.php" method="POST">
   <img src="./image/bus.avif" alt="" width="500px" style="margin: 10px"> <br><br>
   <label for="dname">Enter Driver Name : </label>
   <input type="text" name="dname"> <br><br>
   <label for="type">Choose Shuttle Type</label> <br>
   <input type="radio" name="radio" value="micro" checked><label for="type">micro</label><br>
   <input type="radio" name="radio" value="mini"><label for="type">mini</label> <br><br>
   <button class="pay" style="padding: 5px 15px;" onclick="alert('added successfully')">Add</button>
  </form>
 </div>
</body>

</html>