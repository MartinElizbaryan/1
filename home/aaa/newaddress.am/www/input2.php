<!DOCTYPE HTML>
<html>
<head>
   <meta http-equiv="Content-type" content="text/html; charset=utf-8">
   	<script src="js/jquery-3.1.0.min.js" type="text/javascript" > </script>
	<script src="js/myscripts.js" type="text/javascript"> </script>
   <title>M</title>
   <script type="text/javascript">
		function valid (form){
			var fail = false;
			var name = form.name.value;
			var password = form.password.value;
			var repassword = form.repassword.value;
			var state = form.state.value;
			
			if(name=="" || name==" "){
				fail="Write your name please";
			}
			else if(password==""){
				fail="Write your Password please";
			}
			else if(password!=repassword){
				fail="The passwords arn't the same";
			}
			else if(state==""){
				fail="Choose your sex";
			}
			if(fail) {alert(fail);}
			else{window.location = "http://google.com"}
		}
	</script>
</head>
<body>
	
	<form action="" method="post" name="test" id="form">
	Name:<input type="text" name="name" placeholder="Your name" id="name"><br><br>
	Password:<input type="password" name="password" id="password"><br><br>
	Re Password:<input type="password" name="repassword" id="repassword"><br><br>
	<span>Sex - </span> (
	Male<input type="radio" name="state" value="male" id="male">
	Female<input type="radio" name="state" value="female" id="female">)
	<input type="button" onclick="valid(document.getElementById('form'))" name="submit" value="Click to send">
	</form>
 </body>
</html>