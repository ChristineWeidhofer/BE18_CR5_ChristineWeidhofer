<?php
if(isset($_POST["submit"])){
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL); // simple validation for email
  $msg = filter_var($_POST["msg"], FILTER_SANITIZE_FULL_SPECIAL_CHARS); //validation for string
  $headers = "FROM : ". $email . "\r\n";
  $myEmail = "irishsinxtine@gmail.com";
  if(mail($myEmail, "You got a new message coming from the contact form on your website!", $msg, $headers)){
    echo "<h3 class='m-4'>Your message was sent!</h3>";
  }else {
    echo "There was an error sending your message.";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <?php require_once 'components/boot.php' ?>
  <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
  <div class="manageProduct">
  
    <form method="POST" class="log-con-form mx-auto" action="<?= $_SERVER["SCRIPT_NAME"] ?>">
    <h2>Contact</h2>
    <hr />
    <div class="mb-3">
      <label for="EmailAddress" class="form-label">Email address:</label>
      <input type="email" class="form-control" id="EmailAddress" placeholder="name@example.com" name="email" required>
    </div>
    <div class="mb-3">
      <label for="EmailTextarea" class="form-label">Your message:</label>
      <textarea class="form-control" id="EmailTextarea" placeholder="Your message goes here ..." rows="3" name="msg" required></textarea>
    </div>
    <div class="col-auto">
      <input type="submit" class="btn btn-secondary mb-3" name="submit" value="Send">
    </div>
    </form>
  </div>  
  <div class="login"></div>
</body>
</html>