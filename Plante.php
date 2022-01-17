<?php

require_once "Pokemon.php";

class Plante extends Pokemon {
    public function __construct(string $espece = "") {
        parent::__construct($espece, 5);
    }

    public function attaque() {
        $this->enerve();
        if ($this->humeur === 0) {
            echo $this->espece . " se fache et vous attaque avec des lianes ! Echappez-vous !".PHP_EOL;
        }
    }

    public function fuite() {
        $this->calme();
        if ($this->humeur === 10) {
            echo $this->espece . " s'enfuit dans les buissons ! Flûte !".PHP_EOL;
        }
    }

    public function habitat() {
        echo $this->espece . " vit dans les hautes herbes.".PHP_EOL;
    }
}