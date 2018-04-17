

<html>
<head>
  <title>Voyager</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript">
$(document).ready(function() {
    // focus on the first visible and enabled input field or textarea
    $(":input:visible:enabled").each(function() {
        if (($(this).attr('type') == 'text') && ($(this).is('input'))){
            $(this).focus();
            return false; 
        }
        if ($(this).is('textarea')){
            $(this).focus();
            return false; 
        }       
    });
});
</script>
</head>

<body>
  <?php
  include "connect.php";
 

//finally, let's store our posted values in the session variables
$_SESSION['email'] = $_POST['email'];
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
          echo "<h2 id='question'>";
          echo "{$row['question']}";
          echo "</h2>";
      }
  } else {
      echo "No events";
  }
  // Close the databse connection
  $conn->close();
  ?>

<form method="post" id="second" action="email.php" autocomplete="off">
<textarea type="text" name="text" id="text" contenteditable="true"> </textarea>
<input type="hidden" name="email" value="<?php echo $_POST['email'];?>" > </br>
<input type="submit" value="SEND" id="submit">
</form>

</body>
</html>
