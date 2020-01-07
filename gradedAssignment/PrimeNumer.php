<!DOCTYPE html>
<html>
<head>
	<title>Prime Numbers</title>
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
 	 if ( $number == 1 ) {
       echo "Not Prime";
    }
    
       for ( $i = 2 ; $i <= $number ; ++$i ) {
        if ( $number % $i == 0 ) {
            break;
        }
    }
 
    if( $number == $i ) {
        echo "Prime Number";
    } else {
       echo "Not Prime";
    }
    }

    
?>

</body>
</html>