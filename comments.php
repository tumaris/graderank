<?php

  $conn = new mysqli('localhost', 'root', '', 'graderank');
  if(!$conn){
    die("Connection failed".mysqli_connect_error());
  }

  date_default_timezone_set('America/New_York');
  function setComments($conn){
    if (isset($_POST['commentSubmit'])){
      $uid = $_POST['uid'];
      $date = $_POST['date'];
      $message = $_POST['message'];

      $sql = "INSERT INTO comments (uid, date, message) VALUES('$uid', '$date', '$message')";
      $result = mysqli_query($conn, $sql);
    }

  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Comments</title>
  </head>
  <body>
    <?php
    echo
    "<form method='POST' action='".setComments($conn)."'>
      <input type='hidden' name='uid' value='anonymous'>
      <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
      <textarea name='message'></textarea><br>
      <button name='commentSubmit' value='submit'> Comments </button>
    </form>";
    ?>
  </body>
</html>
