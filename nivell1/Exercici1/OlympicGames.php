<?php
require_once('Results.php');
class OlympicGames {
    public function printData(Results $result) {
        echo ' Athlete: ' . $result->athlete->getName() . ' in: ' . $result->event->getEvent() . ' got : ' . $result->medal . PHP_EOL;
    }
}


?>
