<?php

class CartaDiCredito{

    private $nome;
    private $cognome;
    private $numero;

    public function __construct($_nome, $_cognome, $_numero)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->numero = $_numero;
    }

    public function setNome($_nome)
    {
        $this->nome = $_nome;
    }
    public function getNome()
    {
        return $this->nome;
    }

    public function setCognome($_cognome)
    {
        $this->cognome = $_cognome;
    }
    public function getCognome()
    {
        return $this->cognome;
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