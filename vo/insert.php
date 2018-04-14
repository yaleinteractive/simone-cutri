<?php
  $email = $_GET['email'];
  $text = $_GET['text'];
  // If a title and a date were specified, insert a new event
  // into the database
  if ($email && $text) {
    // Construct SQL to insert a new row
    $sql = "INSERT INTO user (email, text)
                               VALUES('$email', '$text')";
    // Run the SQL
    $result = $conn->query($sql);
    echo "<h2>CONGRATS</h2>";
  }
?>