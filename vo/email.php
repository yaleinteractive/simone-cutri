<?php
  include "connect.php";
?>


<?php

$from="memorybank@gmail.com";
$email=$_POST['email'];
$subject="memorybank";
$message=$_POST['text'];

mail($email, $subject, $message,"From:".$from);

print "your message has been sent </br> $email </br> $message"

?>	