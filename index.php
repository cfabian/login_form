<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <body>
    <title>LOGIN</title>
    <form method="POST" action="login.php" class="login">
      <p>
        <label for="login">Username:</label>
        <input type="text" name="user" id="login">
      </p>
  
      <p>
        <label for="password">Password:</label>
        <input type="password" name="pass" id="password">
      </p>
  
      <p class="login-submit">
        <button type="submit" name="submit" class="login-button">Login</button>
      </p>
      <font color=#FF0B0B> <?php echo $_SESSION['message']; ?> </font>
    </form>
  </body>
</html>