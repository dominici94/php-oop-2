<?php
class CartaDiCredito{

    // private $nome;
    // private $cognome;
    private $numero;

    // scadenza = numero di giorni cha mancano alla scadenza della carta.
    public $scadenza;

    // public function __construct($_nome, $_cognome, $_numero)
    // {
    //     $this->nome = $_nome;
    //     $this->cognome = $_cognome;
    //     $this->numero = $_numero;
    // }

    public function __construct($_numero, $_scadenza)
    {
        $this->numero = $_numero;
        $this->scadenza = $_scadenza;
    }

    // public function setNome($_nome)
    // {
    //     $this->nome = $_nome;
    // }
    // public function getNome()
    // {
    //     return $this->nome;
    // }

    // public function setCognome($_cognome)
    // {
    //     $this->cognome = $_cognome;
    // }
    // public function getCognome()
    // {
    //     return $this->cognome;
    // }

    public function setScadenza($_scadenza)
    {
        $this->scadenza = $_scadenza;
    }
    public function getScadenza()
    {
        return $this->scadenza;
    }

    public function setNumero($_numero)
    {
        $this->numero = $_numero;
    }
    public function getNumero()
    {
        return $this->numero;
    }
}

?>