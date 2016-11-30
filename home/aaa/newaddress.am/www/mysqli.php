<?php
$mysqli= mysqli_connect("localhost","root","","anun@ bazai");                                         //miacnum enq bazain

$mysqli->query ("SET NAMES 'utf8'");                                                                  //lezvi xndirner chlinen

$mysqli->query ("INSERT INTO `user`  VALUES (NULL,'Xotan Makar','23')");                              //avelacnum enq mi nor inchvor mi ban

$mysqli->query ("DELETE * FROM `user` WHERE date<DATE_SUB(CURDATE(),INTERVAL 5 DAY);")                //jnjuma ajn grarumner@ voronq katarvel en minchev verjin 5 orva @ntacqum

echo mysqli_affected_rows($mysqli);                                                                   //cujc talis te qani tox bazajum poxvec

$mysqli->query ("SELECT * FROM tablicaianun@";)                                                       //@ntrum enq inch vor mi ban inch vor mi tablicaic

$row = mysqli_fetch_array($mysqli);                                                                   //tox@ masivi nman mutqagrec $row-i mej

$count = mysqli_num_rows($mysqli);                                                                    //sjunakneri qanaqkn enq hasvhum

$mysqli->close();                                                                                     //ampajamana pagenq verjum





//$var = strip_tags($var);
//$var = htmlentities($var);
//$var = stripslashes($var);
//-moz-box-shadow :2px 2px 2px #888;
//-webkit-box-shadow