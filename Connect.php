<?php

$con = new mysqli('localhost','root','','phonebookphp');

if (!$con)
{
	die(mysql_error($con));
}


?>