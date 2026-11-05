<?php
require_once('Instrument.php');
class Drums implements Instrument {

    public function play():string {
        return "Playing the drums 🥁";
    }
}

?>
