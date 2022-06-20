<?php
session_start();

$ok=0;
if(isset($_POST['registrace'])){

	if(isset($_POST['user'])&& (strlen($_POST['user'])>0)){$user=$_POST['user'];}

	
	if(isset($_POST['pass'])&& (strlen($_POST['pass'])>6)){$pass=$_POST['pass'];}
	
	if(isset($_POST['pass2'])&& (strlen($_POST['pass2'])>6)){$pass2=$_POST['pass2'];}
	
	if(isset($user)&&isset($pass)&&isset($pass2)&&($pass==$pass2)){$ok=1;}
}

if($ok==0){$_SESSION['zprava']="Formulář nebyl správně vyplněn. Pro opakování klikněnte <a href=\"registrace.php\">ZDE</a>.";
		  
		  }
else{

	$dotaz="SELECT * FROM `user` WHERE username=$user";

	require_once('config.php');
	$vys=mysqli_query($link,$dotaz);
    if(mysqli_connect_errno()){
echo "Failed to connect to MySQL:" . mysqli_connect_error();
exit();
}
    if(false===$vys){
    printf("error: %s\n", mysqli_error($ling));
    }
    else{
    echo 'done.';}
	if(mysqli_num_rows($vys)===0){
		$dotaz="INSERT INTO user(username,pass) VALUES ('$user',MD5('$pass'));";
		if($vys==mysqli_query($link,$dotaz)){
			$_SESSION['zprava']="Děkujeme za registraci.";}
		else{
			$_SESSION['zprava']="Něco se pokazilo, zkuste to znovu. $dotaz";}
	}else{
		$_SESSION['zprava']="Toto uživatelské jméno již existuje.";}
	}

header("Location:  http://". $_SERVER['HTTP_HOST']. dirname($_SERVER['PHP_SELF']). "registrace.php");
?>