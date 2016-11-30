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
  

	
<div id="div" style="background-color:red">
	Test
	<p>smth</p>
</div>


<script type="text/javascript">
		var block = $('#div').clone();
		block.html('new smth');
		block.css("font-size","250px");
		$('body').append(block);
	</script>

 </body>
</html>

