<?php include_once "lib/Database.php"; ?>
<?php
	$db = new Database();
?>
	<?php
		$phone = $_GET['phone'];
	?>

	<?php
		$query = "UPDATE tbl_user_reg
		 SET
			status = '1'
		 WHERE phone = '$phone' ";
		 $update_row = $this->db->update($query);

		 if ($update_row) { ?>
		 	<script>
					alert('successfully verified, please login to proceed further');
			        window.location.href='LoginRegistrationForm/signup.php#tologin?success'; #make chage here.
			        </script>
		<?php } else { ?>
				<script>
					alert('Sorry! email id already taken');
					window.location.href='LoginRegistrationForm/signup.php#toregister';
			        
			        </script> 


	<?php } ?>


		
				
				
