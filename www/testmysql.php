<?php
$con = mysql_connect("localhost","vagrant","vagrant@vagrant");
if (!$con)
{
 die('Could not connect: ' . mysql_error());
}
else
{
 echo "Congrats! connection established successfully";
}
mysql_close($con);
?>
