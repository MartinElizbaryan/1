<!DOCTYPE HTML>
<html>
<head>
   <meta http-equiv="Content-type" content="text/html; charset=utf-8">
   	<script src="js/jquery-3.1.0.min.js" type="text/javascript" > </script>
	<script src="js/myscripts.js" type="text/javascript"> </script>
   <title>M</title>
   <script type="text/javascript">
		var count=0;
		function mouseCount(element){
			count++;
			element.innerHTML = "mknik@ pahel eq vren " + count +" angam"; 
}
	</script>
</head>
<body>
<span onmouseover="mouseCount(this)">mknik@ pahel eq vren 0 angam</span>
 </body>
</html>