<?php

class Ordine{

    private $numero;
    private $tempoSpedizione;

    public function __construct($_numero)
    {
        $this->numero = $_numero;
    }

    public function setNumero($_numero)
    {
        $this->numero = $_numero;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setTempoSpedizione($_tempoSpedizione)
    {
        $this->tempoSpedizione = $_tempoSpedizione;
    }

    public function getTempoSpedizione()
    {
        return $this->tempoSpedizione;
    }
}


?>