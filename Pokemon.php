<?php

abstract class Pokemon {
    private string $espece;
    private int $humeur;

    public function __construct(string $espece, int $humeur) {
        $this->espece = $espece;
        $this->humeur = $humeur;
    }

    public function enerve() {
        $this->humeur = 1;
        if ($this->humeur < 10 || $this->humeur > 0) {
            $this->humeur -= 1;
        } else 
            $this->humeur += 0;
    }

    public function calme() {
        if ($this->humeur < 10 || $this->humeur > 0) {
            $this->humeur += 1;
        } else 
            $this->humeur += 0;
    }

    abstract public function attaque();
    abstract public function fuite();
    abstract public function habitat();
}