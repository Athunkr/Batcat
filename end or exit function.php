<!DOCTYPE html>
<html>
<body>
/* in this end function(also called exit function) if 
the entered user name or password doesnt match the one
 here, then the code will die and echo "username or password is wrong"
 The @ symbol hides the default error and shows only the given echo of die function*/

<?php
@mysql_connect('localhost','athun','') or die ("Username or Password wrong.");
echo "Connected." ;

?>

</body>
</html>
