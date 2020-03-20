<form method= "GET">

<input type="text" name="person" >

 <button> Submit  </button>

   </form>
<?php
/*declaring the variable as the get function and to call the text input*/
$name = $_GET['person'];
//substituting the input to variable
echo $name." is my name";
?>