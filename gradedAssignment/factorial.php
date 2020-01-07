<!DOCTYPE html>
<html>
<head>
	<title>Factorial</title>
</head>
<body>
	<h1>Enter Any Number</h1>
<form action="" method="POST">
		Number:<input type="text" name="number">
		<input type="submit" name="submit">
</form>
<?php
if(isset($_POST["submit"]))
    {
    	check($number=$_POST['number']);
    }
 function check($number)
 {

$factorial = 1;
for ($number; $number>=1; $number--) 
{
  $factorial = $factorial * $number;
}
echo "Factorial is $factorial";
 }
 ?>
</body>
</html>