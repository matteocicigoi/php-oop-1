<?php

require_once __DIR__ . '/db.php';
// mostra i film
for($i = 0; $i < count($movie); $i++){
    echo '<h2>' . $movie[$i]->title . '</h2>';
    echo '<ul>';
    echo '<li>Titolo: ' . $movie[$i]->title . '</li>';
    echo '<li>Descrizione: ' . $movie[$i]->description . '</li>';
    echo '<li>Generi: ';
    foreach($movie[$i]->genres as $genre){
        echo "$genre ";
    }
    echo '</li>';
    echo '<li>Voto: ' . $movie[$i]->getVote() . '/5</li>';
    echo '</ul>';
}
?>