<?php

class Movie {
    // argomenti
    public string $title;
    public string $description;
    public float $vote;

    // metodo costruttore
    public function __construct(string $_name, string $_description, float $_vote){
        $this->title = $_name;
        $this->description = $_description;
        $this->vote = $_vote;
    }

    // metodo getVote
    public function getVote(){
        return round($this->vote / 2); 
    }
}