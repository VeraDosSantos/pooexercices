<?php

class Employe
{
    private string $nom;
    private string $poste;
    private float $salaire;

    public function __construct(string $nom, string $poste, float $salaire)
    {
        $this->nom = $nom;
        $this->poste = $poste;
        $this->salaire = $salaire;
    }

    public function __toString()
    {
        return "Le nom de l'employe est $this->nom, au poste de $this->poste pour un salaire de $this->salaire €!";
    }

    public function __clone()
    {
        $this->salaire *= 1.1;
        // $this->salaire = $this->salaire * 1.1;
    }
}

$employe1 = new Employe("Abdelkarim", "Développeur", 1000);
$employe2 = clone $employe1;

echo "<pre>";
var_dump($employe2);
echo "</pre>";
