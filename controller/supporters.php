<?php
function route($function_name){
	echo "index.php?function=".$function_name;
}
function location($function_name){
	echo "<script>location='index.php?function=".$function_name."'</script>";
	
}
function getURL($page_name){
		return 'view/'.$page_name.'.php';
}

function security($password){
    if($password=="rsamv"){
        
        //echo "vice principal";
        include(getURL('vice_principal'));
    }elseif($password=="rsamt"){
        
        //echo "teacher";
        include(getURL('teacher'));
        
    }elseif($password=="rsama"){
        
        $model=new RSAM_Model();
        $data=$model->get_notice();

        $online_class=$model->get_online_class();
		//include(getURL('header'));
		include(getURL('admin'));
		//include(getURL('footer'));
		
    }else{
        echo "<script>location='index.php?function=login'</script>";
    }
}
function security_v(){
   
}
function security_t(){
	
}
function security_a(){

}
function letter_grade_from_point($point){
    if($point==5){
		return "A+";
	}elseif ($point<5&&$point>=3.99) {
		return "A";
	}elseif ($point<4&&$point>=3.49) {
		return "A-";
	}elseif ($point<3.5&&$point>=2.99) {
		return "B";
	}elseif ($point<3&&$point>=1.99) {
		return "C";
	}elseif ($point<2&&$point>=0.99) {
		return "D";
	}elseif ($point<1&&$point>=0) {
		return "F";
	}
}
function letter_grade($mark,$subject_full_mark,$semester){
	if($semester=="1st Evaluation"||$semester=="2nd Evaluation"){
		$mark=$mark*2;
	}elseif ($semester=="Half Yearly"||$semester=="Final / Annual") {
		# code...
		$mark=$mark*1;

	}
	if ($subject_full_mark==50) {
		# code...
		$mark=$mark*2;
	} elseif ($subject_full_mark==100) {
		# code...
		$mark=$mark*1;
	}
	
	if($mark>=80&&$mark<=100){
		return "A+";
	}elseif ($mark>=70&&$mark<=79) {
		return "A";
	}elseif ($mark>=60&&$mark<=69) {
		return "A-";
	}elseif ($mark>=50&&$mark<=59) {
		return "B";
	}elseif ($mark>=40&&$mark<=49) {
		return "C";
	}elseif ($mark>=33&&$mark<=39) {
		return "D";
	}elseif ($mark>=00&&$mark<=32) {
		return "F";
	}
}
function grade_point($mark,$subject_full_mark,$semester){
	if($semester=="1st Evaluation"||$semester=="2nd Evaluation"){
		$mark=$mark*2;
	}elseif ($semester=="Half Yearly"||$semester=="Final / Annual") {
		# code...
		$mark=$mark*1;

	}
	if ($subject_full_mark==50) {
		# code...
		$mark=$mark*2;
	} elseif ($subject_full_mark==100) {
		# code...
		$mark=$mark*1;
	}
	if($mark>=80&&$mark<=100){
		return 5;
	}elseif ($mark>=70&&$mark<=79) {
		return 4;
	}elseif ($mark>=60&&$mark<=69) {
		return 3.5;
	}elseif ($mark>=50&&$mark<=59) {
		return 3;
	}elseif ($mark>=40&&$mark<=49) {
		return 2;
	}elseif ($mark>=33&&$mark<=39) {
		return 1;
	}elseif ($mark>=00&&$mark<=32) {
		return 0;
	}

}
function ClassName($class){
	if($class=="0")
	{
		return "Play";
	}elseif ($class=="1") {
		return "One";
	}elseif ($class=="2") {
		return "Two";
	}elseif ($class=="3") {
		return "Three";
	}elseif ($class=="4") {
		return "Four";
	}elseif ($class=="5") {
		return "Five";
	}elseif ($class=="6") {
		return "Six";
	}elseif ($class=="7") {
		return "Seven";
	}elseif ($class=="8") {
		return "Eight";
	}elseif ($class=="9") {
		return "Nine";
	}elseif ($class=="10") {
		return "Ten";
	}elseif ($class=="11") {
		return "Alim 1st Year";
	}elseif ($class=="12") {
		return "Alim 2nd Year";
	}
	
}
function Month($month){
	if ($month=="1") {
		return "January";
	}elseif ($month=="2") {
		return "February";
	}elseif ($month=="3") {
		return "March";
	}elseif ($month=="4") {
		return "April";
	}elseif ($month=="5") {
		return "May";
	}elseif ($month=="6") {
		return "June";
	}elseif ($month=="7") {
		return "July";
	}elseif ($month=="8") {
		return "August";
	}elseif ($month=="9") {
		return "September";
	}elseif ($month=="10") {
		return "October";
	}elseif ($month=="11") {
		return "November";
	}elseif ($month=="12") {
		return "December";
	}
	
}

function Student_id_generator($year,$class,$roll){
	$student_id=$year[2].$year[3]."-".$class."-".$roll;
	
	return $student_id;
}

function Student_email_generator($full_name,$student_id){
	$full_name=str_replace(' ', '', $full_name);
	$full_name=strtolower($full_name);
	$email=$full_name.$student_id."@gmail.com";
	$email=str_replace('-', '.', $email);
	return $email;
}

function Student_password_generator($full_name,$student_id){
	$full_name=str_replace(' ', '', $full_name);
	$full_name=strtolower($full_name);
	$password=$full_name.$student_id."#RSAM#";
	$password=str_replace('-', '.', $password);
	return $password;
}

function isLeap($year)  
{  
    return (date('L', mktime(0, 0, 0, 1, 1, $year))==1);  
}  