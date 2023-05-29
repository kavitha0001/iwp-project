<?php session_start();
$home = $_SESSION["home"]; ?>
<html lang="en">

<head>
 <title>Call Shuttle</title>
 <link rel="stylesheet" href="./css/style4.css?v=<?php echo time(); ?>">
</head>

<body style="background: #86afdb">
 <div style="background-color: #e6f2ff; padding: 1.4%; font-size: 20px; color:#626AC5; text-align: center"><a href="<?php echo $home ?>" style="text-decoration: none;">Booking Shuttle</a></div>
 <div class="parent">
  <div class="left">
   <form action="processcall.php" method="POST">
    <img src="./image/bus.avif" alt="" width="400px" style="margin: 10px"> <br><br>
    <label for="sid">Enter Shuttle id</label><br>
    <input type="text" name="sid" required> <br><br>
    <label for="source">Select Source</label><br>
    <select name="source" id="" required>
     <option value="select">--select--</option>
     <option value="mb">mb</option>
     <option value="gdn">gdn</option>
     <option value="cdmm">cdmm</option>
     <option value="smv">smv</option>
     <option value="cbmr">cbmr</option>
     <option value="tt">tt</option>
     <option value="sjt">sjt</option>
     <option value="gb">gb</option>
     <option value="boys hostel">boys hostel</option>
     <option value="girls hostel">girls hostel</option>
    </select>
    <br><br>
    <label for="desti">Select Destination</label> <br>
    <select name="desti" id="" required>
     <option value="select">--select--</option>
     <option value="mb">mb</option>
     <option value="gdn">gdn</option>
     <option value="cdmm">cdmm</option>
     <option value="smv">smv</option>
     <option value="cbmr">cbmr</option>
     <option value="tt">tt</option>
     <option value="sjt">sjt</option>
     <option value="gb">gb</option>
     <option value="boys hostel">boys hostel</option>
     <option value="girls hostel">girls hostel</option>
    </select>
    <br><br>
    <button class="pay" style="padding: 5px 15px;">Book</button>
   </form>
  </div>
  <div class="right">
   <h2>Micro Shuttle</h2>
   <img src="./image/micro.jpg" alt="" width="250px" style="margin: 10px;">
   <p>Mini Shuttle is the smallest yet the most dearest child that will ensure that you'll have a comfortable ride</p>
   <p>Max Capacity: 15 persons<br>
    Cost: Rs.15
   </p> <br>
   <h2>Mini Shuttle</h2>
   <img src="./image/mini.jfif" alt="" width="250px" style="margin: 5px;">
   <p>Study, smooth and efficient, that is what Micro Shuttle offers you everytime</p>
   <p>Max Capacity: 20 persons<br>
    Cost: Rs.20
   </p>
  </div>
 </div>
</body>

</html>