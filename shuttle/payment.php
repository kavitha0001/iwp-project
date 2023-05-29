<html lang="en">

<head>
  <title>Make Payment</title>
  <link rel="stylesheet" href="./css/style4.css?v=<?php echo time(); ?>">
</head>

<body style="background: #86afdb">
  <div style="background-color: #e6f2ff; padding: 1.1%; font-size:
   25px; color:#626AC5; text-align: center;"><a href="addamount.php" style="text-decoration: none;">Payment Modes</a></div>
  <div class=" bottom">
    <div class="credit">
      <form action="payed.php" method="POST">
        <img src="./image/credit.webp" alt="" width="200px" style="margin: 10px"> <br><br>
        <input type="radio" name="radio"><label for="radio">Credit Card</label> <br><br>
        <label for="num">Card Number</label>
        <input type="text" name="num"> <br><br>
        <label for="card">Card Holder Name</label>
        <input type="text" name="card"> <br><br>
        <label for="exp">Expiry Date</label>
        <input type="date" name="exp"> <br><br>
        <label for="cvv">CVV*</label>
        <input type="text" name="cvv" required> <br><br>
        <label for="amount">Amount*</label>
        <input type="text" name="amount" required> <br><br>
        <button class="pay1" name="submit" style="padding: 5px 10px;" value="pay" onclick="alert('payment made successfully')">Make Payment</button>
      </form>
    </div>
    <div class="debit">
      <form action="payed.php" method="POST">
        <img src="./image/debit.png" alt="" width="200px" style="margin: 10px;"> <br><br>
        <input type="radio" name="radio"><label for="radio">Debit Card</label> <br><br>
        <label for="bank">Choose your bank</label>
        <select name="bank">
          <option value="select">--select--</option>
          <option value="iob">IOB</option>
          <option value="ib">Indian Bank</option>
          <option value="sbi">State Bank of India</option>
        </select> <br><br>
        <label for="num">Card Number</label>
        <input type="text" name="num"> <br><br>
        <label for="card">Card Holder Name</label>
        <input type="text" name="card" id="card"> <br><br>
        <label for="exp">Expiry Date</label>
        <input type="date" name="exp"> <br><br>
        <label for="cvv">CVV*</label>
        <input type="text" name="cvv" required> <br><br>
        <label for="amount">Amount*</label>
        <input type="text" name="amount" required> <br><br>
        <button class="pay1" name="submit" value="pay" style="padding: 5px 10px;" onclick="alert('payment made successfully')">Make Payment</button>
      </form>
    </div>
    <div class="banking">
      <form action="payed.php" method="POST">
        <img src="./image/net.webp" alt="" width="200px" style="margin: 0px;"> <br><br>
        <input type="radio" name="radio"><label for="radio">Net Banking</label> <br><br>
        <label for="bank">Choose your bank</label>
        <select name="bank">
          <option value="select">--select--</option>
          <option value="iob">IOB</option>
          <option value="ib">Indian Bank</option>
          <option value="sbi">State Bank of India</option>
        </select> <br><br>
        <label for="amount">Amount*</label>
        <input type="text" name="amount" required> <br><br>
        <button class="pay1" name="submit" value="pay" style="padding: 5px 10px;" onclick="alert('payment made successfully')">Make Payment</button>
      </form>
    </div>
  </div>
</body>

</html>