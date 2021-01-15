<?php

// creo una classe Movie
class Movies{
    public $title;
    public $language;
    public $year;
    public $duration;
    public $genre;

    // creo un costrutto con 2 parametri(titolo e lingua) per la creazione dell'istanza
    function __construct($_title, $_language) {
        $this->title = $_title;
        $this->language = $_language;
    }

    // creo un metodo per ricavare il titolo
    public function getTitle() {
        return $this->title;
    }

    // creo un secondo metodo per ricavare il genere
    public function getgenre() {
        return $this->genre;
    }
}

// creo una nuova istanza della classe Movie
$pulp_fiction = new Movies('Pulp Fiction', 'English');

// stampo il nome dell'instanza $pulp_fiction
echo '<h1>Titolo della variabile: ' . $pulp_fiction->getTitle() . '</h1>';

// assegno un valore alla variabile "year" dell'istanza $pulp_fiction
$pulp_fiction->year = 1994;

// stampo il valore della variabile "year" dell'istanza $pulp_fiction
echo '<p>Anno della variabile: ' . $pulp_fiction->year . '</p>';

// assegno un valore alla variabile "duration" dell'istanza $pulp_fiction
$pulp_fiction->duration = 154;

// stampo il valore della variabile "duration" dell'istanza $pulp_fiction
echo '<p>Durata della variabile: ' . $pulp_fiction->duration . ' min' . '</p>';

// assegno un valore alla variabile "genre" dell'istanza $pulp_fiction
$pulp_fiction->genre = 'noir';

// stampo il valore della variabile "genre" dell'istanza $pulp_fiction
echo '<p>Genere della variabile: ' . $pulp_fiction->getgenre() . '</p>';



// creo una nuova istanza della classe Movie
$forrest_gump = new Movies('Forrest Gump', 'English');

// stampo il nome dell'instanza $forrest_gump
echo '<h1>Titolo della variabile: ' . $forrest_gump->getTitle() . '</h1>';

// assegno un valore alla variabile "year" dell'istanza $forrest_gump
$forrest_gump->year = 1994;

// stampo il valore della variabile "year" dell'istanza $forrest_gump
echo '<p>Anno della variabile: ' . $forrest_gump->year . '</p>';

// assegno un valore alla variabile "duration" dell'istanza $forrest_gump
$forrest_gump->duration = 142;

// stampo il valore della variabile "duration" dell'istanza $forrest_gump
echo '<p>Durata della variabile: ' . $forrest_gump->duration . ' min' . '</p>';

// assegno un valore alla variabile "genre" dell'istanza $forrest_gump
$forrest_gump->genre = 'commedia';

// stampo il valore della variabile "genre" dell'istanza $forrest_gump
echo '<p>Genere della variabile: ' . $forrest_gump->getgenre() . '</p>';


// creo una nuova istanza della classe Movie
$il_padrino = new Movies('Il Padrino', 'English');

// stampo il nome dell'instanza $il_padrino
echo '<h1>Titolo della variabile: ' . $il_padrino->getTitle() . '</h1>';

// assegno un valore alla variabile "year" dell'istanza $il_padrino
$il_padrino->year = 1972;

// stampo il valore della variabile "year" dell'istanza $il_padrino
echo '<p>Anno della variabile: ' . $il_padrino->year . '</p>';

// assegno un valore alla variabile "duration" dell'istanza $il_padrino
$il_padrino->duration = 175;

// stampo il valore della variabile "duration" dell'istanza $il_padrino
echo '<p>Durata della variabile: ' . $il_padrino->duration . ' min' . '</p>';

// assegno un valore alla variabile "genre" dell'istanza $il_padrino
$il_padrino->genre = 'gangster';

// stampo il valore della variabile "genre" dell'istanza $il_padrino
echo '<p>Genere della variabile: ' . $il_padrino->getgenre() . '</p>';



?>
