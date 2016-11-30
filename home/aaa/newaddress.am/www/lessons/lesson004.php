<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
   	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <title>M</title>
    <script type="text/javascript">
		
	</script>
	<style>
		.div_1{
			background-color:red;
		}
		
		.div_2{
			background-color:blue;
		}
	</style>
</head>
<body>
  

	
<div id="div">Test</div>
<script type="text/javascript">
		
		var div = prompt("1 or 2");
		while( div != 1 && div != 2){
			alert("Write please 1 or 2");
			div = prompt("1 or 2");
		}
		$('#div').attr ("class","div_" + div);
	</script>

 </body>
</html>

