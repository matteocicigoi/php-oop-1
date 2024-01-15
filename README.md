# Esercizio: PHP OOP

## Classe Movie per salvare i film in base ai requisiti della classe
``` php
object(Movie){
  'title' => string 'Film'
  'description' => string 'Descrizione'
  'vote' => float 4.3
}
```
## Il metodo getVote restituisce il voto diviso per 2 e arrotondato
``` php
public function getVote(){
    return round($this->vote / 2); 
}
```