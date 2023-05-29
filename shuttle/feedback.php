<?php session_start();
$home = $_SESSION["home"];
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shuttle:Feedback!</title>
  <link rel="stylesheet" href="./css/style2.css?v=<?php echo time(); ?>">
</head>

<body style="background: url(./image/feedback.jpg) center/cover fixed no-repeat;">
  <div class="nav">
    <strong>Shuttle</strong>
    <a style="margin-left: 60%" href=<?php echo $home ?> class="active"><button class="button1" type="submit">Home</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="./about.php"><button class="button1" type="submit">About</button></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;
    <a href="#"><button class="button1" type="submit">Feedback</button></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;
    <a href="./login.php"><button class="button1" type="submit">Logout</button></a>
  </div>
  <div class="two">
    <h1>Feedback</h1>
    <h2>We Welcome Feedbacks :)</h2>
    <form action="./feed.php">
      <textarea name="text" id="text" cols="40" rows="13"></textarea><br>
      <button class="feed">submit</button>
    </form>
    <h2>Contact Us</h2>
    <h3>Email id:</h3>
    <p>shuttle@gmail.com</p>
  </div>
</body>

</html>