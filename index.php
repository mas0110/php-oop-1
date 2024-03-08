<?php
class Movie{
    public $titolo;
    public $genere;
    public $anno;
    public $regista;
    public $premio = 0;

    function __construct ($_titolo, $_genere, $_anno, $_regista){
        $this -> titolo = $_titolo;
        $this -> genere = $_genere;
        $this -> anno = $_anno;
        $this -> regista = $_regista;
        
    }

    public function setPremio($voto){
        if ($voto > 8){
            $this -> premio = 1;
        }
    }

    public function getPremio() {
        return $this -> premio;
    }
}

$spiderman = new Movie ('spiderman', 'azione', '2002','sam raimi');
$spiderman -> setPremio (8);

$interstellar = new Movie ('Interstellar', 'fantascienza', '2014','christopher Nolan');
$interstellar -> setPremio (9);

$TradingPlaces = new Movie ('una poltrona per due', 'commedia', '1983','John landis');
$TradingPlaces -> setPremio (7);

var_dump($spiderman,$interstellar, $TradingPlaces);

