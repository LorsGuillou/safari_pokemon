<?php

class Safari {
    public array $pokemons = [];

    public function introduire(Pokemon $newPkmn) {
        array_push($this->pokemons, $newPkmn);
    }

    public function boue() {
        foreach($this->pokemons as $pokemon) {
            echo $pokemon->espece . " s'énerve en reçevant de la boue à la figure !".PHP_EOL;
            $pokemon->attaque();
        }
    }

    public function nourrir() {
        foreach($this->pokemons as $pokemon) {
            echo $pokemon->espece . " se calme en reçevant de la nourriture !".PHP_EOL;
            $pokemon->fuite();
        }
    }

    public function compter() {
        $compte = count($this->pokemons);
        echo "Il y a " . $compte . " Pokémon(s) dans le parc.";
    }

    public function pister() {
        foreach($this->pokemons as $pokemon) {
            $pokemon->habitat().PHP_EOL;
        }
    }
}    