<?php
session_start();
$jmeno=$_SESSION['jmeno'];
$ok=0;
if(isset($_POST['zobrazit'])){
	if(isset($_POST['datum'])){$datum=$_POST['datum'];}
	
	if(isset($_POST['cas'])){$cas=$_POST['cas']; }
	
	if(isset($datum)&&isset($cas)){
    $ok=1;
    $_SESSION['datum']=$_POST['datum'];
    $_SESSION['cas']=$_POST['cas'];
    }
    
   
if($ok==0){$_SESSION['zprava']="Formulář nebyl správně vyplněn.";}
else{
$dotaz="SELECT * FROM `stoly` WHERE den='" . $datum . "' AND hodina='" . $cas . "';";
require_once("config.php");
$vysledek=mysqli_query($link,$dotaz);
$_SESSION['stula']="false";
$_SESSION['stulb']="false";
$_SESSION['stulc']="false";
$_SESSION['stuld']="false";
while($radek=mysqli_fetch_array($vysledek)){
if($radek['stul']=="1"){$_SESSION['stula']="true";}
if($radek['stul']=="2"){$_SESSION['stulb']="true";}
if($radek['stul']=="3"){$_SESSION['stulc']="true";}
if($radek['stul']=="4"){$_SESSION['stuld']="true";}
}
$_SESSION['zobrazit']="true";
}
}



if(isset($_POST['rezervovat'])){
	if(isset($_POST['datum'])){$datum=$_POST['datum'];}
	
	if(isset($_POST['cas'])){$cas=$_POST['cas'];}
    
    if(isset($_POST['stul'])){$stul=$_POST['stul'];}
    
	
	if(isset($datum)&&isset($cas)&&isset($stul)){
    $ok=1;
    $_SESSION['datum']=$_POST['datum'];
    $_SESSION['cas']=$_POST['cas'];
    $_SESSION['stul']=$_POST['stul']; 
    }
    
    
    
    
if($ok==0){$_SESSION['zprava']="Formulář nebyl správně vyplněn.";}
else{
    $dotaz="SELECT * FROM `stoly` WHERE stul='" . $stul . "' AND den='" . $datum . "' AND hodina='" . $cas . "';";
require_once("config.php");
$vys=mysqli_query($link,$dotaz);

if(mysqli_num_rows($vys)==0){
       $dotaz="INSERT INTO `stoly` (jmeno, stul, den, hodina) VALUES('$jmeno', '$stul', '$datum', '$cas');";
		if($vys==mysqli_query($link,$dotaz)){
			$_SESSION['zprava']="Stůl byl rezervován.";
            $_SESSION['zobrazit']="false";
            }
		else{
			$_SESSION['zprava']="Něco se pokazilo, zkuste to znovu. $dotaz";}
	}else{
		$_SESSION['zprava']="Tento stůl je již rezervován.";} 
	}


}   
    
    


header("Location:  http://". $_SERVER['HTTP_HOST']. dirname($_SERVER['PHP_SELF']). "rezervace.php");
?>