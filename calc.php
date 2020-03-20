<!DOCTYPE html>
<html>

<head>
<title> Calculator </title>

</head>
<body>
<form>
   <input type="text" name="N1" placeholder="Enter Here"> <br>
   <input type="text" name="N2" placeholder="Enter Here"> <br>
   
   <select name="Operator">
     <option>Select</option>
	 <option>Add</option>
     <option>Substract</option>
     <option>Multiply</option>
     <option>Divide</option>

	 </select>
	 <button name="submit" type="submit" value="submit"> Calculate </button>
	 
</form>
    <p> Result:</p>
	<?php
	   if (isset ($_GET ['submit']))
	   {
		   $re1= $_GET ['N1'];
		   $re2= $_GET ['N2'];
		   $operator= $_GET ['Operator'];
		   switch ($operator) {
			 case "Select":
			    echo "You need to select an operation";
				break;
			case "ADD":
			    echo $re1 + $re2;
				break;
			case "Substract":
			    echo $re1 - $re2;
			break;
			
			case "Multiply":
			    echo $re1 * $re2;
				break;
			case "Divide":
			    echo $re1 / $re2;
				break;
			   
		   }
		   
	   }
		   
	?>
</body>
</html>