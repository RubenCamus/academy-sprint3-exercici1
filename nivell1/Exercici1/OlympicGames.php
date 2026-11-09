<?php
require_once('Results.php');
class OlympicGames {
    public function printData(Results $result): void {
        echo ' Athlete: ' . $result->getAthlete()->getName() . ' in: ' . $result->getEvent()->getEvent() . ' got : ' . $result->getMedal() . PHP_EOL;
    }
}


?>
