<?php  session_start();
	$num1 = rand(1,10);
	$num2 = rand(1,10);
	$text.=$num1;$text.='+';$text.=$num2;
	$value= "$num1" + "$num2";
	if(!isset($_SESSION['value']))
	{$_SESSION['value']=$value;}
	$image_p = imagecreate(60,25); 
	$back = imagecolorallocate($image_p, rand(0,127),rand(0,127),rand(0,127)); 
	$textcolor = imagecolorallocate($image_p, rand(128,255), rand(128,255),rand(128,255)); 
	$font_size = 15; 
	imagestring($image_p,$font_size, 5,5, $text, $textcolor); 
	imagepng($image_p);
?>
