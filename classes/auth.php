<?php
include_once 'config.php';

class Auth extends Config
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function check($post,$file)
	{
		$email=$this->sanitize($_POST['email']);
		$password=$this->sanitize($_POST['password']);

		$img1=$_FILES['img1']['name'];
		$img2=$_FILES['img2']['name']; 
		$img3=$_FILES['img3']['name'];

		//Validate for email and Password
		$query = "SELECT * FROM login WHERE email= '$email' and password='$password'";
		$result = $this->con->query($query);

		//Validate for image
		$query2 = "SELECT * FROM login WHERE image1='$img1' and image2='$img2' and image3='$img3'";
		$result2 = $this->con->query($query2);


		if ($result->num_rows > 0) {

		if ($result2->num_rows === 0) {
			$this->redirect('ilogin');
		}else{
			
			$row = $result->fetch_assoc();
			$this->setval(1,$row['email']);
			$this->role($row['role']);
		}

		}else{
			$this->redirect('login');
		}

	}

	public function setval($login,$id)
	{
		$_SESSION['login'] = $login;
		$_SESSION['id'] = $id;
	}

	public function role($val)
	{
		$value=(int)$val;
		if ($value === 1) {
			$this->redirect('admin');
		} elseif ($value === 2) {
			$this->redirect('supervisor');
		} elseif ($value === 3) {
			$this->redirect('user');
		}else{
			return "invalid role";
		}
		
	}

	

	public function redirect($type)
	{
		if ($type === 'user') {
			header("location:user/dashboard.php");
		} else if ($type === 'admin') {
			header("location:admin/dashboard.php");
		}else if ($type === 'supervisor') {
			header("location:supervisor/dashboard.php");
		} elseif ($type === 'login') {
			header("location:login.php?msg=Invalid email or password!&type=error");
		} elseif ($type === 'ilogin') {
			header("location:login.php?msg=Wrong Image Combination,please select the right images, in their right sequence!&type=error");
		}else {
			header("location:login.php?msg=No info found!&type=info");
		}

	}



	public function sanitize($str='')
	{
		 #$Data = preg_replace('/[^A-Za-z0-9_-]/', '', $Data); /** Allow Letters/Numbers and _ and - Only */
		$str = htmlentities($str, ENT_QUOTES, 'UTF-8'); /** Add Html Protection */
		$str = stripslashes($str); /** Add Strip Slashes Protection */
		if($str!=''){
			$str=trim($str);
			return mysqli_real_escape_string($this->con,$str);
		}

	}

}
?>
