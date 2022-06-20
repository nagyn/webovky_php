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
	<?php include "head.php";?>
    <body>
    <?php
    if(isset($_SESSION['test']))
    {
    echo $_SESSION['test'];
    unset($_SESSION['test']);
    }
        if(isset($_SESSION['zprava']))
    {
    echo $_SESSION['zprava'];
    unset($_SESSION['zprava']);
    }
    
    
    ?>
<form class="frm" action="registrovat.php" method="post">

Jméno: <input type="text" size="10" name="user" /><br />
Heslo: <input type ="password" size="10" name="pass" /><br />
Potvrdit heslo: <input type="password" size="10" name="pass2" />
<input type="submit" name="registrace" id="registrace" value="Registrovat">
</form>
</body>
</html>