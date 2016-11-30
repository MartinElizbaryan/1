<?php
session_start();
if(isset($_POST["send"])){
	$from=$_POST["from"];
	$to=$_POST["to"];
	$subject=$_POST["subject"];
	$massege=$_POST["massege"];
	$_SESSION["from"]=$from;
	$_SESSION["to"]=$to;
	$_SESSION["subject"]=$subject;
	$_SESSION["massege"]=$massege;
	$error=false;
	if($from == ""){
		$error_from="ERROR!!!";
		$error=true;
	}
	if($to == ""){
		$error_to="ERROR!!!";
		$error=true;
	}
	if(strlen($subject) == 0){
		$error_subject="ERROR!!!";
		$error=true;
	}
	if(strlen($massege) == 0){
		$error_massege="ERROR!!!";
		$error=true;
	}
	
	if(!$error){
		$subject="=?utf-8?B?".base64_encode($subject)."?=";
		$header="From: $from\r\nReply-to: $from\r\nContent-type:text/plain;charset=utf-8\r\n";
		mail($to,$subject,$massege,$header);
		header("Location: success.php");
		exit;
	}
	
}





?>
<!DOCTYPE HTML>
<html>
<head>
   <meta http-equiv="Content-type" content="text/html; charset=utf-8">
   	<script src="js/jquery-3.1.0.min.js" type="text/javascript" > </script>
	<script src="js/myscripts.js" type="text/javascript"> </script>
   <title> Mobile Store </title>
</head>
<body>
<form name="Form" method="post" action="">
	<label>From</label><br>
	<input type="text" name="from" value="<?=$_SESSION["from"]?>">
	<span style="color:red"><?=$error_from?></span>
	<br>
	
	<label>To</label><br>
	<input type="text" name="to" value="<?=$_SESSION["to"]?>">
	<span style="color:red"><?=$error_to?></span>
	<br>
	
	<label>Subject</label><br>
	<input type="text" name="subject" value="<?=$_SESSION["subject"]?>">
	<span style="color:red"><?=$error_subject?>
	</span><br>
	
	<label>Massege</label><br>
	<textarea type="text" name="massege" rows="10" cols="20"><?=$_SESSION["massege"]?></textarea>
	<span style="color:red"><?=$error_massege?></span>
	<br>
	
	<input type="submit" name="send">
</form>














 </body>
</html>