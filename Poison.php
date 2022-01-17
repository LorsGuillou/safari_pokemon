<?php

require_once "Pokemon.php";

class Poison extends Pokemon {
    public function __construct(string $espece = "") {
        parent::__construct($espece, 2);
    }

    public function attaque() {
        $this->enerve();
        if ($this->humeur === 0) {
            echo $this->espece . " est furieux et s'apprête à vous cracher du venin ! Fuyez !".PHP_EOL;
        }
    }

    public function fuite() {
        $this->calme();
        if ($this->humeur === 10) {
            echo $this->espece . " creuse pour vous échapper ! Zut !".PHP_EOL;
        }
    }

    public function habitat() {
        echo $this->espece . " vit dans la vase.".PHP_EOL;
    }
}

