<?php

require_once('ICanAttack.php');
require_once('Entity.php');
class Character extends Entity implements ICanAttack
{
    public function move(): void
    {
        echo "The character moves forward.\n";
    }
    public function attack(): void
    {
        echo "The character attacks with a sword.\n";
    }
}
