<?php

require_once __DIR__ . '/db.php';
var_dump($movie[1]);
// mostra i film
for($i = 0; $i < count($movie); $i++){
    echo '<h2>' . $movie[$i]->title . '</h2>';
    echo '<ul>';
    echo '<li>Titolo: ' . $movie[$i]->title . '</li>';
    echo '<li>Descrizione: ' . $movie[$i]->description . '</li>';
    echo '<li>Voto: ' . $movie[$i]->getVote() . '/5</li>';
    echo '</ul>';
}
?>