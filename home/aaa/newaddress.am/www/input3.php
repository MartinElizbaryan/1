<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
   	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="js/myscripts.js" type="text/javascript"> </script>
    <title>M</title>
    <script type="text/javascript">
		function valid(){
			var state = $('input[name="sex"]:checked').val();
			if (!state){
				return $('#message').html("<font style='color:red'>Choose your sex</font>");
			}
			$("#message").hide();
			if (state == "male"){
				$('#img').show();
			}
		}
	</script>
</head>
<body>
  
<form id="name" name="name">
	<label for="female">Female</label>
	<input type="radio" name="sex" value="female" id="female">
	<label for="male">Male</label>
	<input type="radio" name="sex" value="male" id="male">
	<span id="message"></span>
	<input type="button" id="done" value="Send" onclick="return valid()">
	
	<img src="1.jpg" style="display:none" id="img">
</form>
 </body>
</html>

