
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
   <meta http-equiv="Content-type" content="text/html; charset=utf-8">
   <link href="css/index.css" type="text/css" rel="stylesheet" >
   	<script src="js/jquery-3.1.0.min.js" type="text/javascript" > </script>
	<script src="js/myscripts.js" type="text/javascript"> </script>
   <title> Mobile Store </title>
</head>
<body>
 
<div id="main_div">
 <div id="forheader"><pre><span class="forheader">Mobilestore.am</span>                       SAMSUNG IPHONE NOKIA</pre></div>
 <div id="forbody">
 <body>
<div class="srcflash"> 
  <script type="text/javascript">
   var pics='img/2.jpg|img/3.jpg|img/4.jpg|img/5.jpg|img/6.jpg|img/7.jpg'
   document.write('<object id="focus_flash" type="application/x-shockwave-flash" data="swf/adplay.swf" style="width: 900px; height: 200px"><param name="movie" value="swf/adplay.swf"><param name="quality" value="high"><param name="bgcolor" value="5c5c5c"><param name="allowfullscreen" value="high"><param name="allowscriptaccess" value="sameDomain"><param name="wmode" value="opaque"><param name="flashvars" value="pics='+pics+'&borderwidth='+960+'&borderheight='+300+'"><fieldset class="bord01">������ 406, ������� �� ��������� ��� MIME �������������� ���������.</fieldset></object>')</script></div>
 <div id="for_img">
<img src="img/5.jpg" width="900" height="300">
 
 </div>
  <h1 id="main_h1"> Welcome to Mobile Store </h1>
  <p class="fortextarea">Statistics and facts about mobile app usage Mobile apps are software
  applications designed to run on smartphones, tablet computers and other mobile devices.
  They are typically available through native distribution platforms, so-called app stores
  which are operated by the owners of the mobile operating system. Some of the most popular
  operating system-native stores are Apple's App Store, Google Play, as well as Windows Phone
  Store and BlackBerry App World. As of June 2015, more than 100 billion mobile apps had been downloaded from the Apple App Store. </p>
  <ul id="for_my_links">
  <li><a href="http://www.samsung.com/countryselection"> Samsung </a></li>
  <li><a href="https://www.youtube.com/watch?v=ZdJ7zga2yGg">iPhone</a></li>
  <li><a href="http://www.nokia.com/ru_int">Nokia</a></li>
   </ul>
    <!-- Form -->
                <form action="form.php" id="my_form" method="post">
                    <div id="bigform">
                        <fieldset>
                          <div id="div_form_1">
                                <fieldset id="innerfieldset">
                                    <legend>Additional options</legend>
                                    <p><strong>Do you need accessories?</strong></p>
                                    <div id="format">
                                        <input type="checkbox" value="hp" name="dop_oprions" id="headphones" />
                                        <label for="headphones">Headphones</label>
                                        <input type="checkbox" value="cg" name="dop_oprions" id="chargers" />
                                        <label for="chargers">Chargers</label>
                                        <input type="checkbox" value="cv" name="dop_oprions" id="cover" />
                                        <label for="cover">Cover</label>
                                    </div>
                                    <p><strong>Do you need the insurance?</strong></p>
                                    <div id="radio">
                                        <input type="radio" id="inch_yes" value="yes" name="inch" checked />
                                        <label for="inch">Yes</label>
                                        <input type="radio" id="inch_no" value="no" name="inch" />
                                        <label for="inch">No</label>
                                    </div>
                                </fieldset>
                                <input type="submit" name="send" value="Buy" id="my_button" />
                            </div>
                            <!-- left block form -->
                            <div id="div_form_2">
                                <span>Model:</span>
                                <select name="mobile" size="1" id="mobileSelect">
                                    <option value="1">Iphone 7s(1000$ )</option>
                                    <option value="2">Samsung Galaxy S8(800$)</option>
                                    <option value="3">Nokia Lumia 920(750$ )</option>
                                </select>
                                <span>Days:</span>
                                <select name="days" size="1" id="daysSelect">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                                <p><strong>Enter your email:</strong></p>
                                <input type="text" id="email" name="email" value="mobilestore@mail.com">
								<span style="color:red"><?=$error_email?></span>
								 <p><strong>Enter your card ID:</strong></p>
								 <input type="password" id="password" name="ID" value= <?$_SESSION["ID"]?> size="">
                            </div>
                            <p class="fortextarea"><strong>Message:</strong></p>
                                <textarea name="message" "cols="45" rows="2" id="mytextarea"><?=$_SESSION["message"]?></textarea>
								<span style="color:red"><?=$error_message?></span>
                        </fieldset>
                    </div>
                </form>
 
 </div>
 <div id="forfooter">
 
 </div>
 
</div>
 
 
 
 
 
 
 
 
 
 
 
 
 
 </body>
</html>