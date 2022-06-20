<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<!-- NAVIGATION SECTION HERE -->
<a href="index.php" ><img src="nadpis.jpg" alt="Domů" class="header"></a>
<nav>
<ul class="menu">
    <li><a class="<?= ($activePage == 'index') ? 'active':''; ?>" href="index.php">Domů</a></li>
    <li><a class="<?= ($activePage == 'nabidka') ? 'active':''; ?>" href="nabidka.php">Nabídka</a></li>
    <li><a class="<?= ($activePage == 'galerie') ? 'active':''; ?>"href="galerie.php">Galerie</a></li>
    <li><a class="<?= ($activePage == 'rezervace') ? 'active':''; ?>" href="rezervace.php">Rezervace</a></li>
    <li><a class="<?= ($activePage == 'kontakt') ? 'active':''; ?>" href="kontakt.php">Kontakt</a></li>
    <li><a class="<?= ($activePage == 'ucet') ? 'active':''; ?>" href="registrace.php">Účet</a></li>
</ul>
</nav>
</body>