
<html>

<head>
  <title>Fruit</title>
<head>

<div style=""> </div>

<body>

  <p>

    <?php
    $letter = $_GET['letter'];
    $number = $_GET['number']
    $table = ['a','b','c','d','e','f'];
    $TableLength = count($table, COUNT_RECURSIVE);
 

    for($i = 0 ; $i < $TableLength ; $i++){
      
      if( $letter != $table[$i] ){
        echo "<img src='$table[$i].png';>";
      } else {
        echo "<img src='$table[$i].png';>";
        break;
      };
    };
    ?>

  </p>

</body>

</html>