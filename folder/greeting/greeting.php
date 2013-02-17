<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>问候网页</title>
</head>
<body>
<?php
date_default_timezone_set( 'PRC' );
function hello(){
	$name="hello".func_num_args();
	$num=func_get_args();
	/*switch($num){
		case 0:}*/
    return call_user_func_array($name,$vars);
}
function hello0($hour){
    $greeting=",welcome to this page..";
    if($hour<12){
        echo "Good morning".$greeting.'<br />';
    }else if($hour<18){
         echo "Good afternoon".$greeting.'<br />';
     }else{
          echo "Good evening".$greeting.'<br />';
      }
}
function hello1(){
    $now=getdate();
	$hour=$now['hours'];
    $greeting=",welcome to this page..";
    if($hour<12){
        echo "Good morning".$greeting.'<br />';
    }else if($hour<18){
         echo "Good afternoon".$greeting.'<br />';
     }else{
          echo "Good evening".$greeting.'<br />';
      }
}
$now=getdate();
$hour=$now['hours'];
hello0($hour);
hello1(); ?>
</body>
</html>