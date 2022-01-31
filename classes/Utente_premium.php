<?php
class Utente_premium extends Utente{

    private $sconto;

    public function setSconto($_sconto){
        $this->sconto = $_sconto;
    }

    public function getSconto()
    {
        return $this->sconto;
    }

}


?>