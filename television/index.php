
<html>
<head>
  <title>Calendar</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

  <?php
  include "connect.php";
  // Format today's date as YYYY-MM-DD
  $d = strtotime("+3 Saturday");
  echo date("Y-m-d", $d) ;
  // Run a SQL query and store the results in $result
  // Always specify an order
  // * - all columns
  // FROM events - always specify the table name
  // ORDER BY - always specify an order and use ASC or DESC
  // WHERE - a condition
  $sql = "SELECT * FROM palimpsest ORDER BY time DESC";
  $result = $conn->query($sql);
  // If there is at least 1 row in the result, show all the rows
  if ($result->num_rows > 0) {
      // Get one row at a time until we're out of rows
      while ($row = $result->fetch_assoc()) {
          echo "<div id=me>" ;
          echo "<h2>";
          echo "{$row['time']}. ";
          echo "<a href='event.php?id={$row['id']}'>";
          echo $row['title'];
          echo "</a>";
          echo "</h2>";
      }
  } else {
      echo "No events";
  }
  // Close the databse connection
  $conn->close();
  ?>

</body>