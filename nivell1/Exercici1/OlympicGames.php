<?php
require_once('Result.php');
class OlympicGames {
    public function printData(Result $result): void {
        echo $result->__toString() . PHP_EOL;
    }
}


?>
