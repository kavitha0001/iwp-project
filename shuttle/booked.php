<?php session_start();
$home = $_SESSION["home"]; ?>
<html lang="en">

<head>
   <title>Shuttle: Note</title>
   <link rel="stylesheet" href="./css/style4.css?v=<?php echo time(); ?>">
</head>

<body style="background: #86afdb">
   <div style="background-color: #e6f2ff; padding: 1.4%; font-size: 20px; color:#626AC5; text-align: center">Booking is successful !!!</div>
   <a href="call.php">
      <button class="pay" style="padding: 5px 15px; margin: 100px 700px">
         <-Back </button></a>
</body>

</html>