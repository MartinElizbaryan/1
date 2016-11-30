<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
   	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <title>M</title>
    <script type="text/javascript">
		function incSize(event){
			var width = Number(event.target.style.width.substring(0,event.target.style.width.length -2));
			event.target.style.width = (width + 5) + "px";
			//$(event.target).unbind();        //vor mi hat aneluc heto bind functian anjatvi
			$("<p>Your mouse Koordinat is: x - " + event.screenX + " y - " + event.screenY +"</p>").insertAfter("div:last");
		}
		
		$(document).ready(function(){
			$("div").bind("click",incSize);      //vor kpnenq divin incSize funci gorcoxutjuner@ katarvi
			$(document).on("click","p",function(){    //vor sxmenq toxin beri taki grac@
				alert("test");
			});
		});
	</script>
	<style>
		
	</style>
</head>
<body>
<div style="width:50px; height:50px; background-color:red"></div>
<div style="width:50px; height:50px; background-color:blue"></div>
<div style="width:50px; height:50px; background-color:green"></div>
  
  <script type="text/javascript">
		
	</script>



 </body>
</html>

