<?php 
	
	 include_once '../lib/session.php';
     Session::checkLogin();
	 include_once '../lib/database.php';
	 include_once '../helpers/format.php';


?>

<?php
/**
* Adminlogin class
*/
class Adminlogin
{
	private $db;
	private $fm;
	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function adminLogin($uname, $pass){

		$uname = $this->fm->validation($uname);
		$pass = $this->fm->validation($pass);

		$uname = mysqli_real_escape_string($this->db->link, $uname);
		$pass = mysqli_real_escape_string($this->db->link, $pass);

		if (empty($uname) || empty($pass)) {
			$logmsg = "Username Or Password Must Not be Empty!!";
			return $logmsg;
		}else{
			$query = "SELECT * FROM tbl_login WHERE uname = '$uname' AND pass = '$pass'";
			$result = $this->db->select($query);
			if ($result !=false) {
				$value = $result->fetch_assoc();
				Session::set("login", true);
				Session::set("adminId",   $value['id']);
				Session::set("adminName", $value['uname']);
			
				header("Location:index.php");
			}else{
				$logmsg = "Username Or Password Not Match!!";
			    return $logmsg;
			}
		}
	}
}
?>