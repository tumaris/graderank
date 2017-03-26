<?php

  $conn = new mysqli('localhost', 'root', '', 'graderank');
  if(!$conn){
    die("Connection failed".mysqli_connect_error());
  }

  date_default_timezone_set('America/New_York');
  function setComments($conn)
  {
    if (isset($_POST['commentSubmit'])){
      $uid = $_POST['uid'];
      $date = $_POST['date'];
      $message = $_POST['message'];

      $sql = "INSERT INTO comments (uid, date, message) VALUES('$uid', '$date', '$message')";
      $result = mysqli_query($conn, $sql);
      header("Location: cs171.php");
    }


  }

  function getComments($conn)
  {
    $sql = "SELECT * FROM comments";
    $result =  mysqli_query($conn, $sql);

    while($row = $result->fetch_assoc()){
      echo "<div id='D2'>";
      echo "<div id='commentbox'>";
        echo '<b>Date posted: </b>'. $row['date']."<br>";
        echo '<b> Review: </b>' . $row['message'];
      echo "</div>";
      echo "</div>"; 

    }
  }

?>
