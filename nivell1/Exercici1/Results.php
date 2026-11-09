<?php

class Results {
    public function __construct(private Athlete $athlete, private Event $event, private string $medal)
    {}
    public function getAthlete(): Athlete {
        return $this->athlete;
    }
    public function getEvent(): Event {
        return $this->event;
    }
    public function getMedal(): string {
        return $this->medal;
    }

}



?>
