<?php include_once "lib/Database.php"; ?>
<?php include_once "helpers/Format.php"; ?>
<?php include_once "lib/Session.php"; ?>

<?php
	/**
	* 
	*/
	class Address
	{
		
		private $db;
		private $fm;
	public function __construct()
	
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

		public function getDivission(){
			$query  = "SELECT * FROM  tbl_division ORDER BY divId DESC";
			$result = $this->db->select($query);
			return $result; 
		}

		public function getDistrict(){
			$query  = "SELECT * FROM  tbl_district ORDER BY distId DESC";
			$result = $this->db->select($query);
			return $result; 
		}

		public function getThana(){
			$query  = "SELECT * FROM  tbl_thana ORDER BY thId DESC";
			$result = $this->db->select($query);
			return $result; 
		}

		public function getpostName(){
			$query  = "SELECT * FROM  tbl_post ORDER BY postId DESC";
			$result = $this->db->select($query);
			return $result; 
		}

		public function getPCode(){
			$query  = "SELECT * FROM  tbl_pcode ORDER BY codeId DESC";
			$result = $this->db->select($query);
			return $result; 
		}

		public function getsameadd(){
			$query  = "SELECT * FROM  tbl_same ORDER BY id DESC";
			$result = $this->db->select($query);
			return $result;
		}

		public function addressInsert($data){
			$flat 		 = $this->fm->validation($data['flat']);
			$holding 	 = $this->fm->validation($data['holding']);
			$building 	 = $this->fm->validation($data['building']);
			$block 		 = $this->fm->validation($data['block']);
			$area 		 = $this->fm->validation($data['area']);
			
			$divId 		 = $this->fm->validation($data['divId']);
			$distId 	 = $this->fm->validation($data['distId']);
			$thId 		 = $this->fm->validation($data['thId']);
			$postId 	 = $this->fm->validation($data['postId']);
			/*$codeId 	 = $this->fm->validation($data['codeId']);*/

			$flat		 = mysqli_real_escape_string($this->db->link, $flat);
			$holding	 = mysqli_real_escape_string($this->db->link, $holding);
			$building	 = mysqli_real_escape_string($this->db->link, $building);
			$block		 = mysqli_real_escape_string($this->db->link, $block);
			$area		 = mysqli_real_escape_string($this->db->link, $area);

			$divId		 = mysqli_real_escape_string($this->db->link, $divId);
			$distId		 = mysqli_real_escape_string($this->db->link, $distId);
			$thId		 = mysqli_real_escape_string($this->db->link, $thId);
			$postId		 = mysqli_real_escape_string($this->db->link, $postId);
			

			if ($holding == "" || $block == "" || $divId == "" || $distId == "" || $thId == "" || $postId == "") {
				$msg = "Fill ALL Address";
				return $msg;
			} else{
				$query ="INSERT INTO tbl_address(flat, holding, building, block, area, divId, distId, thId, postId) VALUES ('$flat', '$holding', '$building', '$block', '$area', '$divId', '$distId', '$thId', '$postId')";
				$result = $this->db->insert($query);
				if ($result) {
					$msg = "Your present Address has been recorded";
					return $msg;
				}else{
					$msg = "Your present Address not recorded";
					return $msg;
				}
			}

		}

		public function paddressInsert($data){

			$id 	     = $this->fm->validation($data['id']);
			$flat 		 = $this->fm->validation($data['flat']);
			$holding 	 = $this->fm->validation($data['holding']);
			$building 	 = $this->fm->validation($data['building']);
			$road 		 = $this->fm->validation($data['road']);
			$block 		 = $this->fm->validation($data['block']);
			$area 		 = $this->fm->validation($data['area']);
			
			$divId 		 = $this->fm->validation($data['divId']);
			$distId 	 = $this->fm->validation($data['distId']);
			$thId 		 = $this->fm->validation($data['thId']);
			$postId 	 = $this->fm->validation($data['postId']);
			/*$codeId 	 = $this->fm->validation($data['codeId']);*/

			$id		 	 = mysqli_real_escape_string($this->db->link, $id);
			$flat		 = mysqli_real_escape_string($this->db->link, $flat);
			$holding	 = mysqli_real_escape_string($this->db->link, $holding);
			$building	 = mysqli_real_escape_string($this->db->link, $building);
			$road		 = mysqli_real_escape_string($this->db->link, $road);
			$block		 = mysqli_real_escape_string($this->db->link, $block);
			$area		 = mysqli_real_escape_string($this->db->link, $area);

			$divId		 = mysqli_real_escape_string($this->db->link, $divId);
			$distId		 = mysqli_real_escape_string($this->db->link, $distId);
			$thId		 = mysqli_real_escape_string($this->db->link, $thId);
			$postId		 = mysqli_real_escape_string($this->db->link, $postId);

			$query = "INSERT INTO tbl_paddress(id,flat, holding, building,road, block, area, divId, distId, thId, postId) VALUES('$id','$flat', '$holding', '$building','$road', '$block','$area', 'divId', '$distId', '$thId', '$postId')";
				$result = $this->db->insert($query);
				if ($result) {
					$msg = "Your Permanent Address has been recorded";
					return $msg;
				}else{
					$msg = "Your Permanent Address not recorded";
					return $msg;
				}
		}

		public function infoInsert($data){
			$tInstitution 	= $this->fm->validation($data['tInstitution']);
			$trainingName 	= $this->fm->validation($data['trainingName']);
			$tTopic 		= $this->fm->validation($data['tTopic']);
			$tLenth 		= $this->fm->validation($data['tLenth']);

			$tInstitution = mysqli_real_escape_string($this->db->link, $tInstitution);
			$trainingName = mysqli_real_escape_string($this->db->link, $trainingName);
			$tTopic		  = mysqli_real_escape_string($this->db->link, $tTopic);
			$tLenth		  = mysqli_real_escape_string($this->db->link, $tLenth);

			if ($tInstitution == "" || $trainingName == "" || $tTopic == ""	|| $tLenth == "") {
				$msg = "Field Must Not be Empty!!";
				return $msg;
			}else{
				$query = "INSERT INTO tbl_training(tInstitution, trainingName, tTopic, tLenth) VALUES('$tInstitution', '$trainingName', '$tTopic', '$tLenth')";
				$result = $this->db->insert($query);
				if ($result) {
					$msg = "Inserted";
					return $msg;
				}else{
					$msg = "Not Inserted";
					return $msg;
				}
			}

		}
		public function personalInfo($data, $userId){
			
			$perName 		= $this->fm->validation($data['perName']);
			$perEmail 		= $this->fm->validation($data['perEmail']);
			$perPhone 		= $this->fm->validation($data['perPhone']);
			$dob 			= $this->fm->validation($data['dob']);
			$gender 		= $this->fm->validation($data['gender']);
			$nId 		= $this->fm->validation($data['nId']);
			$maritalStatus 	= $this->fm->validation($data['maritalStatus']);

			
			$perName = mysqli_real_escape_string($this->db->link, $perName);
			$perEmail = mysqli_real_escape_string($this->db->link, $perEmail);
			$perPhone = mysqli_real_escape_string($this->db->link, $perPhone);
			$dob = mysqli_real_escape_string($this->db->link, $dob);
			$gender = mysqli_real_escape_string($this->db->link, $gender);
			$nId = mysqli_real_escape_string($this->db->link, $nId);
			$maritalStatus = mysqli_real_escape_string($this->db->link, $maritalStatus);

			if ($perName == "" || $perEmail == "" || $perPhone == "" || $dob == "" || $gender == "" || $nId == "" || $maritalStatus == "") {

				$msg = "Field Must Not be Empty!!";
				return $msg;
			}else{
				$query = "INSERT INTO tbl_personalinfo(userId, perName, perEmail, perPhone, dob, gender, nId, maritalStatus) VALUES('$userId','$perName', '$perEmail', '$perPhone', '$dob', '$gender', '$nId', '$maritalStatus')";
				$result = $this->db->insert($query);
				if ($result) {
					$msg = "Personal Info recorded";
					return $msg;
				}else{
					$msg = "Personal Info not recorded";
					return $msg;
				}
			}


		}

	}//main class
?>