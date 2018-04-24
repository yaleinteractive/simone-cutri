
<html>
<head>
  <title>Voyager</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


  <?php
  include "connect.php";
  include "insert.php";


$from="memorybank@gmail.com";
$email=$_POST['email'];
$subject="memorybank";
$message = "Thank you! $email ,You will receive an email now and then: 1 week from today, 2 weeks from today, 1 month from today, 2 months from today, 4 months from today, 8 months from today,  1 year from today, 2 years from today, 4 years from today, 8 years from today, 16 years from today, 32 years from today, 64 years from today, 128 years from today, 256 years from today, ... " ;



//$query .= "SELECT text FROM user ORDER BY time ASC";


mail($email, $subject, $message,"From:".$from);

print "<h2 id='question'> Thank you $email </br> and Welcome to the MemoryBank </h2>";

$conn->close();

?>


  <div id="wrapper">
<h3> You will receive an email now and then </h3>
<h3> 1 week from today, 2 weeks from today, 1 month from today, 2 months from today, 4 months from today, 8 months from today,  1 year from today, 2 years from today, 4 years from today, 8 years from today, 16 years from today, 32 years from today, 64 years from today, 128 years from today, 256 years from today, ... </h3>
</div>

<div id="please" style="margin-top: 24%;">

<?php
 include "connect.php";


$sql = "SELECT * FROM user ORDER BY time";
  $result = $conn->query($sql);
  // If there is at least 1 row in the result, show all the rows
  if ($result->num_rows > 0) {
      // Get one row at a time until we're out of rows
       while ($row = $result->fetch_assoc()) {
          echo "<span id='final'>";
          echo "{$row['text']}";
          echo "</span>";
          echo "<p id='time'>";
          echo "{$row['id']}&nbsp";  
          echo "</p>";
          
      }
  } else {
      echo "";
  }




  $conn->close();
?>
</div>

</body>
</html>