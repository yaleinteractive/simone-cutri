
<html>
<head>
  <title>Voyager</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

  <?php
  include "connect.php";
  include "insert.php";
  // Format today's date as YYYY-MM-DD
 
  // Run a SQL query and store the results in $result
  // Always specify an order
  // * - all columns
  // FROM events - always specify the table name
  // ORDER BY - always specify an order and use ASC or DESC
  // WHERE - a condition
  ?>
  <div id="wrapper">
<h3 style=" margin-top: 3%;"> You will receive an email now and then... </h3>
<h3> 1 week from today, 2 weeks from today, 1 month from today, 2 months from today, 4 months from today, 8 months from today,  1 year from today, 2 years from today, 4 years from today, 8 years from today, 16 years from today, 32 years from today, 64 years from today, 128 years from today, 256 years from today, ... </h3>
</div>
</body>
</html>