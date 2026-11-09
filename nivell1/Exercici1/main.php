<?php
require_once('Athlete.php');
require_once('Event.php');
require_once('OlympicGames.php');
require_once('Result.php');


$olympics = new OlympicGames();
$athlete1 = new Athlete('Usain Bolt', 'Jamaica');
$athlete2 = new Athlete('Michael Phelps', 'USA');

$event1 = new Event('100m Sprint', '2024-08-01');
$event2 = new Event('Swimming', '2024-08-02');

$results1 = new Result($athlete1, $event1, 'Gold');
$results2 = new Result($athlete2, $event2, 'Gold');
$results = [$results1, $results2];
foreach($results as $result) {
    $olympics->printData($result);
}
