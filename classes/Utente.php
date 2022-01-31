<?php

class Utente{

    protected $id;
    protected $nome;
    protected $cognome;
    protected $email;

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
}

?>