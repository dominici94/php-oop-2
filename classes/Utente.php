<?php

class Utente{

    protected $id;
    protected $nome;
    protected $cognome;
    protected $email;
    protected $carteDiCredito = [];
    // protected $sconto = 0;
    

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

    public function setCdc($_cartaDiCredito)
    {
        $this->carteDiCredito[] = $_cartaDiCredito;
    }

    public function getCdc()
    {
        return $this->carteDiCredito;
    }


    public function insertCdc($cartaDaInserire)
    {
        if($cartaDaInserire->scadenza < 1){
            throw new Exception("carta di credito scaduta");
        }else{
        $this->carteDiCredito[] = $cartaDaInserire;
        }
    }

    
}

?>