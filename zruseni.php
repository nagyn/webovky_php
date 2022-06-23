<?php
session_start();
if(isset($_POST['zrusit'])){

    if(!empty($_POST['ids'])){
        foreach($_POST['ids'] as $value){
            	$dotaz="DELETE FROM `stoly` WHERE id='" . $value . "';";
                require_once('config.php');
	            $vys=mysqli_query($link,$dotaz);
        }   
        $_SESSION['zprava'] = "Rezervace zrušena.";
    }
}



header("Location:  http://". $_SERVER['HTTP_HOST']. dirname($_SERVER['PHP_SELF']). "ucet.php");
?>