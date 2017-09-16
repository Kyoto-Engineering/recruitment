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

		/*public function jobInput($data){
			$jid = $this->fm->validation($data['jid']);
			$did = $this->fm->validation($data['did']);
			$jlId = $this->fm->validation($data['jlId']);
			$ldApplication = $this->fm->validation($input['ldApplication']);
			$degId = $this->fm->validation($input['degId']);
			$mcomp = $this->fm->validation($input['mcomp']);
			$prerequisite = $this->fm->validation($input['prerequisite']);
			$expDate = $this->fm->validation($input['expDate']);
			$expDate = $this->fm->validation($input['expDate']);
		}*/
} ?>