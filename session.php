<?php
session_start();
$ok=0;
if(isset($_SESSION['uid'])){
	if(isset($_SESSION['jmeno'])){
		if(isset($_SESSION['cook'])){
			if(isset($_COOKIE['webmonstr'])){
			 if($_SESSION['cook']==$_COOKIE['webmonstr']){
$ok=1;	
}
}	
}	
}
}

if($ok==0){
unset($_SESSION['uid'],$_SESSION['jmeno'],$_SESSION['cook']);
	
}
?>