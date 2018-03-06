
<html>

<head>
  <title>Fruit</title>
  <style type="text/css">

  @keyframes example {
    from {filter: hue-rotate(20deg);}
    to {filter: hue-rotate(300deg);}
    }

  .one {
    animation-name: example;
    animation-duration: 20s;
  }

  </style>
<head>

<div style=""> </div>

<body>

  <p>

    <?php
    $letter = $_GET['letter'];
    $number = $_GET['number'];

    $size = $number/20; 

    $table = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    $TableLength = count($table, COUNT_RECURSIVE);
 
    $counter = 1;
    while ($counter <= $number){

        if($number <= 100 ){
          $className = "one";
        }else if($number > 100 || $number <= 200 ){
          $className = "due";
        }else if($number > 200 || $number <= 400){
          $className = "tre";
        };


        for($i = 0 ; $i < $TableLength ; $i++){
      
            if( $letter != $table[$i] ){
              echo "<img src='$table[$i].svg' width='$size'; class='one'>";
            } else {
               echo "<img src='$table[$i].svg' width='$size'; class='one'>";
               break;
            };

            usleep(100000);
            flush();

    };

     $counter++;}
    ?>

  </p>

</body>

</html>