
<?php

//let's start the session

session_start();

//now, let's register our session variables
session_register('name');
session_register('email_address');

//finally, let's store our posted values in the session variables

$_SESSION['name'] = $_POST['name'];

$_SESSION['email_address'] = $_POST['email_address'];

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
<form method="post" action="form_process.php">
<input type="text" name="text"> 
<input type="hidden" name="email" value="<?php echo $_POST['email'];?>" >

  
<input type="submit" value="Finish">
</form>

</body>
</html>
