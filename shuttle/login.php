<!DOCTYPE html>
<html lang="en">

<head>
 <title>Shuttle: Travel along!</title>
 <link rel="stylesheet" href="./css/style1.css?v=<?php echo time(); ?>">
</head>

<body>
 <div class="login">
  <h1 style="color: white">Login</h1> <br>
  <form action="processlogin.php" method="POST">
   <label for="name"><strong>Name:</strong></label>
   <br>
   <input type="text" name="name" placeholder="Username" class="cont1">
   <br>
   <br>
   <label for="password"><strong>Password:</strong></label>
   <br>
   <input type="Password" name="password" placeholder="Password" class="cont1">
   <br>
   <br>
   </label>
   <button name="add" type="submit" value="add" class="button2" style="margin: 10px 50px;"><label for="button"><strong>Login</strong></label></button>
   </button>
   <button name="add" type="submit" value="add" class="button2"><label for="button"><strong><a href="./index.php" style="color: black; text-decoration:none">Signup</a></strong></label></button>
  </form>
 </div>
</body>

</html>