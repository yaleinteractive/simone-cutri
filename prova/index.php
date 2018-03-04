
<html>

<head>
  <title>Fruit</title>
<head>

<div style=""> </div>

<body>

  <p>

    <?php
    $letter = $_GET['letter'];
    $number = $_GET['number'];
    $number = $number . 'deg';

    $table = ['a','b','c','d','e','f'];
    $TableLength = count($table, COUNT_RECURSIVE);
 
    $counter = 1;
    while ($counter <= $number){

        for($i = 0 ; $i < $TableLength ; $i++){
      
            if( $letter != $table[$i] ){
              echo "<img src='$table[$i].png'; style='filter: hue-rotate($number);'>";
            } else {
               echo "<img src='$table[$i].png'; style='filter: hue-rotate($number);'>";
                break;
            };
    };

     $counter++;}
    ?>

  </p>

</body>

</html>