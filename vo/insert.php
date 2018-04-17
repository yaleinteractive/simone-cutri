<?php
/*  $email = $_GET['email'];
  $text = $_GET['text'];
  // If a title and a date were specified, insert a new event
  // into the database
  if ($email && $text) {
    // Construct SQL to insert a new row
    $sql = "INSERT INTO user (email, text)
                               VALUES('$email', '$text')";
    // Run the SQL
    $result = $conn->query($sql);
    echo "<h2>CONGRATS</h2>";
  }*/
?>

<?php
 $email = $_POST['email'];
  $text = $_POST['text'];
  // If a title and a date were specified, insert a new event
  // into the database
  if ($email && $text) {
    // Construct SQL to insert a new row
    $sql = "INSERT INTO user (email, text)
                               VALUES('$email', '$text')";
    // Run the SQL
    $result = $conn->query($sql);
    echo "<h3 id='finish'>Thank you and Welcome to the MemoryBank</h2>";
  };

$mailto=$_POST['email'];
$mailmsg=$_POST['text'];
$mailsub="memorybank";

 require 'PHPMailerAutoload.php';
 $mail = new PHPMAiler();
 $mail ->IsSmtp();
 $mail ->SMTPDebug = 1;
 $mail ->SMTPSecure = 'ssl';
 $mail ->Host = "smtp.gmail.com";
 $mail ->Port = 465 // or 587
 $mail ->IsHTML(true);
 $mail ->Username = "simone.cutri1@gmail.com";
 $mail ->Password = "enomis92";
 $mail ->SetFrom("memorybank"); 
 $mail ->Subject = $mailsub;
 $mail ->Body = $mailmsg;
 $mail ->AddAdress($mailto);

 if(!$mail->Send()){
  echo "Mail not sent";
 }
 else {
  echo "yes";
 }


?>

