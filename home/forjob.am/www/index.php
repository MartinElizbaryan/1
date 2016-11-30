<!DOCTYPE HTML PUBLIC "-//W3C// DTD HTML 4.01 Transitional//EN  "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Pag1</title>
</head>
<body>
<form action=""  method="get">
  First name:<br>
  <input type="text" name="firstname" value="Mickey"><br><br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse"><br><br>
  Your age :<br>
  <input type="text" name="yourage" value="10"><br><br>
	Germany :<br>
  How long have you studed <input type="text" name="gerYear" value="">     
  How much do you know (%) <input type="text" name="gerPrc" value=""><br>
    Armenian :<br>
  How long have you studed <input type="text" name="armYear" value="">     
  How much do you know (%) <input type="text" name="armPrc" value=""><br>
    English :<br>
  How long have you studed <input type="text" name="engYear" value="">     
  How much do you know (%) <input type="text" name="engPrc" value=""><br>
	Russian :<br>
  How long have you studed <input type="text" name="rusYear" value="">     
  How much do you know (%) <input type="text" name="rusPrc" value=""><br>
    French :<br>
  How long have you studed <input type="text" name="fraYear" value="">     
  How much do you know (%) <input type="text" name="fraPrc" value=""><br>
    Spanish :<br>
  How long have you studed <input type="text" name="spaYear" value="">     
  How much do you know (%) <input type="text" name="spaPrc" value=""><br><br>
  <input type="submit" value="Submit">
</form>
<?php 

$firstname=$_GET["firstname"];
$lastname=$_GET ["lastname"];
$yourage=$_GET["yourage"];
$gerYear=$_GET["gerYear"];
$gerPrc=$_GET["gerPrc"];
$armYear=$_GET["armYear"];
$armPrc=$_GET["armPrc"];
$engYear=$_GET["engYear"];
$engPrc=$_GET["engPrc"];
$rusYear=$_GET["rusYear"];
$rusPrc=$_GET["rusPrc"];
$fraYear=$_GET["fraYear"];
$fraPrc=$_GET["fraPrc"];
$spaYear=$_GET["spaYear"];
$spaPrc=$_GET["spaPrc"];

$gerCoins=$gerYear * $gerPrc;
$armCoins=$armYear * $armPrc;
$engCoins=$engYear * $engPrc;
$rusCoins=$rusYear * $rusPrc;
$fraCoins=$fraYear * $fraPrc;
$spaCoins=$spaYear * $spaPrc;
$countOne=$yourage * 40;
$total=$gerCoins+$engCoins+$armCoins+$fraCoins+$spaCoins+$rusCoins;



if($gerPrc<0 || $engPrc<0 || $armPrc<0 || $rusPrc<0 || $fraPrc<0 || $spaPrc<0){
	echo "error:Percent can't be smaller than 0";
}

else if($gerPrc>100 || $engPrc>100 || $armPrc>100 || $rusPrc>100 || $fraPrc>100 || $spaPrc>100){
	echo "error:Percent can't be bigger than 100";
}



else if($countOne==0 || $yourage<$gerYear || $yourage<$engYear || $yourage<$armYear || $yourage<$rusYear || $yourage<$fraYear || $yourage<$spaYear){
	echo "error:Your age can't be smaller than your stadiing years";
	
	
}
else{
$result=$total/$countOne;


$trueResult=round($result);

echo $firstname.' '.$lastname.' knows '.$trueResult.' languages';
}

?> 












</body> 

</html>