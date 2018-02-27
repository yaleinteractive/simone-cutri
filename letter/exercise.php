
<html>

<head>
  <title>Fruit</title>
<head>

<body>

  <p>

    <?php
    // Store the get parameters in variables for convenience
    $letter = strtoupper($_GET['letter']);
    $number = $_GET['number'];
    $number = $number . 'px';
   	

  //  $color = $number;
 //  if ($color = 5 ) {
 //  echo "<img src='$letter$number.png'>"; 
 //   }//


    // Do what's in the {}, $number times
    $counter = 1;
    while ($counter <= $number) {
    //echo "<img src='$letter.png' width=$size> ";//
   
   	echo "<img src='$letter.png' . width='$number' . style='transform: translate($number, $number)'> ";
   
//    	if ($number = 10) {
//    	echo "<img src='$letter$number.png' width=$size";  'style=transform:translate(10);'
//    	}
//    	else {
//    	echo "<img src='$letter.png' width=$size";
//    	}
      $counter++;
    }

      

 
    ?>

  </p>

</body>

</html>