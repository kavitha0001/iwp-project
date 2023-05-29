<html>

<head>
  <title> Shuttle: Travel along! </title>
  <link rel="stylesheet" href="./css/style1.css?v=<?php echo time(); ?>">
</head>

<body>
  <div class="nav">
    <strong>Shuttle
    </strong>
    <a style="margin-left: 60%" href="#"><button type="submit" class="button1">Home</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="#"><button class="button1" type="submit">About
      </button></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;
    <a href="#"><button class="button1" type="submit">Feedback
      </button></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;
    <a href="./login.php"><button class="button1" type="submit">Login
      </button></a>
  </div>
  <!--navbar-->
  <form action="processindex.php" method="POST">
    <table>
      <td width="50%">
        <div class="signup">
          <div style="background-color: #CA895F; padding: 10px 100px; border-radius: 3px;">
            <label><strong>Sign-up with Shuttle</strong></label>
          </div> <br><br>
          <label for="name">
            <strong>Name:</strong> </label>
          <br>
          <input type="text" name="name" size="10" placeholder="Name" class="cont1" required>
          <br>
          <br>
          <label for="email"><strong>Email:</strong></label>
          <br>
          <input type="email" name="email" placeholder="Email" class="cont1" required>
          <br>
          <br>
          <label for="password"><strong>Password:</strong></label>
          <br>
          <input type="Password" name="password" placeholder="Password" class="cont1" required>
          <br>
          <br>
          <input type="radio" checked="checked" name="radio" value="user" class="cont2">
          <label class="container"><strong>User</strong>
          </label> <br>
          <input type="radio" name="radio" value="admin" class="cont2">
          <label class="container"><strong>Admin</strong>
          </label>
          <br> <br>
          <label required class="container">
            <input type="checkbox" class="cont2" checked>
            <strong>I accept to the terms and
              conditions</strong>
          </label> <br><br>
          <button name="add" type="submit" value="add" class="button2" onclick="alert('account created')"><label for="button"><strong>Submit</strong></label></button>
          <br>
        </div>
      </td>
      <td width="50%">
        <br>
        <br>
        <br>
        <img class="mainimg" src="image/bus.avif" alt="A comfortable shuttle
ride round the corner">
      </td>
    </table>
  </form>
</body>

</html>