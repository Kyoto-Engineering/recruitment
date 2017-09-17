<?php include_once "../../lib/Database.php"; ?>
<?php include_once "../../helpers/Format.php"; ?>
<?php include_once "../../lib/Session.php"; ?>

<?php
	/**
	* 
	*/
	class Module
	{
		private $db;
		private $fm;

		public function __construct()
	
		{
			$this->db = new Database();
			$this->fm = new Format();
		}	

		public function degreeCreate($data){
			$degreeName = $this->fm->validation($data['degreeName']);
			$degreeName	= mysqli_real_escape_string($this->db->link, $degreeName);

			if ($degreeName == "") {
				$msg = "Field Must Not Be Empty!!";
				return $msg;

			}
				$dgquery = "SELECT * FROM tbl_degree WHERE degreeName = '$degreeName' LIMIT 1";
				$dgchk   = $this->db->select($dgquery);
				if ($dgchk != false) {
					$msg = "<span style='color:red'>Degree Already exist!!</span>";
					return $msg;
					//email unique has done

				} else {
					$query  = "INSERT INTO tbl_degree(degreeName) VALUES ('$degreeName')";
					$result = $this->db->insert($query);
					if ($result) {
						$msg = "Degree Name Inserted";
						return $msg;
					}else{
						$msg = "Degree Name Not Inserted";
						return $msg;
				}
			}
		}


		public function departmentCreate($data){
			$deptName 	 = $this->fm->validation($data['deptName']);
			$description = $this->fm->validation($data['description']);

			$deptName = mysqli_real_escape_string($this->db->link, $deptName);
			$description = mysqli_real_escape_string($this->db->link, $description);

			if ($deptName == "" || $description == "") {
				$msg = "Department Name Inserted";
						return $msg;
			}
			$dpquery = "SELECT * FROM tbl_department WHERE deptName = '$deptName' LIMIT 1";
				$dpchk   = $this->db->select($dpquery);
				if ($dpchk != false) {
					$msg = "<span style='color:red'>Department Already exist!!</span>";
					return $msg;
					//email unique has done

				} else {
					$query  = "INSERT INTO tbl_department(deptName, description) VALUES ('$deptName', '$description')";
					$result = $this->db->insert($query);
					if ($result) {
						$msg = "Department Name Inserted";
						return $msg;
					}else{
						$msg = "Department Name Not Inserted";
						return $msg;
				}
			}
		}


		public function getAlljobs(){
			$query ="SELECT * FROM tbl_jobtitle ORDER BY jid DESC";
			$result = $this->db->select($query);
			return ($result);
		}

		public function getAllDept(){
			$query ="SELECT * FROM tbl_department ORDER BY did DESC";
			$result = $this->db->select($query);
			return ($result);
		}
		public function getMinimumedu(){
			$query ="SELECT * FROM tbl_degree ORDER BY degId DESC";
			$result = $this->db->select($query);
			return ($result);
		}

		public function getJoblevel(){
			$query = "SELECT * FROM tbl_job_level ORDER BY levelId DESC";
			$result = $this->db->select($query);
			return ($result);
		}
		/*public function createJob($input){
			$jobtitle = $this->fm->validation($input['jobtitle']);
			$description = $this->fm->validation($input['description']);

			$jobtitle = mysqli_real_escape_string($this->db->link, $jobtitle);
			$description = mysqli_real_escape_string($this->db->link, $description);

			if ($jobtitle == "" || $description == "") {
				$msg = "Field Must Not be Empty!!";
				return $msg;
			}else{
				$query = "INSERT INTO tbl_jobtitle(jobtitle, description) VALUES('$jobtitle', '$description')";
				$result = $this->db->insert($query);
				if ($result) {
					$msg = "Job Created Successfully";
					return $msg;
				}else{
					$msg = "Job Not Created Successfully";
					return $msg;
				}
			}
		}*/

		public function jobInput($data){
			$jId 		= 	$this->fm->validation($data['jId']);
			$dId 		= 	$this->fm->validation($data['dId']);
			$levelId 		= 	$this->fm->validation($data['levelId']);
			$ldApplication = $this->fm->validation($data['ldApplication']);
			$degId 		= 	$this->fm->validation($data['degId']);
			$joblocation 		= 	$this->fm->validation($data['joblocation']);
			$mcomp 		= 	$this->fm->validation($data['mcomp']);
			$expDate 	= 	$this->fm->validation($data['expDate']);
			$prerequisite = $this->fm->validation($data['prerequisite']);

			$jId = mysqli_real_escape_string($this->db->link, $jId);
			$dId = mysqli_real_escape_string($this->db->link, $dId);
			$levelId = mysqli_real_escape_string($this->db->link, $levelId);
			$ldApplication = mysqli_real_escape_string($this->db->link, $ldApplication);
			$degId = mysqli_real_escape_string($this->db->link, $degId);
			$joblocation = mysqli_real_escape_string($this->db->link, $joblocation);
			$mcomp = mysqli_real_escape_string($this->db->link, $mcomp);
			$expDate = mysqli_real_escape_string($this->db->link, $expDate);
			$prerequisite = mysqli_real_escape_string($this->db->link, $prerequisite);

			if ($jId == "" || $dId == "" ||$levelId == ""|| $ldApplication == ""|| $degId == "" || $joblocation == "" || $mcomp == ""|| $expDate =="" || $prerequisite == "") {
				$msg = "Please Fillup All Field";
					return $msg;
			}else{
				$query = "INSERT INTO tbl_user_job(jId, dId, levelId, ldApplication, degId, mcomp, expDate, prerequisite, joblocation) VALUES('$jId', '$dId', '$levelId', '$ldApplication', '$degId', '$mcomp', '$expDate', '$prerequisite', '$joblocation' )";
				$result = $this->db->insert($query);
				if ($result) {
					$msg = "Record Successfully";
					return $msg;
				}else{
					$msg = "Record Not Successfully";
					return $msg;
				}
			}
		}
} ?>