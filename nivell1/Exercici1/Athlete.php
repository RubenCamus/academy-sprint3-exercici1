<?php

class Athlete {
    private string $name;
    private string $country;

    public function __construct(string $name, string $country)
    {
        $this->name = $name;
        $this->country = $country;
    }
    public function getName() {
        return $this->name;
    }
    public function getCountry() {
        return $this->country;
    }
}


?>
