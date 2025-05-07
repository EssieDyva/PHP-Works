<?php
if(empty($_GET['button'])) {
?>
    <form action="mio_form.php">
        <input type="text" name="q" value="dog">
        <input type="text" name="order" value="asc">
        <input type="color" name="color">
        <input type="submit" name="button" value="Invia">
    </form>
<?php
} else {
    echo 'la stringa cercata è: ' . $_GET['q'] . ' <br>con ordinamento ' . $_GET['order'] . 
' <br>con colore ';
?>
<div style="background-color: <?= $_GET['color']; ?>; width: 100px; height: 100px;">
</div>

<?php
}
