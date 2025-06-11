<?php
session_start();
?>

    <style>
        * {
            font-family: Arial, sans-serif;
            margin-bottom: 20px;
            padding: 0;
        }

        body {
            background: rgb(198, 186, 186);
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: rgb(179, 160, 160);
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            padding: 32px 24px;
            margin: 24px auto;
            max-width: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            font-weight: bold;
            margin-top: 12px;
            margin-bottom: 4px;
            color: #333;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 8px 10px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 1em;
            background: #f9f9f9;
            transition: border-color 0.2s;
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        select:focus {
            border-color: #007bff;
            outline: none;
        }

        input[type="submit"] {
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 10px 24px;
            font-size: 1em;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background: #0056b3;
        }

        a {
            color: #007bff;
            text-decoration: none;
            margin: 0 8px;
        }

        a:hover {
            text-decoration: underline;
        }

        pre {
            background: #f1f1f1;
            border-radius: 6px;
            padding: 12px;
            text-align: left;
            max-width: 100%;
            overflow-x: auto;
        }

        p {
            font-weight: bold;
            margin-left: 10px;
            margin-top: 10px;
        }
    </style>

<?php
require 'Tappa.php';
require 'functions.php';

// Controlla se il form è stato inviato
if (empty($_GET['button'])) {
?>
    <div class="container">
        <form action="index.php" method="get">
            <label for="data">Inserisci la data della tappa:</label><br>
            <input type="date" name="data" required><br>
            <label for="nome">Inserisci il nome della tappa:</label><br>
            <input type="text" name="nome" required><br>
            <label for="descrizione">Inserisci la descrizione della tappa:</label><br>
            <input type="text" name="descrizione" required><br>
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

    <br>

    <div class="container">
        <form action="index.php" method="get">
            <label for="selectView">Selezionare il file della quale si vuole visualizzare il contenuto:</label><br>
            <select id="selectView" name="selectView" style="width: 100%;" required>
                <?php
                echo generateOptions();
                ?>
            </select>
            <label for="button">Visualizza il numero di tappe e i contenuti del file selezionato</label><br>
            <input type="submit" name="button" value="InviaView">
        </form>
    </div>

<?php
} else {
    if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
    }

    if (isset($_GET['button'])) {
        $form = $_GET['button'];

        switch ($form) {
            case 'Invia':
                $selectoption = $_GET['select'];
                $data = $_GET['data'];
                $nome = $_GET['nome'];
                $descrizione = $_GET['descrizione'];

                if (empty($data) || empty($nome) || empty($descrizione)) {
                    echo '<p style="color: red;">I campi di testo non possono essere vuoti.</p>';
                    exit;
                }
                salvaTappa($selectoption, $data, $nome, $descrizione);
                $_SESSION['count'] = contaTappe($selectoption);
                break;

            case 'InviaView':
                $selectoptionView = $_GET['selectView'];
                $count = contaTappe($selectoptionView);
                echo "<p>Hai inserito: $count tappa/e</p>";
                echo "<br><pre>";
                $tappe = leggiTappe($selectoptionView);
                foreach ($tappe as $tappa) {
                    echo htmlspecialchars($tappa) . "\n";
                }
                echo "</pre>";
                break;
        }
    }
    echo "<br>";
    echo "<a href='index.php'>Inserisci una nuova tappa</a>";
    echo "<br>";
    echo "<a href='reset.php'>Resetta la sessione</a>";
}
