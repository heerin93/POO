<?php

class Abris {
    private ?string $nom;

    //CONSTRUCTEUR
    public function __construct(?string $nom) {
        $this->nom = $nom;
    }

    //GETTER SETTER
    public function getNom(): ?string {
        return $this->nom;
    }

    public function setNom(?string $nom): Abris {
        $this->nom = $nom;
        return $this;
    }

    //METHODE

    /**
     * abriter() : afficher une string (=phrase)
     * @param : void (ne prend rien en paramètre)
     * @return : void (ne returne rien)
     */
    public function abriter() : void {
        echo "Je m'abrite dans ".$this->getNom().".";
    }
}


?>