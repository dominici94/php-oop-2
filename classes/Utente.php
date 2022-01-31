<?php

class Utente{

    protected $id;
    protected $nome;
    protected $cognome;
    protected $email;
    protected $carteDiCredito = [];
    protected $sconto = 0;
    

    public function __construct($_id, $_nome, $_cognome, $_email)
    {
        $this->id = $_id;
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->email = $_email;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCognome() {
        return $this->cognome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setCdc($_carteDiCredito)
    {
        $this->carteDiCredito[] = $_carteDiCredito;
    }

    public function getCdc()
    {
        return $this->carteDiCredito;
    }

    public function getSconto()
    {
        return $this->sconto;
    }

    public function insertCdc($cartaDaInserire){
        $this->carteDiCredito[] = $cartaDaInserire;
    }

    
}

?>