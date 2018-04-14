<?php
  // If we're going to set a cookie, we need to
  // do it before we output any content,
  // because cookies are sent as part of the
  // HTTP headers, which have to come before the payload.
  if ($_COOKIE['visited_before'] == 'Yes') {
    $visited_before = true;
  }
  else {
    setcookie('visited_before', 'Yes');
  }
?>
<html>
<head>
  <title>Voyager</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

  <?php
  include "connect.php";
  include "track_session.php";
  include "insert.php";
  // Format today's date as YYYY-MM-DD
 
  // Run a SQL query and store the results in $result
  // Always specify an order
  // * - all columns
  // FROM events - always specify the table name
  // ORDER BY - always specify an order and use ASC or DESC
  // WHERE - a condition
$sql = "SELECT * FROM questions ORDER BY RAND() LIMIT 0,1;";
  $result = $conn->query($sql);
  // If there is at least 1 row in the result, show all the rows
  if ($result->num_rows > 0) {
      // Get one row at a time until we're out of rows
       while ($row = $result->fetch_assoc()) {
          echo "<h2>";
          echo "{$row['question']}";
          echo "</h2>";
      }
  } else {
      echo "No events";
  }
  // Close the databse connection
  $conn->close();
  ?>

<div id="main">
  <form>
      <input name="email" value="enter your email here"> </br>
        <textarea name="text"></textarea> </br>
      <input type="submit" value="Add"> </br>
  </form>
</div>

</body>