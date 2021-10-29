<?php
class GS_GUI_Controller{
	function __construct(){
		include('model/db.php');//database
		include('controller/supporters.php');
		$this->model=new GS_Model();//model class
		
	}
	function home(){

		$css_framework=add_css_framework("bootstrap5");
		$css_framework_js=add_css_framework_js("bootstrap5");
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
			echo "<script>location='index.php?function=home'</script>";
		}else{
			location('home');
		}
		
		
	}
	function dashboard(){
		//adding css framework
		$css_framework=add_css_framework("bootstrap5");
		$css_framework_js=add_css_framework_js("bootstrap5");

		//getting data
		$sql="SELECT * FROM `user`";		
		$data=$this->model->read_query($sql);

		//checking session and include dashboard
		check_session();

		//edit page
		include(getURL('header'));
		include(getURL('dashboard'));
		include(getURL('footer'));
				

	}
	function delete(){
		//geting id
		$id=$_GET['id'];
		//deleting data
		$sql="DELETE FROM `user` WHERE id=".$id;		
		$this->model->execute_query($sql);
		location('dashboard');
	}

	function edit(){
		//geting id
		$id=$_GET['id'];

		//geting data
		$sql="SELECT * FROM `user` WHERE id='".$id."'";		
		$data=$this->model->read_query($sql);


		//adding css framework
		$css_framework=add_css_framework("bootstrap5");
		$css_framework_js=add_css_framework_js("bootstrap5");

		//edit page
		include(getURL('header'));
		include(getURL('edit'));
		include(getURL('footer'));
		
	}

	function log_out(){
		session_destroy();
		location('home');
	}
	
}
?>
