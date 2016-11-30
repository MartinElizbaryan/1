<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
   	
	
    <title>M</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#hide").click(function(){
				if($("#passField").is(':visible'))
					$("#passField").hide();
				else
					$("#passField").show();
			});
		});
	
	</script>
</head>
<body>
<button id="hide">Show/hide area for password</button>
<br><br>
<input type="password" id="passField" placeholder="password">
 </body>
</html>