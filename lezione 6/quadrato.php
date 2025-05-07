<?php
$larghezza = !empty($_GET['lato1']) ? intval($_GET['lato1']) : 20;
$altezza = !empty($_GET['lato2']) ? intval($_GET['lato2']) : 20;
$colore = !empty($_GET['colore']) ? htmlspecialchars($_GET['colore']) : '#000000';
?>

<form>
<label>Larghezza</label>
<input type="number" name="lato1" value="<?= $larghezza ?>" required>
<br>
<label>Altezza</label>
<input type="number" name="lato2" value="<?= $altezza ?>" required>
<br>
<label>Colore</label>
<input type="color" name="colore" value="<?= $colore ?>">
<br>
<input type="submit" name="button" value="Invia">
</form>

<hr>
<div style="
width: <?= $larghezza ?>px; 
height: <?= $altezza ?>px; 
background-color: <?= $colore ?>"></div>