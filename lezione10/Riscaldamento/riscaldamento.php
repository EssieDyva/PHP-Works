<?php
// Avvia la sessione per mantenere i dati tra le richieste
session_start();

// Contatore di visite: inizializza se non esiste e incrementa ad ogni visita
if (!isset($_SESSION['visite'])) {
    $_SESSION['visite'] = 0;
}
$_SESSION['visite']++;

// Mostra il numero di visite effettuate nella sessione corrente
echo 'hai visitato questa pagina ' . $_SESSION['visite'] . ' volte in questa sessione.<br>';

// Gestione del nome utente tramite parametro GET
if (isset($_GET['username'])) {
    // Salva il nome utente nella sessione
    $_SESSION['username'] = $_GET['username'];
}

// Se il nome utente non è ancora stato impostato, mostra il form di inserimento
if (!isset($_SESSION['username'])) {
?>
    <form method="get" action="riscaldamento.php">
        <label for="username">Inserisci il tuo nome:</label>
        <input type="text" name="username" id="username" required>
        <input type="submit" value="Invia">
    </form>
<?php
} else {
    // Se il nome utente è presente in sessione, mostra il messaggio di benvenuto
?>
    <p>Benvenuto, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
<?php
}
?>
<a href="reset.php">Reset Sessione</a><br>