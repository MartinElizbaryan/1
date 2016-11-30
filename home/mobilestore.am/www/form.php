<?php 

session_start();
if(isset($_POST["send"])){
	$email=htmlspecialchars($_POST["email"]);
	$ID=htmlspecialchars($_POST["ID"]);
	$mobile=$_POST["mobile"];
	$message=htmlspecialchars($_POST["message"]);
	$days=$_POST["days"];
	$dop_oprions=$_POST["dop_oprions"];
	$inch=$_POST["inch"];
	$_SESSION["ID"]=$ID;
	$_SESSION["message"]=$message;
	$error_email="";
    $error_message="";
	$error=false;

		if($email=="" || !preg_match("/[\.\-_A-Za-z0-9]+?@[\.\-A-Za-z0-9]+?[\ .A-Za-z0-9]{2,}/",$email)){
		$error_email="Send rigth email";
		$error=true;
		
	}
	
	if(strlen($message)==0){
		$error_message="Send rigth message";
		$error=true;
	}
	if(!$error){
		 $headers="From:$email\r\nReply-to:$email\r\nContent-type:text/plain;charset=utf-8\r\n";
	    $result= mail("test@test.ru","Personal data","email: $_POST[email],mobile: $_POST[mobile],days: $_POST[days]");
		if($result) 
			echo "massage is send";
		
        else 
			echo "massage is not send";
		
?>