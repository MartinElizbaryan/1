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
  

	
<div id="div" style="background-color:red"><p>smth</p></div>
<div id="div_2"></div>
<img src="1.jpg" alt="" />
<img src="1.jpg" alt="" />
<img src="1.jpg" alt="" /><br>

<a href="#">1</a>
<a href="#">2</a>

<script type="text/javascript">
		$('div').append("<span>Simple text</span>");
		$('img').appendTo($('#div_2'));               //appendTo - elementi verj@
													  //prependTo - elementi skizb@
													  //insertBefore - elementic durs henc dem@
													  //insertAfter - elementic durs henc verj@
		$('a').wrap("<p style='display:none'></p>");
		
		//$("div").remove();
		//$("div_2").empty();
	</script>

 </body>
</html>

