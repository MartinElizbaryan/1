<!DOCTYPE HTML>
<html>
<head>
   <meta http-equiv="Content-type" content="text/html; charset=utf-8">
   	<script src="js/jquery-3.1.0.min.js" type="text/javascript" > </script>
	<script src="js/myscripts.js" type="text/javascript"> </script>
   <title>M</title>
   <script type="text/javascript">
		var id=setInterval("myFunction()",1000);
		var counter = 0;
		
		function myFunction(){
			counter++;
			alert("1 second has gone out");
			//if(counter==3)clearInterval(id);
		}
	</script>
</head>
<body>
 </body>
</html>