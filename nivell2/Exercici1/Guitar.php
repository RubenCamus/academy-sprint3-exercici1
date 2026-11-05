<?php

require_once('Instrument.php');
class Guitar implements Instrument {

    public function play():string {
        return "Playing the guitar 🎸";
    }
}

?>
