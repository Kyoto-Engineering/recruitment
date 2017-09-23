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
			$degName = $this->fm->validation($data['degName']);
			$degName	= mysqli_real_escape_string($this->db->link, $degName);

			if ($degName == "") {
				$msg = "Field Must Not Be Empty!!";
				return $msg;

			}
				$dgquery = "SELECT * FROM tbl_degree WHERE degName = '$degName' LIMIT 1";
				$dgchk   = $this->db->select($dgquery);
				if ($dgchk != false) {
					$msg = "<span style='color:red'>Degree Already exist!!</span>";
					return $msg;
					//email unique has done

				} else {
					$query  = "INSERT INTO tbl_degree(degName) VALUES ('$degName')";
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
			$query ="SELECT * FROM tbl_department ORDER BY dId DESC";
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
			//$joblocation 		= 	$this->fm->validation($data['joblocation']);
			$mcomp 		= 	$this->fm->validation($data['mcomp']);
			$expDate 	= 	$this->fm->validation($data['expDate']);
			//$prerequisite = $this->fm->validation($data['prerequisite']);

			$jId = mysqli_real_escape_string($this->db->link, $jId);
			$dId = mysqli_real_escape_string($this->db->link, $dId);
			$levelId = mysqli_real_escape_string($this->db->link, $levelId);
			$ldApplication = mysqli_real_escape_string($this->db->link, $ldApplication);
			$degId = mysqli_real_escape_string($this->db->link, $degId);
			//$joblocation = mysqli_real_escape_string($this->db->link, $joblocation);
			$mcomp = mysqli_real_escape_string($this->db->link, $mcomp);
			$expDate = mysqli_real_escape_string($this->db->link, $expDate);
			//$prerequisite = mysqli_real_escape_string($this->db->link, $prerequisite);

			if ($jId == "" || $dId == "" ||$levelId == ""|| $ldApplication == ""|| $degId == ""|| $mcomp == ""|| $expDate =="") {
				$msg = "Please Fillup All Field";
					return $msg;
			}else{
				$query = "INSERT INTO tbl_user_job(jId, dId, levelId, ldApplication, degId, mcomp, expDate) VALUES('$jId', '$dId', '$levelId', '$ldApplication', '$degId', '$mcomp', '$expDate')";
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

		public function delDegByid($deldeg){
			$query = "DELETE FROM tbl_degree WHERE degId = '$deldeg'";
			$result = $this->db->delete($query);
			if ($result) {
					$msg = "Deleted Successfully";
					return $msg;
			}else{
					$msg = "Not Deleted Successfully";
					return $msg;
			}
		}

		public function delDepartmentByid($deldeg){
			$query = "DELETE FROM tbl_department WHERE dId = '$deldeg'";
			$result = $this->db->delete($query);
			if ($result) {
					$msg = "Deleted Successfully";
					return $msg;
			}else{
					$msg = "Not Deleted Successfully";
					return $msg;
			}
		}
		
		/*public function getjobList(){  
		    /*$query = "SELECT J.*, jt.jobtitle, dp.deptName, jl.levelName, dn.degName 
		        	FROM tbl_user_job as J, tbl_jobtitle as jt, tbl_department as dp, tbl_job_level as jl, tbl_degree as dn WHERE 
		        	J.jId = jt.jId AND J.dId = dp.dId AND J.levelId = jl.levelId AND J.degId = dn.degId ORDER BY
		        	J.jsId DESC";*/

		    /*$query = "SELECT a.*, b.jobtitle, c.deptName
				FROM tbl_user_job as a, tbl_jobtitle as b, tbl_department as c
				WHERE a.jId = b.jId AND a.dId = c.dId
				ORDER BY a.jsId DESC";*/
		    //$query = "SELECT * FROM tbl_user_job ORDER BY jsId DESC";

				/*$query = "SELECT tbl_user_job.*, tbl_jobtitle.jobtitle, tbl_department.deptName
				FROM tbl_user_job
				INNER JOIN tbl_jobtitle
				ON tbl_user_job.jId = tbl_jobtitle.jId
				INNER JOIN tbl_department
				ON tbl_user_job.dId = tbl_department.dId	

		 		ORDER BY tbl_user_job.jsId DESC";*/
		    /*$result = $this->db->select($query);
		    return $result;

		        	 }*/

		   public function getjobList(){
		   	$query = "SELECT p.*, c.levelName, j.jobtitle, r.degName, s.deptName
				FROM tbl_user_job as p, tbl_job_level as c, tbl_jobtitle as j, tbl_degree as r, tbl_department as s
				WHERE p.levelId = c.levelId AND p.jId = j.jId AND p.degId = r.degId AND p.dId = s.dId
				ORDER BY p.jsId DESC";

		/*$query = "SELECT tbl_product.*, tbl_category.catName, tbl_brand.brandName
				FROM tbl_product
				INNER JOIN tbl_category
				ON tbl_product.catId = tbl_category.catId
				INNER JOIN tbl_brand
				ON tbl_product.brandId = tbl_brand.brandId	

		 		ORDER BY tbl_product.productId DESC";*/
		$value = $this->db->select($query);
		return $value;
	}

	public function jobTileCreate($data){

		$jobtitle = 	$this->fm->validation($data['jobtitle']);
		$description = 	$this->fm->validation($data['description']);

		$jobtitle = mysqli_real_escape_string($this->db->link, $jobtitle);
		$description = mysqli_real_escape_string($this->db->link, $description);

		if ($jobtitle == "" || $description == "") {
			$msg = "Fillup all Field!";
			return $msg;
		}
		$dpquery = "SELECT * FROM tbl_jobtitle WHERE jobtitle = '$jobtitle' LIMIT 1";
				$dpchk   = $this->db->select($dpquery);
				if ($dpchk != false) {
					$msg = "<span style='color:red'>Jobtitle Already exist!!</span>";
					return $msg;
					//email unique has done

				} else {
					$query  = "INSERT INTO tbl_jobtitle(jobtitle, description) VALUES ('$jobtitle', '$description')";
					$result = $this->db->insert($query);
					if ($result) {
						$msg = "Jobtitle Inserted";
						return $msg;
					}else{
						$msg = "Jobtitle Not Inserted";
						return $msg;
				}
			}
	}

	public function specializationCreate($data){

		$specialization = 	$this->fm->validation($data['specialization']);
		$specialization = mysqli_real_escape_string($this->db->link, $specialization);
		if ($specialization == "") {
			$msg = "Fillup all Field!";
			return $msg;
		}$dpquery = "SELECT * FROM tbl_specialization WHERE specialization = '$specialization' LIMIT 1";
				$dpchk   = $this->db->select($dpquery);
				if ($dpchk != false) {
					$msg = "<span style='color:red'>Jobtitle Already exist!!</span>";
					return $msg;
					//email unique has done

			}else {
					$query  = "INSERT INTO tbl_specialization(specialization) VALUES ('$specialization')";
					$result = $this->db->insert($query);
					if ($result) {
						$msg = "specialization Inserted";
						return $msg;
					}else{
						$msg = "specialization Not Inserted";
						return $msg;
				}
			}
		}

		public function getAllspecializ(){
			$query = "SELECT * FROM tbl_specialization ORDER BY spId DESC";
			$result = $this->db->select($query);
			return $result;
		}
		   

} ?>