<?php
	if($_GET["country"] == 1) {
		echo json_encode(array("1"=>"Washigton","2"=>"kagawa" ));
	}
	elseif($_GET["country"] == 2) {
		echo json_encode(array("3"=>"Yerevan","4"=>"Ararat" ));
	}
?>