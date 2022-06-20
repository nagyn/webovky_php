<?php
session_start();
$ok=0;
if(isset($_SESSION['uid'])){
	if(isset($_SESSION['jmeno'])){
		if(isset($_SESSION['cook'])){
			if(isset($_COOKIE['webskola'])){
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
<!DOCTYPE html>
<html lang="cs"> 
	<head>
		<title>CHC Monstr</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styly.css">
	</head>
	<body>
<?php include "head.php";?>

<?php if(isset($_SESSION['jmeno'])){
echo "Vítejte" . $_SESSION['jmeno'];
}
else{
include "prihlaseni.php";}

?>





	<footer>
        <p>&copy; 2021 &middot; Created by Tomáš Nguyen</a></p>
    </footer>
	</body>
</html>