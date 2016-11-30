<!DOCTYPE HTML>
<html>
<head>
   <meta http-equiv="Content-type" content="text/html; charset=utf-8">
   	<script src="js/jquery-3.1.0.min.js" type="text/javascript" > </script>
	<script src="js/myscripts.js" type="text/javascript"> </script>
   <title>M</title>
   <script type="text/javascript">
		var counter = 0;
		
		function timer(){
			counter++;
			document.getElementById("count").innerHTML = counter;
			//if(counter==3)clearInterval(id);
			setTimeout("timer()",1000);
		}
	</script>
</head>
<body onload="timer()">
	has gone out <span id="count">-1</span> seconds
	
 </body>
</html>