<?php

$link = mysqli_connect("localhost","kealcom","");

error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
if(!mysqli_connect("localhost","kealcom","rV2}]my6oeAg"))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysqli_select_db($link,"kealcom_career"))
{
	die('oops database selection problem ! --> '.mysql_error());
}

?>
