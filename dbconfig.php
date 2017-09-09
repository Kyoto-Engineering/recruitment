<?php

$link = mysqli_connect("localhost","user","pass");

error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
if(!mysqli_connect("localhost","user","pass"))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysqli_select_db($link,"kealcom_recruitment"))
{
	die('oops database selection problem ! --> '.mysql_error());
}

?>
