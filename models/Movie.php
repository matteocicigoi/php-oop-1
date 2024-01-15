<?php

class Movie {
    // argomenti
    public string $title;
    public string $description;
    public float $vote;
    public array $genres;

    // metodo costruttore
    public function __construct(string $_name, string $_description, float $_vote, array $_genres){
        $this->title = $_name;
        $this->description = $_description;
        $this->vote = $_vote;
        $this->genres = $_genres;
    }

    // metodo getVote
    public function getVote(){
        return round($this->vote / 2); 
    }
}