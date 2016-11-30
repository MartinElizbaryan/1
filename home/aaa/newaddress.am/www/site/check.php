<?php
	sleep(2);
	if($_POST['name']=="Admin"){
		echo "feil";
	}
	else{
		echo $_POST['name'];
	}
?>