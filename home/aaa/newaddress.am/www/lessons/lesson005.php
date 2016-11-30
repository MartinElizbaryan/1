<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
   	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <title>M</title>
    <script type="text/javascript">
		
	</script>
	<style>
		
	</style>
</head>
<body>
  

	
<div id="div">Test</div>
<script type="text/javascript">
		$('#div').css("font-size","25px");
		$('#div').css("color","red");
		$('#div').css("background-color","green");
		$('#div').css("width","250px");
		$('#div').css("height",function(){
			return $(this).width();
		});
	</script>

 </body>
</html>