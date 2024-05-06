<?php

namespace Nazliguelaydin\Weather;


class Day
{
    private $date;
    private $description;

    public function __construct($date, $description)
    {
        $this->date = $date;
        $this->description = $description;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getDescription()
    {
        return $this->description;
    }
}

?>