<?php

    // On crée une classe (en rapport avec le diagramme de classe)
    class Animal {

        //attributs
        private ?string $nom;
        private ?string $couleur;
        private ?float $taille;
        private ?int $age;
        private ?Abris $abris;

        //constructor
        public function __construct(?string $nom, ?string $couleur, ?float $taille, ?int $age) {
            // "this" peut être expliqué comme l'objet que l'on va montrer du doigt 
            $this->nom = $nom;
            $this->couleur = $couleur;
            $this->taille = $taille;
            $this->age = $age;
        }

        //getter et setter
        public function getNom(): ?string {
            return $this->nom;
        }

        public function setNom(?string $newNom): Animal {
            $this->nom = $newNom;
            return $this;
        }

        public function getCouleur(): ?string {
            return $this->couleur;
        }

        public function setCouleur(?string $newCouleur): Animal {
            $this->couleur = $newCouleur;
            return $this;
        }

        public function getTaille(): ?float {
            return $this->taille;
        }

        public function setTaille(?float $newTaille): Animal {
            $this->taille = $newTaille;
            return $this;
        }

        public function getAge(): ?int {
            return $this->age;
        }

        public function setAge(?int $newAge): Animal {
            $this->age = $newAge;
            return $this;
        }

        public function getAbris(): ?Abris {
            return $this->abris;
        }

        public function setAbris(?Abris $newAbris): Animal {
            $this->abris = $newAbris;
            return $this;
        }
        

        //Method
        public function seNourrir(?string $aliment): string | array {
            if($aliment == "crottes de chat") {
                return "Mange pas ça, c'est dégueu !!!";
            }else {
                return [$aliment, "Elle a bon goût,", $this->nom. " a aimé son repas ! "]; //trois cases dans ce tableau (pas de point avant this contrairement dans echo)
            }
        }

        public function seMultiplier(Animal $partenaire) : void {
            echo "Je me multiplie grâce à {$partenaire->getNom()}.";
        }

    }







    //test
    $chien = new Animal("Keira","noire", 1.10, 11);

    //si la couleur est en private par exemple, je ne verrai pas cette phrase qui est en dehors de la classe. Cf la fonction getCouleur plus haut pour permettre de l'afficher malgré tout :
    //echo "Mon chien ".$chien->nom." est de couleur ".$chien->couleur." et elle a ".$chien->age. " ans.";

    //appeler la méthode
    $reponse = $chien->seNourrir("viande");

    //test méthode
    if(getType($reponse) == "string") {
        echo "<p>$reponse</p>";
    } else {
        echo "<p>{$reponse[2]}</p>";
    }

    // echo "<p>".$chien->nom()."</p>";
    // echo "<p>".$chien->getCouleur()."</p>";

    

?>