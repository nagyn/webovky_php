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
	<?php include "head.php";?>
    
    <table>
    <tr>
    <td  class="rezervace">Rezervace stolů</td>
    <td>
    <form action="rezervovat.php" method="post">
    <div><label for="datum">Datum:</label><input name="datum" type="date" value="<?php echo date('Y-m-d'); ?>"></div>
    <div><label for="cas">Hodina:</label>
    <select name="cas" id="cas">
            <option value="15">15:00</option>
            <option value="16">16:00</option>
            <option value="17">17:00</option>
            <option value="18">18:00</option>
            <option value="19">19:00</option>
            <option value="20">20:00</option>
            <option value="21">21:00</option>
            <option value="22">22:00</option>
    </select></div>
    <div>
    <label for="stul">Stůl</label>
    <select name="stul">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    </div>
    <input type="submit" name="rezervovat" value="Rezervovat">
    <input type="submit" name="zobrazit" value="Zobrazit nabídku">  
    </form>
    </td>
    </tr>
    
    <tr>
    <td>
    <div>
    <img src="stul_a" alt="Stůl 1" class="stoly">
    </div>
    </td>
    <td>
    <img src="stul_b" alt="Stůl 1" class="stoly">
    </td>
    </tr>
    
    <tr>
    <td>
    <div>
    <img src="stul_c" alt="Stůl 1" class="stoly">
    </div>
    </td>
    <td>
    <img src="stul_d" alt="Stůl 1" class="stoly">
    </td>
    </tr>
    
    
    </table>
    
    
    
    <footer>
        <p>&copy; 2021 &middot; Created by Tomáš Nguyen</a></p>
    </footer>
	</body>
</html>