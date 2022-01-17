<?php

require_once "Pokemon.php";

class Eau extends Pokemon {
    public function __construct(string $espece = "") {
        parent::__construct($espece, 8);
    }

    public function attaque() {
        $this->enerve();
        if ($this->humeur === 0) {
            echo $this->espece . " est en colère et vous attaque avec des bulles ! Battez en retraite !".PHP_EOL;
        }
    }

    public function fuite() {
        $this->calme();
        if ($this->humeur === 10) {
            echo $this->espece . " plonge pour s'enfuir ! Raté !".PHP_EOL;
        }
    }

    public function habitat() {
        echo $this->espece . " vit dans les étangs.".PHP_EOL;
    }
}