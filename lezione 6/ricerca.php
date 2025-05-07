<?php
echo 'la stringa cercata è: ' . $_GET['q'] . ' <br>con ordinamento ' . $_GET['order'] . 
' <br>con colore ';
?>

<div style="background-color: <?= $_GET['color']; ?>; width: 100px; height: 100px;">
</div>