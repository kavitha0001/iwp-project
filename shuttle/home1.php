<?php session_start();
$home = $_SESSION["home"] ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Shuttle: Home!</title>
  <link rel="stylesheet" href="./css/style1.css?v=<?php echo time(); ?>">
</head>

<body>
  <div class="nav">
    <strong>Shuttle</strong>
    <a style="margin-left: 60%" href=<?php echo $home ?>></a><button class="button1" type="submit">Home</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
        <p>dashboard</p>
      </div>
      <ul style="list-style: none;">
        <li>Modify Account
          <a href="./modify.php">
            <img src="./image/modify.png" alt=""> </a>
        </li><br>
        <li>Delete Account
          <a href="./delete.php">
            <img src="./image/delete.png" alt=""> </a>
        </li> <br>
        <li>Add Amount
          <a href="./addamount.php">
            <img src="./image/add.png" alt=""></a>
        </li>
        <br>
        <li>Shuttles Available
          <a href="./avail.php">
            <img src="./image/avail.png" alt=""></a>
        </li>
        <br>
        <li>View History
          <a href="./history.php">
            <img src="./image/history.png" alt=""> </a>
        </li>
        <br>
        <li>Shuttle Location
          <a href="./location.php">
            <img src="./image/loca.png" alt="">
        </li>
        </a>
        <br>
      </ul>
    </div>
  </div>
</body>

</html>