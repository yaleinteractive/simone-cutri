

<html>
<head>
  <title>Voyager</title>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
  <?php
  include "connect.php";
    include "insert.php";
 
$email = $_GET['email'];


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
      echo "";
  }
  // Close the databse connection
  $conn->close();
  ?>

<form enctype="multipart/form-data" method="post" id="second" action="different.php" autocomplete="off">
<textarea type="text" name="text" id="text" contenteditable="true" autofocus> </textarea>
<input type="hidden" name="email" value="<?php echo $_GET ['email'];?>" > </br>
<input type="submit" value="SEND" id="submit">
</form>

</body>
</html>
