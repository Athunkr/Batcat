<!DOCTYPE html>
<html>
<head>
	<title> enter value</title>
</head>
<body>
<form>
<input type="text" name= "Entval">
<button  type="submit" name="submit" value="submit"> Submit </button>
	
</form>
<?php
if(isset($_GET['Entval']))
{
$entvalue = $_GET['Entval'];
echo $entvalue;
}
?>


</body>
</html>