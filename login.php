<?php
$ok=0;
if(isset($_POST['login'])){
	if(isset($_POST['user'])&& (strlen($_POST['user'])>0)){$user=$_POST['user'];}
	
	if(isset($_POST['pass'])&& (strlen($_POST['pass'])>6)){$pass=$_POST['pass'];}
	
	if(isset($user)&&isset($pass)){$ok=1;}
}

session_start();
if($ok==0){$_SESSION['zprava']="Formulář nebyl správně vyplněn.";}
else{
	
    $dotaz="SELECT uid FROM user WHERE username='" . $user . "' AND pass=MD5('" . $pass . "')";
	require_once('config.php');
	
	$vysledek=mysqli_query($link,$dotaz);
	if(mysqli_num_rows($vysledek)==1){
		
		$radek=mysqli_fetch_array($vysledek);
		//echo "<b>".$radek['id_user']."</b>";
		$_SESSION['zprava']="Přihlášení proběhlo úspěšně.";
		$_SESSION['uid']=$radek['uid'];
		$_SESSION['jmeno']=$user;
		$rand=bin2hex(random_bytes(15));
		$_SESSION['cook']=$rand;
		setcookie("webmonstr",$rand,time()+20*60);
	}
	else{$_SESSION['zprava']="Špatná kombinace už. jména a hesla.";}
	
	}

header("Location:  http://". $_SERVER['HTTP_HOST']. dirname($_SERVER['PHP_SELF']). "ucet.php");
?>