<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
   	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <title>M</title>
    <script type="text/javascript">
		function hideComments(){
			//alert("123");
			$("#hide").hide();
			$("#show").show();
			$("#comments").hide(2000)   //hide poxaren karox enq grel slideUp,fadeOut

			
		}
		
		function showComments(){
			//alert("111");
			$("#hide").show();
			$("#show").hide();
			$("#comments").show(2000)   //show poxaren karox enq grel slideDown,fadeIn
				
			
		}
	
		$(document).ready(function(){
			 $("#hide").bind("click",hideComments);
			 $("#show").bind("click",showComments);
		});
	</script>
	<style>
		
	</style>
</head>
<body>

<a href="#" id="hide" style="display:none" onclick="return false">To hide</a>
<a href="#" id="show" onclick="return false">To show</a>

  
<div id="comments" style="display:none">
	<p>comment 1</p>
	<p>comment 2</p>
	<p>comment 3</p>
</div>






 </body>
</html>

