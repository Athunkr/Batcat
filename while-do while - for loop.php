<!DOCTYPE html>
<html>
<body>
<?php
$counter= 1;
while( $counter <=5){
	echo " $counter Im while loop. <br>"; 
$counter++ ;
	}
?>

<?php
 $counter= 1;
 do {
	 echo "<br> $counter  Im do in the do whole loop.";
	 $counter++;
 }
while( $counter <= 5)
?>
<br>
<?php

for( $count = 5; $count >=1 ; $count--){
	echo '<br>'.$count.' Im for loop.' ;
	}
?>
</body>
</html>
