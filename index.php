<!DOCTYPE html>
<html>
<head>
	<title>Chess</title>
</head>
<body>
<h1> IT'S UP TO THE </h1>
hello 
<?php

	$letter = $_GET['letter'];
	$number = $_GET['number'];
	
	$counter = 1;

	while ($counter <= $number) {
		if ($counter === 6) {
			echo "6 ";
		}		
		else {
			echo "$letter ";
		  	system(escapeshellcmd("say $letter"));
		  	flush();
	  	}
	  	$counter++;
	}

?>

<P>
CIAO <em> MAMMA</em> </P>
</body>
</html>
