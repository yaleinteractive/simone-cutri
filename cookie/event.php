<html>
<head>
  <title>Event</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

  <?php
  include "connect.php";
  // Get the ID number from the URL
  $id = $_GET['id'];
  // Run a SQL query and store the results in $result
  // Always specify an order
  // * - all columns
  // FROM events - always specify the table name
  // WHERE - a condition
  $sql = "SELECT * FROM palimpsest WHERE id = $id";
  $result = $conn->query($sql);
  // If there is at least 1 row in the result, show all the rows
  if ($result->num_rows > 0) {
      // Get one row at a time until we're out of rows
      while ($row = $result->fetch_assoc()) {
          echo "<h1>";
          echo $row['title'];
          echo "</h1>";
          echo "<h2>";
          echo $row['date'];
          echo "</h2>";
          echo "<p>";
          echo $row['what'];
          echo "</p>";
      }
  } else {
      die("Event not found");
  }
  // Close the databse connection
  $conn->close();
  ?>

  <p id="back">
    <a  href="index.php">Back</a>
  </p>

</body>