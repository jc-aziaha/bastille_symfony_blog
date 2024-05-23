<?php


    class Vehicule
    {
        private ?string $marque = null;

        public function getMarque(): ?string
        {
            return $this->marque;
        }

        // public function setMarque(?string $marque): void
        // {
        //     $this->marque = $marque;
        // }

        // public function setMarque(?string $marque): self
        // {
        //     $this->marque = $marque;
        //     return $this;
        // }

        public function setMarque(?string $marque): static
        {
            $this->marque = $marque;
            return $this;
        }
    }

    $v0 = new Vehicule();

    // $v0->setMarque("Tesla");
    // echo $v0->getMarque();

    echo $v0->setMarque("Tesla")
            ->getMarque();


    // interface Actions
    // {
    //     public function crier(): string;
    // }

    // abstract class Animal implements Actions
    // {
    //     public ?string $name = null;
    // }


    // class Chien extends Animal
    // {
    //     public function crier(): string
    //     {
    //         return "Waouf Waouf!";
    //     }
    // }

    // class Chat extends Animal
    // {
    //     public function crier(): string
    //     {
    //         return "Miaou Miaou!";
    //     }
    // }

    // $chien = new Chien();
    // $chat = new Chat();

    // echo $chien->crier();
    // echo "\n";
    // echo $chat->crier();






    // interface Actions
    // {
    //     public function rouler(): string;
        
    //     public function freiner(): string;
    // }

    // abstract class Vehicule implements Actions 
    // {
    //     public string $marque;
    // }

    // class Voiture extends Vehicule
    // {
    //     public function rouler(): string
    //     {
    //         return "Vroum! La voiture roule";
    //     }
        
    //     public function freiner(): string
    //     {
    //         return "thrrrrr! La voiture freine";
    //     }

    //     public function voler(): string
    //     {
    //         return "Vouuuuuuuuuuuu! La voiture vole";
    //     }
    // }

    // class Moto extends Vehicule
    // {
    //     public function rouler(): string
    //     {
    //         return "Vroum! La voiture roule";
    //     }
        
    //     public function freiner(): string
    //     {
    //         return "thrrrrr! La voiture freine";
    //     }

    //     public function mettreNitro(): string
    //     {
    //         return "Piuuuuuuuuuuu, ça va vite";
    //     }
    // }

















    // class Voiture 
    // {
    //     private ?string $marque = null;
    //     private ?string $couleur = null;
    //     private static int $nbreInstances = 0;

    //     public function __construct(string $marque, string $couleur)
    //     {
    //         $this->marque  = $marque;
    //         $this->couleur = $couleur;
    //         self::$nbreInstances++;
    //     }

    //     public function getMarque(): ?string
    //     {
    //         return $this->marque;
    //     }

    //     public function setMarque(?string $marque): static
    //     {
    //         $this->marque = $marque;
    //         return $this;
    //     }

    //     public function getCouleur(): ?string
    //     {
    //         return $this->couleur;
    //     }

    //     public function setCouleur(?string $couleur): static
    //     {
    //         $this->couleur = $couleur;
    //         return $this;
    //     }

    //     public static function getNbreInstances(): ?string
    //     {
    //         return self::$nbreInstances;
    //     }

    //     // public function setCouleur(?string $couleur): static
    //     // {
    //     //     $this->couleur = $couleur;
    //     //     return $this;
    //     // }
    // }

    // $voiture0 = new Voiture("Alpha Roméo", "noire");
    // $voiture1 = new Voiture("Mazzeratti", "rouge");

    // $voiture0->setMarque("Tesla");
    // $voiture0->setCouleur("rouge");

    // $voiture1->setMarque("Tesla");
    // $voiture1->setCouleur("blanche");
    
    // $voiture1->setCouleur("bleue");


    // echo $voiture0->getCouleur();
    // echo "\n";
    // echo $voiture1->getCouleur();

    // echo Voiture::getNbreInstances();
?>

