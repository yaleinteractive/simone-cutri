
<html>

<head>
  <title>Fruit</title>
<head>

<div style=""> </div>

<body>

  <p>

    <?php
    // Store the get parameters in variables for convenience
    $letter = strtoupper($_GET['letter']);
    // if($_GET["a"] === ['a']);
    // if($_GET["b"] === ['a'.'b']);
    // if($_GET["c"] === ['a'.'b'.'c']); 
    // if($_GET["d"] === ['a'.'b'.'c'.'d']);
    // if($_GET["e"] === ['a'.'b'.'c'.'d'.'e']);
    // if($_GET["f"] === ['a'.'b'.'c'.'d'.'e'.'f']);  
    $number = $_GET['number'];
    $number = $number . 'deg';
    

  //  $color = $number;
 //  if ($color = 5 ) {
 //  echo "<img src='$letter$number.png'>"; 
 //   }//


    // Do what's in the {}, $number times
    $counter = 1;
    while ($counter <= $number) 

    {
    if($letter === "A" ){
      echo "<img src='$letter.png' style='filter: hue-rotate($number);'> ";
    }else if($letter === "B"){
      echo "<img src='a.png' style='filter: hue-rotate($number);'> ";
      echo "<img src='$letter.png' style='filter: hue-rotate($number);'> ";
    }else if($letter === "C"){
      echo "<img src='a.png' style='filter: hue-rotate($number);'> ";
      echo "f style='filter: hue-rotate($number);'> ";
      echo "<img src='$letter.png' style='filter: hue-rotate($number);'> ";
    }else if($letter === "D"){
      echo "<img src='a.png' style='filter: hue-rotate($number);'> ";
      echo "<img src='b.png' style='filter: hue-rotate($number);'> ";
      echo "<img src='c.png' style='filter: hue-rotate($number);'> ";
      echo "<img src='$letter.png' style='filter: hue-rotate($number);'> ";
    }else if($letter === "E"){
      echo "<img src='a.png' style='filter: hue-rotate($number);'> ";
      echo "<img src='b.png' style='filter: hue-rotate($number);'> ";
      echo "<img src='c.png' style='filter: hue-rotate($number);'> ";
      echo "<img src='d.png' style='filter: hue-rotate($number);'> ";
      echo "<img src='$letter.png' style='filter: hue-rotate($number);'> ";
    }
    else if($letter === "F"){
      echo "<img src='a.png' style='filter: hue-rotate($number);'> ";
      echo "<img src='b.png' style='filter: hue-rotate($number);'> ";
      echo "<img src='c.png' style='filter: hue-rotate($number);'> ";
      echo "<img src='d.png' style='filter: hue-rotate($number);'> ";
      echo "<img src='e.png' style='filter: hue-rotate($number);'> ";
      echo "<img src='$letter.png' style='filter: hue-rotate($number);'> ";
    };
   // echo "<img src='$letter.png' style='filter: hue-rotate($number);'> ";
   
//      if ($number = 10) {
//      echo "<img src='$letter$number.png' width=$size";  'style=transform:translate(10);'
//      }
//      else {
//      echo "<img src='$letter.png' width=$size";
//      }
      $counter++;
    }




    // [1 - 50]
    //  filter: hue-rotate(10deg);
    // [59 - 100]
    //  filter: hue-rotate(40deg); 
    //  [101 - 150]
    //  filter: hue-rotate(70deg); 
    //   [151 - 200]
    //  filter: hue-rotate(100deg); 
    //   [201 - 250]
    //  filter: hue-rotate(130deg); 
    //  [201 - 250]
    //  filter: hue-rotate(160deg); 
    //    [251 - 300]
    //  filter: hue-rotate(190deg); 
    //  [301 - 350]
    //  filter: hue-rotate(220deg); 
    //    [351 - 400]
    //  filter: hue-rotate(250deg); 
    //   [401 - 450]
    //  filter: hue-rotate(280deg);
    //   [451 - 500]
    //  filter: hue-rotate(310deg);
    //  [501 - 550]
    //  filter: hue-rotate(340deg);
    //  [551 - 600]
    //  filter: hue-rotate(370deg);
    //   [601 - 650]
    //  filter: hue-rotate(400deg);
    ?>

  </p>

</body>

</html>