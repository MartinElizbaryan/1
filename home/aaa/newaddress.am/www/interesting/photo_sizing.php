<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
   	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <title>M</title>
    <script type="text/javascript">
		$(document).ready(function(){
			$("#img").bind("click", function(event){
				//$('#test').css("text-align","center");
				if($(event.target).width()>500){
					$(event.target).animate({
					width: $(event.target).width()/6,
					height: $(event.target).height()/6,
				},1000);
				}
				else{
					$(event.target).animate({
					width: $(event.target).width()*6,
					height: $(event.target).height()*6,
				},1000);
				}
			});	
		});
		
	</script>
	<style>
		
	</style>
</head>
<body>



  

<p id="test">
	<img src="http://image.shutterstock.com/z/stock-vector-country-shape-outlined-and-filled-with-the-flag-of-spain-128148599.jpg" alt="photo" width="150" title="photo" id="img">
</p>
 







 </body>
</html>

