<?php include 'class/Adlogin.php';?>
<?php
    $hr = new Signup();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $uname = $_POST['uname'];
        $pass = md5($_POST['pass']);
        $login = $hr->HumanResource($uname, $pass);
    }
?>
<!DOCTYPE>
<html>
<head>	
<title>Admin Panel</title>
<style type="text/css">
		html,body{height: 100%; padding:0; margin:0;}
		form{ width:30em;height:9em; margin:-5em auto 0 auto; position: relative; top:50%; border:1px dotted #ccc; padding:.25em; }
		fieldset{ margin:0;   border:0;padding:0;}
		legend{float:left; font-size: 200%; text-align: center; color:blue; font-weight: bold; border-bottom: 1px solid blue; width:15em;  padding:0; }
		label, label+ input {display:inline; float:left;margin-top:1em;}
		label{text-align: right; width:28%; clear: left; margin-top:.8em; }
		label+ input{ width:60%; padding:.25em; ; margin-left:.5em; border: 1px inset;  margin-left: }
		#sub{  margin-top:1em; position: relative; float:left;clear: left; margin-left: 29%}
</style>
</head>
<body>
	<form action="" method="post">
		<fieldset><legend>Admin Login</legend>
			<label for="name">Name: </label>
			<input  type="text" placeholder="Enter Username" name="uname" id="name"  >
			<label for="password">Password: </label>
			<input  type="password" placeholder="Enter Password" name="pass" id="password" >
			<input type="submit" name="login" value="Login" id="sub">
		</fieldset>	
	</form>
</body>
</html>