
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

   .formbox {
        position:fixed;
        bottom:0px;
        left:0;
        width:100vw;
        height:25px;
        z-index:100;
      }
      form {
        position:fixed;
        bottom:5px;
        left:10px;
        padding:2px;

      }
      input {
        width:  80px;
        height: 30px;
        border: 3px solid black;
        
      }
      input:focus {
        color:initial;
        outline:none;
      }
      .button {
        border: 3px solid black;
      }

  </style>
<head>

<div style=""> </div>

<body>

  <p>

    <?php
    $letter = $_GET['letter'];
    $number = $_GET['number'];

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
              echo "<img src='$table[$i].png' class='one'>";
            } else {
               echo "<img src='$table[$i].png' class='one'>";
               break;
            };

            usleep(1);
            flush();

    };

     $counter++;}
    ?>

  </p>

</body>

</html>