<?php

class Result {
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
    public function __toString()
    {
        return $this->athlete->__toString() . ' got ' . $this->medal. ' on '. $this->event->__toString() ;
    }

}



?>
