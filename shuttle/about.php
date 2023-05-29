<?php session_start();
$home = $_SESSION["home"] ?>
<html lang="en">

<head>
  <title>Shuttle: About!</title>
  <link rel="stylesheet" href="./css/style2.css?v=<?php echo time(); ?>">
</head>

<body style="background: url(./image/about.PNG) center/cover fixed no-repeat;">
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
  <h1 style="color: #42855B; text-align: center; margin: 20px; font-size: 25px;">About Us</h1>
  <div class="one">
    <h1>US:</h1>
    <h2>We are a group of individuals studying at vit vellore made this website to for sake of the students of our
      institute.</h2> <br>
    <h1>MOTIVE:</h1>
    <h2>Our project is an online smart shuttle management system which lets the students manage
      their travel inside their college campuses in a faster and efficient manner. The system consists
      of student accounts who are frequent users of the college shuttle cabs. Students have an
      option of adding or reducing the credit(money) from their account for using the shuttle. The
      system keeps track of the number of shuttles available per day and manages the shuttles
      efficiently during peak hours of the day. It also keeps track of the number of passengers in the
      shuttles.</h2> <br>
    <h1>OBJECTIVE:</h1>
    <h2>The main objective of this project is to create a website to book a shuttle for the
      students in VIT as many students don’t carry cash. Through our Website, Students
      can pay the money through online payments in an easier way and can view all their
      ride history.
    </h2>
  </div>
</body>

</html>