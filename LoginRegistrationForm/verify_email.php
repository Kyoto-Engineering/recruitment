<?php
include_once 'dbconfig.php';

$user_contact = $_GET['contact'];


$count=0;
	if($count == 0)
	{
		$sql="UPDATE tbl_user_reg SET verified='1' WHERE user_contact='$user_contact'";
		mysql_query($sql);
		?>
		<script>
		alert('successfully verified, please login to proceed further');
        window.location.href='recruitment_login_register.php?success'; #make chage here.
        </script>
		<?php
 }



	else
	{
		?>
		<script>
		alert('Sorry! email id already taken');
window.location.href='recruitment_login_register.php';
        
        </script>
		<?php
	}


?>

