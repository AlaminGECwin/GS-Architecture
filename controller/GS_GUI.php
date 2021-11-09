<?php
class GS_GUI_Controller{
	function __construct(){
		include('model/db.php');//database
		include('controller/supporters.php');
		$this->model=new GS_Model();//model class
		
	}
	function home(){

		//adding css framework
		$css_framework=add_css_framework("bootstrap5");
		$css_framework_js=add_css_framework_js("bootstrap5");

		//adding css custom
		$css_custom=add_css_custom("custom_1");

		//Home page
		include(getURL('header'));
		include(getURL('home'));
		include(getURL('footer'));
	}
	function get_in(){
		//adding css framework
		$css_framework=add_css_framework("bootstrap5");
		$css_framework_js=add_css_framework_js("bootstrap5");


		//edit page
		include(getURL('header'));
		include(getURL('get_in'));
		include(getURL('footer'));
	}
	function sign_up(){
		//adding css framework
		$css_framework=add_css_framework("bootstrap5");
		$css_framework_js=add_css_framework_js("bootstrap5");


		//edit page
		include(getURL('header'));
		include(getURL('sign_up'));
		include(getURL('footer'));
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

	function gs(){
	    
		include(getURL('gs'));
	}

	function connect(){
	    
		include(getURL('connect'));

	}

	

	function register(){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['psw'];
		$role="admin";
		$sql="INSERT INTO `user`(`name`, `email`, `role`, `password`) VALUES ('".$name."','".$email."','".$role."','".$password."')";
		$this->model->execute_query($sql);
		location("get_in");


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
	
	function delete(){
		//geting id
		$id=$_GET['id'];
		//deleting data
		$sql="DELETE FROM `user` WHERE id=".$id;		
		$this->model->execute_query($sql);
		location('dashboard');
	}

	function edit(){
		//checking session and include dashboard
		check_session();

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


	function update(){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$role="admin";
		$sql="UPDATE `user` SET `id`='$id',`name`='$name',`email`='$email',`role`='$role',`password`='$password' WHERE `id`='$id' ";
		$this->model->execute_query($sql);
		location('dashboard');
	}


	function log_out(){
		session_destroy();
		location('home');
	}	
}
?>
