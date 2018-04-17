
<html>
<head>
  <title>Voyager</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

  <?php
  include "connect.php";

  // Format today's date as YYYY-MM-DD
 
  // Run a SQL query and store the results in $result
  // Always specify an order
  // * - all columns
  // FROM events - always specify the table name
  // ORDER BY - always specify an order and use ASC or DESC
  // WHERE - a condition
  ?>
<form id="email" method="post" action="form2.php" autocomplete="off">
    <input id="first" type="text" name="email" placeholder="Insert your email">
    <button type="button" onclick="return myFunc1()"> </button>
</form>


</body>
</html>