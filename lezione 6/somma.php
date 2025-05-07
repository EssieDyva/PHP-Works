<?php
if(empty($_GET['button'])) {
?>
    <form action="somma.php">
        <label for="number1">Numero 1:</label>
        <input type="number" name="number1">
        <br>
        <label for="number2">Numero 2:</label>
        <input type="number" name="number2">
        <br>
        <input type="submit" name="button" value="Invia">
    </form>
<?php
} else {
    $somma = $_GET['number1'] + $_GET['number2'];
    echo 'la somma è: ' . $somma;
}