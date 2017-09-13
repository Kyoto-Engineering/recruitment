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

		public function addressInsert($data){
			
			$divId 		 = $this->fm->validation($data['divId']);
			$distId 	 = $this->fm->validation($data['distId']);
			$thId 		 = $this->fm->validation($data['thId']);
			$postId 	 = $this->fm->validation($data['postId']);
			$codeId 	 = $this->fm->validation($data['codeId']);

			$divId		 = mysqli_real_escape_string($this->db->link, $divId);
			$distId		 = mysqli_real_escape_string($this->db->link, $distId);
			$thId		 = mysqli_real_escape_string($this->db->link, $thId);
			$postId		 = mysqli_real_escape_string($this->db->link, $postId);
			$codeId		 = mysqli_real_escape_string($this->db->link, $codeId);

			if ($divId == "" || $distId == "" || $thId == "" || $postId == "" || $codeId == "") {
				$msg = "Fill ALL Address";
				return $msg;
			} else{
				$query ="INSERT INTO tbl_address(divId, distId, thId, postId, codeId) VALUES ('$divId', '$distId', '$thId', '$postId', '$codeId')";
				$result = $this->db->insert($query);
				if ($result) {
					$msg = "Your Address has been recorded";
					return $msg;
				}else{
					$msg = "Your Address not recorded";
					return $msg;
				}
			}

		}
	}//main class
?>