<?php

 include_once 'dbconfig.php';

$phone = $_GET['phone'];


$count=0;
	if($count == 0)
	{
		$sql="UPDATE tbl_user_reg SET status ='1' WHERE phone='$phone'";
		mysql_query($sql);
		?>
		<script>
		alert('successfully verified, please login to proceed further');
        window.location.href='login.php#tologin?success';
        </script>
		<?php
 }



	else
	{
		?>
		<script>
		alert('Sorry! email id already taken');
		window.location.href='login.php#tologin';
        
        </script>
		<?php
	}


?>


	
				
