<?php
$text=$_GET['user'];$pass=$_GET['pass'];
$flag_text=0;$flag_pass=0;$cap=0;$small=0;$digit=0;$special=0;
$pat1="/106120\d\d\d/";
$pat2="/111120\d\d\d/";
$pat3="/102120\d\d\d/";
$pat4="/103120\d\d\d/";
if(preg_match($pat1,$text) || preg_match($pat2,$text) || preg_match($pat3,$text) || preg_match($pat4,$text))
$flag_text=1;
for($i=0;$i<strlen($pass);$i++)
{if(preg_match("/[A-Z]/",$pass[$i]))
 $cap=1;
else if(preg_match("/[a-z]/",$pass[$i]))
 $small=1;
else if(preg_match("/[0-9]/",$pass[$i]))
 $digit=1;
else
 $special=1;}
if($digit==1 && $small==1 && $cap==1 && $special=1)
$flag_pass=1;
if( $flag_text==1 && $flag_pass ==1)
header("Location: hello.html");
