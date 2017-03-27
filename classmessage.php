<?php

  $conn = new mysqli('localhost', 'root', '', 'graderank');
  if(!$conn){
    die("Connection failed".mysqli_connect_error());
  }

  date_default_timezone_set('America/New_York');

  //Adding Grades to Class Data
  if (isset($_POST['gradeSubmit'])){
    $letter = mysql_real_escape_string($_POST['letter']);

    if ($letter == "A" || $letter == "A+") $letter = 4;
    if ($letter == "A-") $letter = 3.67;
    if ($letter == "B+") $letter = 3.33;
    if ($letter == "B") $letter = 3;
    if ($letter == "B-") $letter = 2.67;
    if ($letter == "C+") $letter = 2.33;
    if ($letter == "C")$letter = 2;
    if ($letter == "C-") $letter = 1.67;
    if ($letter == "D+") $letter = 1.33;
    if ($letter == "D")$letter = 1;
    if ($letter == "F")$letter = 0;

      $sql = "INSERT INTO score2(class, grade)". "VALUES ('$class', '$letter')";
      header("Location: CS171.php");

      if ($conn->query($sql)===true){
        $_SESSION['message'] = "Registration successful.";
      }

  }



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
