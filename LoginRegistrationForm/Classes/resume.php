<?php include_once "../lib/Database.php"; ?>
<?php include_once "../helpers/Format.php"; ?>
<?php include_once "../lib/Session.php"; ?>

<?php
	/**
	* 
	*/
	class Resume
	{
		
		private $db;
		private $fm;
	public function __construct()
	
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

		public function getSchoolinfoby($uId){
		    $query = "SELECT p.*, c.pyear, j.divName, g.GName
				FROM tbl_school as p, tbl_passingyear as c, tbl_division as j, tbl_group as g
				WHERE p.divId = j.divId AND p.gId = g.gId AND p.pyearid = c.pyearid AND userId = '$uId'";
			//$query = "SELECT * FROM tbl_school WHERE userId = '$uId'";
			$result = $this->db->select($query);
			return $result;
		}

		public function getoLevelinfoby($uId){
			$query = "SELECT p.*, c.pyear, j.divName
				FROM tbl_olevel as p, tbl_passingyear as c, tbl_division as j
				WHERE p.divId = j.divId AND p.pyearid = c.pyearid AND userId = '$uId'";
			$result = $this->db->select($query);
			return $result;
		}

			public function gethscinfoby($uId){
			$query = "SELECT p.*, c.pyear, j.divName
				FROM tbl_hsc as p, tbl_passingyear as c, tbl_division as j,
				tbl_group as g
				WHERE p.divId = j.divId AND p.pyearid = c.pyearid AND userId = '$uId'";

		
		$value = $this->db->select($query);
		return $value;
		}

		public function getdiplomainfoby($uId){
			$query = "SELECT p.*, c.pyear, j.divName, d.deptName, g.degName
				FROM tbl_diploma as p, tbl_passingyear as c, tbl_division as j, tbl_department as d, tbl_degree as g
				WHERE p.divId = j.divId AND p.pyearid = c.pyearid AND p.degId = g.degId AND p.dId = d.dId AND userId = '$uId'";

		
		$value = $this->db->select($query);
		return $value;
		}

		public function getgraduationby($uId){
			$query = "SELECT p.*, c.pyear, d.studyDept, u.uName
				FROM tbl_grad as p, tbl_passingyear as c, tbl_studydept as d, tbl_university as u
				WHERE p.pyearid = c.pyearid AND p.studydeptId = d.studydeptId AND p.uId = u.uId AND userId = '$uId'";
			$value = $this->db->select($query);
			return $value;
		}

		public function updateStatus($status, $uId){
			
			$status = mysqli_real_escape_string($this->db->link, $status);

			$Mquery = "SELECT * FROM tbl_user_reg WHERE regId = '$uId'";
			$result = $this->db->select($Mquery)->fetch_assoc();
			$email = $result['email'];
			$userName = $result['userName'];

			if ($status == "") {
				$msg = "Please Give Your Opinion First & Then Click SEND";
				return $msg;
			}else{
				$query = "UPDATE `tbl_apply` SET `status`='$status' WHERE userId = '$uId'";
				$update_row = $this->db->update($query);
				if ($update_row) {
					
												?>
                                <script>
                                alert('About Requested Interview Schedule!');
                                window.location.href='create_schedule.php';
                                </script>
                            <?php


							$headers = 'From: '.$email."\r\n".
							 
							'Reply-To: '.$email."\r\n" .
							 
							'X-Mailer: PHP/' . phpversion();

							$email_to = "arnab.r@keal.com.bd";
							$email_subject= "About Requested Interview Schedule!";
							$email_message= "Admin Has Give Decession About This Candidate Re-Schedule Request:
							Name : $userName
							Email : $email";


							$headers1 = 'From: '.$email_to."\r\n".
							 
							'Reply-To: '.$email_to."\r\n" .
							 
							'X-Mailer: PHP/' . phpversion();

							$email_subject1= "Interview Schedule in Kyoto Automation & ENgineering Ltd.";
							$email_message1= "Dear $userName,

							Thank you for your interest in career in our company
							Congratulations!!

							Your application for Internship has been accepted. We would be delighted to hold a meeting with you on 
							any of the following day:
							
								Date
								Time
								Venue
								 
								Please confirm your participation by clicking the following link:
								 
								https://recruitment.keal.com.bd/
								 
								Prior to select your option please go to the following link and register yourself please make sure that you have completed all your academic information to the following portal:
								 
								https://recruitment.keal.com.bd/
								 
								Note: Your email is your username and put your mobile number as your password
								 
								Please do not write back to this email. If you are otherwise not contacted by us your interview date is confirmed. However, if you want to change your date please write an email request or send a request using the following link:
								 
								https://recruitment.keal.com.bd/
								 
								If  you do not want to participate please do not forget to click on the following link:
								 
								 
								Please bring along the following items during the interview:
								 
								1) All your Transcripts till date
								2) An updated CV Printed. If not you may take a print out of the same on the spot during interview
								3) Your Photo Identity Document, such as Passport, NID, Birth Registration etc.
								4) Academic Credentials.
								 
								See you then,
								 
								Thank you
								 
								Recruitment Office
								Kyoto Engineering & Automation Ltd
								B2 House 64 Block B Road 3
								Niketon Gulshan Dhaka 1212
								 
								Emergency Contact Numbers:
								 
								01844046621
								01844046666
								01844046677
							 
							";

							$email_message2= 'Date'.$date."\r\n";
							mail("<$email_to>","$email_subject","$email_message","$headers");

							mail("<$email>","$email_subject1","$email_message1","$headers1");
						}
			}
		}

		public function gettrainingby($uId){
		$query = "SELECT * FROM tbl_training WHERE userId = '$uId'";
		$result = $this->db->select($query);
		return $result;
		}

		public function getjobs($applicationId){
			$query = "SELECT p.*, j.jobtitle
				FROM tbl_apply as p, tbl_jobtitle as j
				WHERE p.jId = j.jId
				AND userId = '$applicationId'";

		
		$value = $this->db->select($query);
		return $value;
		}

		

		public function interviewSchedule($data,  $applicationId){
			$jId		   = $this->fm->validation($data['jId']);
			$interviewdate = $this->fm->validation($data['interviewdate']);
			$starttime	   = $this->fm->validation($data['starttime']);
			$endtime	   = $this->fm->validation($data['endtime']);
			$venue		   = $this->fm->validation($data['venue']);

			$jId		 	= mysqli_real_escape_string($this->db->link, $jId);
			$interviewdate	= mysqli_real_escape_string($this->db->link, $interviewdate);
			$starttime		= mysqli_real_escape_string($this->db->link, $starttime);			
			$endtime		= mysqli_real_escape_string($this->db->link, $endtime);
			$venue			= mysqli_real_escape_string($this->db->link, $venue);

			if ($jId == "" || $interviewdate == "" || $starttime = "" || $endtime == "" || $venue == "") {
				$msg = "<span style='color:red; font-style;blod;' >Set All For Scheduling</span>";
				return $msg;
			}
			
			$Cquery  = "SELECT * FROM tbl_interview WHERE jId = '$jId'";
				$check = $this->db->select($Cquery);
					if ($check) {
					$msg = "<span style='color:red;'>Already Scheduled InterView For This Job!!</span>";
					return $msg;
			}else{
				$insert_row = "INSERT INTO tbl_interview(jId, userId, interviewdate, starttime, endtime, venue) VALUES('$jId', '$applicationId', '$interviewdate', '$starttime', '$endtime', '$venue')";
				$result = $this->db->insert($insert_row);
				if ($result) {
					$msg = "<span style='color:green'>Schedule Set Successfully</span>";
					return $msg;
				}else{
					$msg = "<span style='color:red'>Schedule Not Set!!!</span>";
					return $msg;
				}
			}
		}

		/*public function getInschedule(){
			$query = "SELECT p.*, j.jobtitle
				FROM tbl_interview as p, tbl_jobtitle as j
				WHERE p.jId = j.jId
				ORDER BY p.jId DESC";

		
		$value = $this->db->select($query);
		return $value;
		}*/

		public function getApplicantid($uId){
			$Iquery = "SELECT userId FROM tbl_apply WHERE userId ='$uId' LIMIT 1";
			$result = $this->db->select($Iquery);
			return $result;
		}

		public function delByid($Did){
			$query = "DELETE FROM tbl_interview WHERE id = '$Did'";
			$delData = $this->db->delete($query);
			if ($delData) {
				echo "<script>window.location = 'create_schedule.php'</script>";
			}else{
				$msg = "Data Not Deleted";
				return $msg;
			}
		}

		public function geteditjobs($sId){
			$query  = "SELECT p.*, j.jobtitle
				FROM tbl_interview as p, tbl_jobtitle as j
				WHERE p.jId = j.jId AND p.id = '$sId'";
		$getCat = $this->db->select($query);
		return $getCat;
		}

		public function updateSchedule($data,  $id){
			$jId		   = $this->fm->validation($data['jId']);
			$interviewdate = $this->fm->validation($data['interviewdate']);
			$starttime	   = $this->fm->validation($data['starttime']);
			$endtime	   = $this->fm->validation($data['endtime']);
			$venue		   = $this->fm->validation($data['venue']);

			$jId		 	= mysqli_real_escape_string($this->db->link, $jId);
			$interviewdate	= mysqli_real_escape_string($this->db->link, $interviewdate);
			$starttime		= mysqli_real_escape_string($this->db->link, $starttime);			
			$endtime		= mysqli_real_escape_string($this->db->link, $endtime);
			$venue			= mysqli_real_escape_string($this->db->link, $venue);

			if ($jId == "" || $interviewdate == "" || $starttime = "" || $endtime == "" || $venue == "") {
				$msg = "<span style='color:red; font-style;blod;' >Set All For Scheduling</span>";
				return $msg;
			}else{
				$update_row = "UPDATE `tbl_interview` SET 
				jId = '$jId',
				interviewdate = '$interviewdate', 
				starttime = '$starttime', 
				endtime = '$endtime', 
				venue = '$venue'
				WHERE userId = '$id'";
				 
				
				$update = $this->db->update($update_row);
	    		if ($update) {
	    			$msg = "Schedule Updated!!";
	    			return $msg;
	    		}else{
	    			$msg = "Product Not Updated!!";
	    			return $msg;
	    		 }
			}
		}

		public function getscheduleJob(){
			$query = "SELECT p.*, j.jobtitle, u.userName
				FROM tbl_disappertime as p, tbl_jobtitle as j, tbl_user_reg as u
				WHERE p.jId = j.jId AND p.userId = u.regId ORDER BY  p.id DESC";
			$result = $this->db->select($query);
			return $result;
		}

		public function Confirmschedule($status, $id){
			
			$status = $this->fm->validation($status);
			$id      = mysqli_real_escape_string($this->db->link, $id);
			$status = mysqli_real_escape_string($this->db->link, $status);

		if(empty($status)){
			$msg = "Selection field is Empty!!";
			return $msg;
		}else{
			$query = "UPDATE tbl_disappertime
					  SET 
					  status = '$status'
					  WHERE id = '$id'";
			$update_row = $this->db->update($query);
			if($update_row){
				$msg = "<span style='color:green;'>Your Opinion For This Schedule Has Been Recorded Successfully...</span>";
				return $msg;

			}else{
				$msg = "Category Not Updated!";
				return $msg;
			}
		}
					}


		public function getUser($uId){
			$query = "SELECT * FROM tbl_user_reg WHERE regId = '$uId'";
			$result = $this->db->select($query);
			return $result;
		}
	}//main class