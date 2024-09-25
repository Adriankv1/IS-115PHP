<?php
$current_date = date("Y-m-d");

$event_date = "2024-09-29"; 


if ($current_date > $event_date) {
    echo "Fotballkampen er allerede gjennomført.";
} elseif ($current_date == $event_date) {
    echo "Fotballkampen er i dag.";
} else {
    echo "Fotballkampen er ikke gjennomført ennå.";
}
?>
