<?php
include "session.php";
?>
<!DOCTYPE html>
<html lang="cs"> 
	<head>
		<title>CHC Monstr</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styly.css">
	</head>
	<body>
<?php include "head.php";

        if(isset($_SESSION['zprava']))
    {?>
    <p>
    <?php echo $_SESSION['zprava']; ?>
    </p>
    
<?php unset($_SESSION['zprava']);
    }
if(!isset($_SESSION["uid"])){
include "prihlaseni.php";
}
else{ ?>
<p>Vítejte <?php echo $_SESSION['jmeno']; ?> </p>
<p>Pro odhlášení klikněte <a href="logout.php">zde</a>.</p>
<?php
}
?>





	<footer>
        <p>&copy; 2021 &middot; Created by Tomáš Nguyen</a></p>
    </footer>
	</body>
</html>