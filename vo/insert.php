<?php
/*  $email = $_GET['email'];
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
  }*/
?>

<?php
 $email = $_POST['email'];
  $text = $_POST['text'];
  // If a title and a date were specified, insert a new event
  // into the database
  if ($email && $text) {
    // Construct SQL to insert a new row
    $sql = "INSERT INTO user (email, text)
                               VALUES('$email', '$text')";
    // Run the SQL
    $result = $conn->query($sql);
    echo "<h3 id='finish'>Thank you and Welcome to the MemoryBank</h2>";
  }
?>

