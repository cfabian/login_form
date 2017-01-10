<?php
ini_set('display_errors', 1);
session_start();
if(($_SESSION['login'] != 1)) {
  Header('Location:index.php');
}
?>

<!DOCTYPE html>
<html>
    <body>
        <title>SUCCESS!</title>
        <h1>You've successfully logged in.</h1>
    </body>
</html>