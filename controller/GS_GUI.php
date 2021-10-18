<?php


class GS_GUI_Controller{
	function __construct(){
		include('model/db.php');//database
		include('controller/supporters.php');
		$this->model=new GS_Model();//model class
		

	}

	function home(){
	    
		include(getURL('home'));

	}
	function gs(){
	    
		include(getURL('gs'));

	}
	function connect(){
	    
		include(getURL('connect'));

	}
	function get_in(){
	    
		include(getURL('get_in'));

	}
	function register(){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['psw'];
		$role="admin";
		$sql="INSERT INTO `user`(`name`, `email`, `role`, `password`) VALUES ('".$name."','".$email."','".$role."','".$password."')";
		$this->model->execute_query($sql);
		echo "<script>location='demos/login-form-09/index.html'</script>";


	}

	function log_in(){
		
		$email=$_POST['email'];
		$password=$_POST['psw'];
		$role="admin";
		$sql="SELECT * FROM `user` where email='".$email."'";
		
		$data=$this->model->read_query($sql);
		
		if($password==$data[0]['password'])
		{	
			$_SESSION['name']=$data[0]['name'];
			$_SESSION['email']=$data[0]['email'];
			$_SESSION['password']=$data[0]['password'];
			$_SESSION['role']=$data[0]['role'];
			echo "<script>location='index.php?function=dashboard'</script>";
		}else{
			location("gs");
		}
		
		
	}
	function dashboard(){
		
		if(isset($_SESSION['password']))
		{
			include(getURL('dashboard'));

		}else{
			route("gs");
		}

	}
	function log_out(){
		session_destroy();
		location("home");
	}

	

	

	

	
}
?>
