<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
   	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <title>M</title>
    <script type="text/javascript">
		$(document).ready(function(){
			$(document).on("click","#add_comment",function(){
				var form = $("form[name='form']");
				//var form = $("#form");             //nujna inch verevi tox@....verevinum name-ova gtnum....stex id-ov
				form.css("display","block");
				$("#add_comment").replaceWith(form);
			});
			
			$(document).on("click","input[name='send']",function(){
				var commnet = $('textarea').val(); 
				
				$("textarea").val("");
				$("<p>"+ commnet +"</p>").insertAfter('p:last')
			});
		});
	</script>
	<style>
		
	</style>
</head>
<body>

  
<div id="comments">
	<p>comment 1</p>
	<p>comment 2</p>
	<p>comment 3</p>
</div>

<form id="form" name="form" action="" method="post" style="display:none" onsubmit="return false">	
	<textarea id="textarea" name="textarea" cols="30" rows="10"></textarea><br>
	<input type="submit" name="send" value="Add comment" id="done">
</form>

<a href="#" onclick="return false" id="add_comment">Add comment</a>



 </body>
</html>

