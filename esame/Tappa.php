<?php
class Tappa {
    public $nome = '';
    public $data = '';
    public $descrizione = '';

    public function setNome(string $string) {
        $this->nome = $string;
    }

    public function setData(string $string) {
        $this->data = $string;
    }

    public function toRow() : string {
        return 'nome tappa: ' . $this->nome . ' | ' . 'data: ' . $this->data . ' | ' . 'descrizione tappa: ' . $this->descrizione;
    }

    public function __construct(string $nome, string $data, string $descrizione) {
        $this->nome = $nome;
        $this->data = $data;
        $this->descrizione = $descrizione;
    }
}