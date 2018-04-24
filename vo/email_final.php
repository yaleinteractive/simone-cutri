
<html>
<head>
  <title>Voyager</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<div id="please">


<?php
 include "connect.php";


$sql = "SELECT * FROM user ORDER BY time";
  $result = $conn->query($sql);
  // If there is at least 1 row in the result, show all the rows
  if ($result->num_rows > 0) {
      // Get one row at a time until we're out of rows
       while ($row = $result->fetch_assoc()) {
          echo "<span id='final'>";
         // echo "<span id='time'>";
         // echo "{$row['time']}&nbsp";  
         // echo "</span>";
          echo "{$row['text']}&nbsp";
          echo "</span>";
      }
  } else {
      echo "";
  }




  $conn->close();
?>
</div>


</body>
</html>