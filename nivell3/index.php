<?php

include('classes/Ghost.php');
include('classes/Character.php');
$player = new Character();
$enemy = new Ghost();
$enemy->move();
$player->attack();
$player->move();
