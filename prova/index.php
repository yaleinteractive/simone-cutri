
<html>

<head>
  <title>Fruit</title>
<head>

<div style=""> </div>

<body>

  <p>

    <?php
    $letter = $_GET['letter'];
    $table = ['a','b','c','d','e','f'];
    $TableLength = count($table, COUNT_RECURSIVE);

    for($i = 0 ; $i < $TableLength ; $i++){
      
      if( $letter != $table[$i] ){
        echo $table[$i];
      } else {
        echo 'sup';  
      };
    };
    ?>

  </p>

</body>

</html>