<?php

require_once __DIR__ . '/classes/Utente.php';

require_once __DIR__ . '/classes/Carta_di_credito.php';
// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
// Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
// Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
// $c = new CreditCard(..);
// $user->insertCreditCard($c);
// BONUS:
// Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta).
// Buon lavoro :faccia_leggermente_sorridente:

// prodotti --> diverse tipologie
// utenti --> premium per es.
// carte di credito
// ordini
// eccezioni

$pippo = new Utente(1, 'marco', 'morri', 'marcomorri@hotmail.it');

$pippo->setCdc('abab 2030 4832 5821');
$pippo->setCdc('uzuz 3030 5678 5743');



$primacdc = new CartaDiCredito('marco','morri', 'bcbc12341234');

$pippo->insertCdc($primacdc);

$secondacdc = new CartaDiCredito('marco', 'morri', 'cdcd12345432');

$pippo->insertCdc($secondacdc);


// $pippo->insertcdc($primacdc);
// $pippo->insertCdc($secondacdc);

var_dump($pippo);


?>