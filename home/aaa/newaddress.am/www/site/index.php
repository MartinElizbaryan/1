<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
   	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <title>M</title>
    <script type="text/javascript">
		function funcBefore(){
			$("#inform").text("Please wait a minute");
		}
		
		function funcSuccess(data){
			$("#inform").text(data);
		}
		
		$(document).ready(function(){
			$("#load").bind("click",function(){
				$.ajax({
					url:"content.php",
					type:"POST",
					data:({name:"Admin",number:22}),
					dataType:"html",
					beforeSend: funcBefore,
					success: funcSuccess
				});
			});
			
			$("#done").bind("click",function(){
				$.ajax({
					url:"check.php",
					type:"POST",
					data:({name:$("#name").val()}),
					dataType:"html",
					beforeSend: function(){
						$("#inform").text("Please wait a minute");
					},
					success: function(data){
						if(data=="feil"){
							alert("There is a name like yours");
						}
						else{
							$("#inform").text(data);
						}
					}
				});
			});			
		});
	</script>
	<style>
		
	</style>
</head>
<body>



  
<input type="text" id="name">
<input type="button" id="done" value="Send">
<p id="load" style="cursor:pointer">test</p>
<div id="inform"></div>
 







 </body>
</html>

