
<?php

use Nazliguelaydin\Weather\Day;
use Nazliguelaydin\Weather\History;

require 'vendor/autoload.php';

$history = new History();
$history->addWeatherData(new Day("2024-05-01", "sonnig"));
$history->addWeatherData(new Day("2024-05-02", "windig"));
$history->addWeatherData(new Day("2024-05-03", "regnerisch"));

// Holen der Daten aus der URL
$date = $_GET['date'] ?? null;

if ($date) {
    $weather = $history->getWeatherByDate($date);
    if ($weather) {
        echo "Das Wetter am $date war " . $weather->getDescription();
    } else {
        echo "Es sind keine Daten vorhanden für den $date";
    }
} else {
    echo "Bitte gib ein Datum ein.";
}

//?date=2024-05-03
?>