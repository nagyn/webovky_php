<?php
include "session.php";
if(!isset($_SESSION['stula'])){$_SESSION['stula']="false";}
if(!isset($_SESSION['stulb'])){$_SESSION['stulb']="false";}
if(!isset($_SESSION['stulc'])){$_SESSION['stulc']="false";}
if(!isset($_SESSION['stuld'])){$_SESSION['stuld']="false";}
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
    
    
    
    
    <?php 
    if(!isset($_SESSION['uid'])){
    echo '<p>Pro zobrazení rezervace se prosím přihlaste <a href="ucet.php">zde</a>.</p>';   
    }
    else{    
    ?>
    
    
    <table>
    <tr>
    <td  class="rezervace">         <?php if(isset($_SESSION['zprava']))
    {
    echo $_SESSION['zprava'];
    unset($_SESSION['zprava']);
    }else{
    echo "Rezervce stolů";
    }?></td>
    <td>
    <form action="rezervovat.php" method="post">
    <div><label for="datum">Datum:</label><input name="datum" type="date" value="<?php echo isset($_SESSION['datum']) ? $_SESSION['datum'] : date('Y-m-d'); ?>"></div>
    <div><label for="cas">Hodina:</label>
    <select name="cas" id="cas">
            <option value="15" 
            <?php 
            if(isset($_SESSION['cas'])){
            if($_SESSION['cas']=="15"){ 
            echo 'selected="selected"';}} ?> >15:00</option>
            <option value="16" <?php if(isset($_SESSION['cas'])){if($_SESSION['cas']=="16"){ echo 'selected="selected"';}} ?>>16:00</option>
            <option value="17" <?php if(isset($_SESSION['cas'])){if($_SESSION['cas']=="17"){ echo 'selected="selected"';}} ?>>17:00</option>
            <option value="18" <?php if(isset($_SESSION['cas'])){if($_SESSION['cas']=="18"){ echo 'selected="selected"';}} ?>>18:00</option>
            <option value="19" <?php if(isset($_SESSION['cas'])){if($_SESSION['cas']=="19"){ echo 'selected="selected"';}} ?>>19:00</option>
            <option value="20" <?php if(isset($_SESSION['cas'])){if($_SESSION['cas']=="20"){ echo 'selected="selected"';}} ?>>20:00</option>
            <option value="21" <?php if(isset($_SESSION['cas'])){if($_SESSION['cas']=="21"){ echo 'selected="selected"';}} ?>>21:00</option>
            <option value="22" <?php if(isset($_SESSION['cas'])){if($_SESSION['cas']=="22"){ echo 'selected="selected"';}} ?>>22:00</option>
    </select></div>
    <div>
    <label for="stul">Stůl</label>
    <select name="stul">
        <option value="1" <?php if(isset($_SESSION['stul'])){if($_SESSION['stul']=="1"){ echo 'selected="selected"';}} ?>>1</option>
        <option value="2" <?php if(isset($_SESSION['stul'])){if($_SESSION['stul']=="2"){ echo 'selected="selected"';}} ?>>2</option>
        <option value="3" <?php if(isset($_SESSION['stul'])){if($_SESSION['stul']=="3"){ echo 'selected="selected"';}} ?>>3</option>
        <option value="4" <?php if(isset($_SESSION['stul'])){if($_SESSION['stul']=="4"){ echo 'selected="selected"';}} ?>>4</option>
    </select>
    </div>
    
    <input type="submit" name="zobrazit" value="Zobrazit stoly">
    
    <?php
    if(isset($_SESSION['zobrazit'])){if($_SESSION['zobrazit']=="true"){ echo '<input type="submit" name="rezervovat" value="Rezervovat">';}}
    ?>
    </form>
    </td>
    </tr>
    <?php 
    if(isset($_SESSION['zobrazit'])){
    if($_SESSION['zobrazit']=="true"){
    
    echo "<tr>";
    echo "<td>";    
    if($_SESSION['stula']=="false"){
    echo '<img src="stul_a" alt="Stůl 1" class="stoly">'; 
    }else{
    echo '<img src="stul_a_r" alt="Stůl 1" class="stoly">';
    }
    echo "</td>";
    echo "<td>";
    
    if($_SESSION['stulb']=="false"){
    echo '<img src="stul_b" alt="Stůl 2" class="stoly">'; 
    }else{
    echo '<img src="stul_b_r" alt="Stůl 2" class="stoly">';
    }
    
    echo "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>";
    
    if($_SESSION['stulc']=="false"){
    echo '<img src="stul_c" alt="Stůl 3" class="stoly">'; 
    }else{
    echo '<img src="stul_c_r" alt="Stůl 3" class="stoly">';
    }
    
    echo "</td>";
    
    echo "<td>";
        
    if($_SESSION['stuld']=="false"){
    echo '<img src="stul_d" alt="Stůl 4" class="stoly">'; 
    }else{
    echo '<img src="stul_d_r" alt="Stůl 4" class="stoly">';
    }

    
    echo "</td>";
    echo "</tr>";
    }
    }
    ?>
    </table>
    <?php 
    }
    ?>
    
    
    <footer>
        <p>&copy; 2021 &middot; Created by Tomáš Nguyen</a></p>
    </footer>
	</body>
</html>