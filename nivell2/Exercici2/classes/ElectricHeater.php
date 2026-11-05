<?php

require_once 'IMachineActions.php';
require_once 'IHeater.php';
class ElectricHeater implements IMachineActions, IHeater
{
    public function turnOn(): void
    {
        echo "Heater on\n";
    }

    public function turnOff(): void
    {
        echo "Heater off\n";
    }

    public function heat(): void
    {
        echo "Heating the room\n";
    }
}
