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
else{ 
require_once('config.php');
$jmeno = $_SESSION['jmeno'];
$dotaz="SELECT * FROM `stoly` WHERE jmeno='" . $jmeno . "';";
$vys=mysqli_query($link,$dotaz);
if(mysqli_num_rows($vys)==0){
echo "<p>Nemáte žádné rezervace</p>";
}else{
?>

<table class="frm"><tr><td>Den</td><td>Hodina</td><td>Stůl</td><td>Vybráno</td></tr>

<?php
    while($radek=mysqli_fetch_array($vys)){
    echo '<tr><td>' . $radek["den"] . "</td><td>" . $radek["hodina"] . '</td><td>' . $radek["stul"] .'</td><td><input type="checkbox" form="zruseni" name="ids[]" value="' . $radek["id"] . '"</td></tr>';
    }
?>
<tr><th>
<form id="zruseni" action="zruseni.php" method="post">
<input type="submit" name="zrusit" value="Zrušit rezervace">
</form>
</th></tr>
</table>
<?php
}
?>




<p>Pro odhlášení klikněte <a href="logout.php">zde</a>.</p>
<?php
}
?>





	<footer>
        <p>&copy; 2021 &middot; Created by Tomáš Nguyen</a></p>
    </footer>
	</body>
</html>