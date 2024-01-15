<?php
// classe Movie
require_once __DIR__ . '/models/Movie.php';

// array di film
$movie = [];

// singoli film
$movie[] = new Movie('Film 1', 'Descrizione 1', 7, ['Genere 1', 'Genere 2']);
$movie[] = new Movie('Film 2', 'Descrizione 2', 4.3, ['Genere 1', 'Genere 2']);

?>