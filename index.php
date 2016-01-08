<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="iso-8859-15">
	<title>Randomify</title>
</head>
<body>
	<?php
		include("randomify.php");

		echo rndBool();

		echo "<br>\n"; 
		echo mt_rand(33,101001); 
		echo "<br>\n"; 
		echo rndFloat(3,65677,4);

		echo "<br>\n"; 
		echo rndLowercase();
		echo "<br>\n"; 
		echo rndUppercase();


		echo "<br>\n"; 
		echo rndDigitsArr();

		echo "<br>\n"; 
		echo rndSpecialChar();

		echo "<br>\n"; 
		echo rndHex();

		echo "<br>\n"; 
		echo rndStr(10);

		echo "<br>\n"; 
		echo "<br>\n"; 
		echo "<br>\n"; 
		echo "<br>\n"; 
		echo "<br>\n"; 
		echo "<br>\n"; 
		echo "<br>\n"; 
		echo "<br>\n"; 
		echo rndRgb();
		echo "<br>\n"; 
		echo rndRgba();
		echo "<br>\n"; 
		echo rndHexColor();





	?>
</body>
</html>