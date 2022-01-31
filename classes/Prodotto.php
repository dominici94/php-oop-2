<?php

class Prodotto{
    private $codice;
    private $nome;
    private $immagine;

    public function __construct($_codice, $_nome)
    {
        $this->codice = $_codice;
        $this->nome = $_nome;
    }

    public function setCodice($_codice)
    {
        $this->codice = $_codice;
    }
    public function getCodice()
    {
        return $this->codice;
    }

    public function setNome($_nome)
    {
        $this->nome = $_nome;
    }
    public function getNome()
    {
        return $this->nome;
    }

    public function setImmagine($_immagine)
    {
        $this->immagine = $_immagine;
    }
    public function getImmagine()
    {
        return $this->immagine;
    }

}

?>