<title>Riscaldamento 8</title>

<h1>Riscaldamento 8</h1>

<style>
    * {
        font-family: Arial, sans-serif;
        margin-bottom: 20px;
        padding: 0;
    }
</style>
<?php
// Controlla se il form è stato inviato
if (empty($_GET['button'])) {
?>

<div class="container" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
    <form action="riscaldamento.php" method="get">
        <label for="text">Inserisci un testo:</label><br>
        <textarea id="text" name="text" rows="4" cols="50"></textarea><br>
        <label for="select">In questo file:</label><br>
        <select id="select" name="select" style="width: 100%;" required>
            <?php
            echo generateOptions();
            ?>
        </select>
        <br>
        <input type="submit" name="button" value="Invia">
    </form>
</div>

<?php
} else {
    // Se il form è stato inviato, recupera i dati
    $selectoption = $_GET['select'];
    $text = $_GET['text'];
    // Controlla se c'è del testo
    if (empty($text)) {
        echo '<p style="color: red;">Il campo di testo non può essere vuoto.</p>';
        exit;
    }
    file_put_contents($selectoption, $text, FILE_APPEND);
}

function generateOptions() {
    $html = '';
    // Assumiamo che i file siano nella cartella "files"
    // Puoi cambiare il percorso in base alla tua struttura di cartelle
    $files = glob('files/*');
    foreach ($files as $file) {
        $html .= '<option value="' . $file . '">' . $file . '</option>';
    }
    return $html;
}
