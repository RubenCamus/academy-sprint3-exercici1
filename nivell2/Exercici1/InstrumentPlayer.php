<?php
require_once("Guitar.php");
require_once("Drums.php");
require_once("Piano.php");
class InstrumentPlayer
{
    public function playInstrument(Instrument $instrument){
        echo $instrument->play() . PHP_EOL;
    }
}

$player = new InstrumentPlayer();
$player->playInstrument(new Guitar);
$player->playInstrument(new Drums);
$player->playInstrument(new Piano);
