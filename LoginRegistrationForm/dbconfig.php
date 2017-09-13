<?php
		error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
		if(!mysql_connect("localhost","root",""))
		{
			die('oops connection problem ! --> '.mysql_error());
		}
		if(!mysql_select_db("db_recruitment"))
		{
			die('oops database selection problem ! --> '.mysql_error());
		}
?>
 <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully';
         mysql_close($conn);
      ?>