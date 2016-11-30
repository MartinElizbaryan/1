<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
   	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <title>M</title>
    <script type="text/javascript">
		$(document).ready(function(){
			$("#country").bind("chenge",function(){
				$.get("countryCheck",{country:$("#country").val()},function(data){
					$("#city").empty();
					data = JSON.parse(data);
					for(id in data){
						$("#city").append($("<option value='"+id+"'>"+data[id]+"</option>"));
					}
				});
			});
		});
	</script>
	<style>
		
	</style>
</head>
<body>



  
<label>Select country:</label>
<select name="country" id="country">
	<option value="0"></option>
	<option value="1">Armenia</option>
	<option value="2">Spain</option>
</select>
 
 <label>Select city:</label>
<select name="city" id="city">
	<option value="0"></option>
</select>









 </body>
</html>

