<!DOCTYPE html>
<html>
<head>
	<title>Sorting an Array</title>
</head>
<body>
<?php 
$numbers = array(40, 61, 2, 22, 13); 
sort($numbers); 
  
$arrlength = count($numbers); 
for($x = 0; $x < $arrlength; $x++) { 
    echo $numbers[$x]; 
    echo "<br>"; 
} 
?>
</body>
</html>