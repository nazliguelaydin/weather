<?php

namespace Nazliguelaydin\Weather;


class History
{
    private $days = [];

    public function addDay(Day $day)
    {
        $this->days[$day->getDate()] = $day;
    }

    public function getWeather($date)
    {
        if (array_key_exists($date, $this->days)) {
            return $this->days[$date];
        } else {
            return null;
        }
    }
}

?>