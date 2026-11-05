<?php

include('Entity.php');

class Ghost extends Entity
{
    public function move(): void
    {
        echo "The ghost floats silently.\n";
    }
}
