<?php
 include_once "lib/Session.php";
  Session::checkLogin();
  ?>

<?php include_once "lib/Database.php"; ?>
<?php include_once "helpers/Format.php"; ?>
<?php
/**
* class for sign up & sign ion
*/
class Signup
{
	
	private $db;
	private $fm;
	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}


	public function getspecilization(){
		$query = "SELECT * FROM tbl_specialization ORDER BY spId DESC";
		$result = $this->db->select($query);
		return $result;
	}

	public function getHeducation(){
		$query = "SELECT * FROM tbl_hedu ORDER BY HID DESC";
		$result = $this->db->select($query);
		return $result;
	}

	public function userRegistration($data){

		
		$userName     = mysqli_real_escape_string($this->db->link, $data['userName']);
		
		$email     = mysqli_real_escape_string($this->db->link, $data['email']);
		$phone     = mysqli_real_escape_string($this->db->link, $data['phone']);
		$dob       = mysqli_real_escape_string($this->db->link, $data['dob']);
		
		if ($userName == "" || $email == "" || $phone == "" || $dob == "" ) {
			
			$msg = "<span style='color:red'>Field Must Not Be Empty!!</span>";
			return $msg;
		}
		
		//email field must be uniqe so for doing uniqe need to do
		$mailquery = "SELECT * FROM tbl_user_reg WHERE email = '$email' OR phone= '$phone'  LIMIT 1";
		$mailchk   = $this->db->select($mailquery);
		if ($mailchk != false) {
			$msg = "<span style='color:red'>Email Or Phone Number Already exist!!</span>";
			return $msg;
			//email unique has done

		}else{
			
					
				
						$query = "INSERT INTO tbl_user_reg(userName, email, phone, dob) VALUES('$userName', '$email', '$phone', '$dob')";
	    	 			$inserted_row = $this->db->insert($query);

						if($inserted_row){

							?>
                                <script>
                                alert('Please check your email for account verification!');
                                window.location.href='LoginRegistrationForm/signup.php#tologin?success';
                                </script>
                            <?php


							$headers = 'From: '.$email."\r\n".
							 
							'Reply-To: '.$email."\r\n" .
							 
							'X-Mailer: PHP/' . phpversion();

							$email_to = "tauhidul.i@keal.com.bd";
							$email_subject= "Account Verification";
							$email_message= "This person has been registered and sent for email verification:
							Name : $userName
							Email : $email";


							$headers1 = 'From: '.$email_to."\r\n".
							 
							'Reply-To: '.$email_to."\r\n" .
							 
							'X-Mailer: PHP/' . phpversion();

							$email_subject1= "Account Verification!";
							$email_message1= "Dear $userName,

							Please go to the link below to verify your email and complete the registration process


							http://recruitment.keal.com.bd/LoginRegistrationForm/verify_email.php?phone=$phone

							 
							Best Regards,
							 
							 -Kyoto HRD

							 Cell-Phone: +88 04478014883
							 
							B7 House 64 Road 3 Block B Niketon Gulshan Dhaka - 1212 Bangladesh 
							Tel: +88 02 9856203, +88 02 9890687 Fax:+88 02 9885513";

							mail("<$email_to>","$email_subject","$email_message","$headers");

							mail("<$email>","$email_subject1","$email_message1","$headers1");

						}
					
				}
			}
	

		public function userLogin($email, $phone){
			//$email= mysqli_real_escape_string($this->db->link, $data['email']);
		    //$phone = mysqli_real_escape_string($this->db->link, $data['phone']);


		    //if (empty($email) || empty($phone)) {
		    	/*$msg = "Input User email or Pass";
				return $msg;
		    }

		    $query  = "SELECT * FROM tbl_user_reg WHERE email = '$email' AND phone = '$phone'";
		    	$result = $this->db->select($query);
		    	if ($result !=false) {
		    		$value = $result->fetch_assoc();

		    		Session::set("userLogin", true);
		    		Session::set("userId", $value['regId']);
		    		Session::set("userName",$value['userName']);
		    		echo "<script>window.location = 'index.php'</script>";

		    	} else{
		    		$msg = "<span style='color:red'>User email or Password Not Match</span>";
				    return $msg;
		    	}*/

		    		$email = $this->fm->validation($email);
					$phone = $this->fm->validation($phone);

		$email = mysqli_real_escape_string($this->db->link, $email);
		$phone = mysqli_real_escape_string($this->db->link, $phone);

		if (empty($email) || empty($phone)) {
			$logmsg = "Username Or Password Must Not be Empty!!";
			return $logmsg;
		}else{
			$query = "SELECT * FROM tbl_user_reg WHERE email = '$email' AND phone = '$phone' AND status = '1'";
			$result = $this->db->select($query);
			if ($result !=false) {
				$value = $result->fetch_assoc();
				Session::set("login", true);
				Session::set("userId",   $value['regId']);
				Session::set("userName", $value['userName']);
				
				header("Location:index.php");
			}else{
				$logmsg = "Username Or Password Not Match!!";
			    return $logmsg;
			}
		}
	}
	

}//main class
?>