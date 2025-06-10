<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */
require "connessionedb.php";

// Prepara una query SQL per selezionare tutti i record dalla tabella 'speakers' 
// dove la colonna 'company' corrisponde a 'Zend Technologies'.
// Prepara l'istruzione PDO per l'esecuzione sicura della query parametrizzata.
// Definisce i dati da associare al parametro ':company' nella query SQL.
// Esegue la query con i dati forniti; in caso di errore, lancia un'eccezione con il messaggio di errore PDO.
// Recupera tutti i risultati della query come oggetti (PDO::FETCH_OBJ).
// Visualizza il risultato ottenuto tramite var_dump per il debug.
 $sql = 'SELECT * FROM speakers WHERE company=:company';
 $sth = $db->prepare($sql);
 $data = [ ':company' => 'Zend Technologies' ];
 if (! $sth->execute($data)) {
     throw new Exception(sprintf(
         "Error PDO exec: %s", implode(',', $db->errorInfo())
     ));
 }
 $result = $sth->fetchAll(PDO::FETCH_OBJ);
 var_dump($result);
