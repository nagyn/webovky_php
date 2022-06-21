<?php
$ok=0;
if(isset($_POST['zobrazit'])){
	if(isset($_POST['datum'])){$datum=$_POST['datum'];}
	
	if(isset($_POST['cas'])){$cas=$_POST['cas']; }
	
	if(isset($datum)&&isset($cas)){$ok=1;}
}

$ok=0;
if(isset($_POST['rezervovat'])){
	if(isset($_POST['datum'])){$datum=$_POST['datum'];}
	
	if(isset($_POST['cas'])){$cas=$_POST['cas'];}
    
    if(isset($_POST['stul'])){$stul=$_POST['stul'];}
    
	
	if(isset($datum)&&isset($cas)&&isset($stul)){$ok=1;}
}


?>