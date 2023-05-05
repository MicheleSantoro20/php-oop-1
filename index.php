<?php

class Movie {
    public $name;
    public $genre;
    public $vote;
    public $duration;

    public function __construct($name, $genre, $vote ,$duration)

    {
        $this->name = $name;
        $this->genre = $genre;
        $this->vote = $vote;
        $this->duration = $duration;
    }

    public function getMovie() {
        return  'Il nome del film è:' . $this->name . '<br>Il genere è:' . $this->genre . '<br>Il voto è:' . $this->vote . '<br>Il film dura:' . $this->duration;
    }
}

$film = new Movie('Io sono leggenda', 'Fantascienza', 10, '100 Minuti');
var_dump($film);
$film2 = new Movie('Titanic','Drammatico', 9,'95 Minuti');
var_dump($film);

echo $film->getMovie();
echo '<br/>';
echo $film2->getMovie();