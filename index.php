<?php
session_start();
$controller='GS_GUI';
$function='home';

if(isset($_GET['controller']) && $_GET['controller']!=''){
	$controller=$_GET['controller'];
}
if(isset($_POST['controller']) && $_POST['controller']!=''){
	$controller=$_POST['controller'];
}

if(isset($_GET['function']) && $_GET['function']!=''){
	$function=$_GET['function'];
}
if(isset($_POST['function']) && $_POST['function']!=''){
	$function=$_POST['function'];
}

if(file_exists('controller/'.$controller.'.php')){
    
	include('controller/'.$controller.'.php');

	$class=$controller.'_Controller';//important for naming convention
	
	$obj=new $class();//creating object for controller. model problem. $obj=new GS_GUI_Controller();
	
	if(method_exists($class,$function)){
	    //include(getURL('under/index'));
	    //include(getURL('footer'));
		$obj->$function();
	}else{
		echo "Function not found";
	}
}else{
	echo "Controller not found";
}
?>