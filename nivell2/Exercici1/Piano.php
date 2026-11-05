<?php

require_once('Instrument.php');
class Piano implements Instrument {

    public function play():string {
        return "Playing the piano 🎹";
    }
}

?>
