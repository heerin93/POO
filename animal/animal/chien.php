<?php

class Chien extends Animal {

    //ATTRIBUTS
    private ?string $poils;
    private ?int $nbrDePatte;

    //CONSTRUCTEUR
    //contructeur d'un enfant qui hérite d'attribut en private. Il faut mettre les attributs avec set car les setter sont en publique
    public function __construct(?string $nom, ?string $couleur, ?float $taille, ?int $age, ?string $poils, ?int $nbrDePatte) {
        $this->setNom($nom);
        $this->setCouleur($couleur);
        $this->setTaille($taille);
        $this->setAge($age);
        $this->poils = $poils;
        $this->nbrDePatte = $nbrDePatte;
    }

    //GETTER et SETTER
    public function getPoils(): ?string {
        return $this->poils;
    }

    public function setPoils(?string $poils): Chien {
        $this->poils = $poils;
        return $this;
    }

    public function getnbrDePatte(): ?int {
        return $this->nbrDePatte;
    }

    public function setnbrDePatte(?int $nbrDePatte): Chien {
        $this->nbrDePatte = $nbrDePatte;
        return $this;
    }

    //METHOD
    public function accoucher() : void {
        echo "<p> Je met bas.</p>";
    }

    /**
     * seMultiplier() : appel la méthode accoucher() redéfinie dans la classe Chien
     * @param $partenaire de type animal (prend en paramètre un partenaire de type animal)
     * @return void (ne retourne rien)
     */
    public function seMultiplier(Animal $partenaire) : void {
        $this->accoucher();
    }

    public function mettreAuMonde() : void {
        //opérateur de résolution de portée (on force la fonction)
        parent::seMultiplier($this);
    }

} 