<?php

//Creation du modele personnage

class Personnage{
    private string $nom;
    private int $pv;
    private string $genre;

    public function __construct(string $nom, int $pv, string $genre){
        $this->nom = $nom;
        $this->pv = $pv;
        $this->genre = $genre;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    public function getPv(): int {
        return $this->pv;
    }

    public function setPv(int $pv): void {
        $this->pv = $pv;
    }

    public function getGenre(): string {
        return $this->genre;
    }

    public function setGenre(string $genre): void {
        $this->genre = $genre;
    }


    public function update(string $nom, int $pv, string $genre):void{
        $this->nom = $nom;
        $this->pv = $pv;
        $this->genre = $genre;
    }

}

?>