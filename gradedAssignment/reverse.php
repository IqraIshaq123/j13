<!DOCTYPE html>
<html>
<head>
	<title>Reverse String</title>
</head>
<body>

<h1>Enter Any String</h1>
<form action="" method="POST">
		String:<input type="text" name="string">
		<input type="submit" name="submit">
</form>
<?php
if(isset($_POST["submit"]))
    {
    	rev($string=$_POST['string']);
    }
 function rev($string)
{
	$string;
        $ct = strlen($string);
        for($i=$ct; $i>=0; $i--) {
            echo "$string[$i]";
        }
}
?>

</body>
</html>