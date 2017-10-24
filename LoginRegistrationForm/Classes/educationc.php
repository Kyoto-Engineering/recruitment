<?php include_once "lib/Database.php"; ?>
<?php include_once "helpers/Format.php"; ?>
<?php include_once "lib/Session.php"; ?>

<?php 
/**
* education
*/
class Education
{
	
	private $db;
		private $fm;
	public function __construct()
	
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

	public function getAllgroup(){
		$query = "SELECT * FROM tbl_group ORDER BY gId DESC";
		$result = $this->db->select($query);
		return $result;
	}	

	public function sscInsert($data, $userId){
		$name 		 = $this->fm->validation($data['name']);
		$gId 		 = $this->fm->validation($data['gId']);
		$cgpa 		 = $this->fm->validation($data['cgpa']);
		$pyearid 	 = $this->fm->validation($data['pyearid']);
		$divId 	     = $this->fm->validation($data['divId']);
		

		$name		 = mysqli_real_escape_string($this->db->link, $name);
		$gId		 = mysqli_real_escape_string($this->db->link, $gId);
		$cgpa		 = mysqli_real_escape_string($this->db->link, $cgpa);
		$pyearid	 = mysqli_real_escape_string($this->db->link, $pyearid);
		$divId	 	 = mysqli_real_escape_string($this->db->link, $divId);

		if ($name == "" || $gId == "" || $cgpa == "" || $pyearid == ""||$divId == "") {
			$msg = "Select or Fill All The Data";
			return $msg;
		}else{
			$query = "INSERT INTO tbl_school(userId, name, gId, cgpa, pyearid, divId) VALUES('$userId', '$name', '$gId', '$cgpa', '$pyearid','$divId')";
			$result = $this->db->insert($query);
			if ($result) {
				echo "<script>window.location = 'education.php'</script>";
			}else{
				$msg = "Not Insert";
				return $msg;
			}
		}


	}

	public function olevelInsert($data, $userId){
		$name 		 = $this->fm->validation($data['name']);
		$cgpa 		 = $this->fm->validation($data['cgpa']);
		$pyearid 	 = $this->fm->validation($data['pyearid']);
		$divId 	     = $this->fm->validation($data['divId']);
		

		$name		 = mysqli_real_escape_string($this->db->link, $name);
		$cgpa		 = mysqli_real_escape_string($this->db->link, $cgpa);
		$pyearid	 = mysqli_real_escape_string($this->db->link, $pyearid);
		$divId	 	 = mysqli_real_escape_string($this->db->link, $divId);

		if ($name == "" || $cgpa == "" || $pyearid == ""|| $divId == "") {
			$msg = "Select or Fill All The Data";
			return $msg;
		}else{
			$query = "INSERT INTO tbl_olevel(userId, name, cgpa, pyearid, divId) VALUES('$userId', '$name', '$cgpa', '$pyearid', '$divId')";
			$result = $this->db->insert($query);
			if ($result) {
				echo "<script>window.location = 'education.php'</script>";
			}else{
				$msg = "Not Insert";
				return $msg;
			}
		}
	}

	public function vocationalInsert($data, $userId){
		$name 		 = $this->fm->validation($data['name']);
		$cgpa 		 = $this->fm->validation($data['cgpa']);
		$pyearid 	 = $this->fm->validation($data['pyearid']);
		$divId 	     = $this->fm->validation($data['divId']);
		

		$name		 = mysqli_real_escape_string($this->db->link, $name);
		$cgpa		 = mysqli_real_escape_string($this->db->link, $cgpa);
		$pyearid	 = mysqli_real_escape_string($this->db->link, $pyearid);
		$divId	 	 = mysqli_real_escape_string($this->db->link, $divId);

		if ($name == "" || $cgpa == "" || $pyearid == ""|| $divId == "") {
			$msg = "Select or Fill All The Data";
			return $msg;
		}else{
			$query = "INSERT INTO tbl_vocational(userId, name, cgpa, pyearid, divId) VALUES('$userId', '$name', '$cgpa', '$pyearid', '$divId')";
			$result = $this->db->insert($query);
			if ($result) {
				echo "<script>window.location = 'education.php'</script>";
			}else{
				$msg = "Not Insert";
				return $msg;
			}
		}
	}

	public function hscInsert($data, $userId){
		$name 		 = $this->fm->validation($data['name']);
		$cgpa 		 = $this->fm->validation($data['cgpa']);
		$pyearid 	 = $this->fm->validation($data['pyearid']);
		$divId 	     = $this->fm->validation($data['divId']);
		

		$name		 = mysqli_real_escape_string($this->db->link, $name);
		$cgpa		 = mysqli_real_escape_string($this->db->link, $cgpa);
		$pyearid	 = mysqli_real_escape_string($this->db->link, $pyearid);
		$divId	 	 = mysqli_real_escape_string($this->db->link, $divId);

		if ($name == "" || $cgpa == "" || $pyearid == ""|| $divId == "") {
			$msg = "Select or Fill All The Data";
			return $msg;
		}else{
			$query = "INSERT INTO tbl_hsc(userId, name, cgpa, pyearid, divId) VALUES('$userId', '$name', '$cgpa', '$pyearid', '$divId')";
			$result = $this->db->insert($query);
			if ($result) {
				echo "<script>window.location = 'education.php'</script>";
			}else{
				$msg = "Not Insert";
				return $msg;
			}
		}
	}

	public function diplomaInsert($data, $userId){
		$name 		 = $this->fm->validation($data['name']);
		$degId 		 = $this->fm->validation($data['degId']);
		$dId 		 = $this->fm->validation($data['dId']);
		$cgpa 		 = $this->fm->validation($data['cgpa']);
		$pyearid 	 = $this->fm->validation($data['pyearid']);
		$divId 	     = $this->fm->validation($data['divId']);
		

		$name		 = mysqli_real_escape_string($this->db->link, $name);
		$degId		 = mysqli_real_escape_string($this->db->link, $degId);
		$dId		 = mysqli_real_escape_string($this->db->link, $dId);
		$cgpa		 = mysqli_real_escape_string($this->db->link, $cgpa);
		$pyearid	 = mysqli_real_escape_string($this->db->link, $pyearid);
		$divId	 	 = mysqli_real_escape_string($this->db->link, $divId);

		if ($name == "" || $cgpa == "" || $pyearid == ""|| $divId == "" || $degId == "" || $dId == "") {
			$msg = "Select or Fill All The Data";
			return $msg;
		}else{
			$query = "INSERT INTO tbl_diploma(userId, name, degId, dId, cgpa, pyearid, divId) VALUES('$userId', '$name',
			 '$degId', '$dId', '$cgpa', '$pyearid', '$divId')";
			$result = $this->db->insert($query);
			if ($result) {
				echo "<script>window.location = 'education.php'</script>";
			}else{
				$msg = "Not Insert";
				return $msg;
			}
		}
	}

	public function undergraduateInsert($data, $userId){
		$uId 		 = $this->fm->validation($data['uId']);
		$studydeptId = $this->fm->validation($data['studydeptId']);
		$cgpa 		 = $this->fm->validation($data['cgpa']);
		$pyearid 	 = $this->fm->validation($data['pyearid']);
		

		$uId 		 = mysqli_real_escape_string($this->db->link, $uId);
		$studydeptId = mysqli_real_escape_string($this->db->link, $studydeptId);
		$cgpa 		 = mysqli_real_escape_string($this->db->link, $cgpa);
		$pyearid	 = mysqli_real_escape_string($this->db->link, $pyearid);
		

		if ($uId == "" || $studydeptId == "" || $cgpa == "" || $pyearid == "" ) {
			$msg = "Select or Fill All The Data";
			return $msg;
		}else{
			$query = "INSERT INTO tbl_grad(userId, uId, studydeptId, cgpa, pyearid) VALUES('$userId', '$uId', '$studydeptId', '$cgpa', '$pyearid')";
			$result = $this->db->insert($query);
			if ($result) {
					echo "<script>window.location = 'education.php'</script>";
			}else{
				$msg = "Not Insert";
				return $msg;
			}
		}

	}

	
}//main class
?>