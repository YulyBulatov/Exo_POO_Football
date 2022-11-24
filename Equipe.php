<?php

            Class Equipe{

                private string $_nom;
                private Country $_pays;
                private array $_joueurs;
                private array $_anciens_joueurs;

                public function __construct(string $nom, Country $pays)
                {
                    $this->_nom = $nom;
                    $this->_pays = $pays;
                    $pays->ajouterEquipe($this);
                    $this->_joueurs = [];
                    $this->anciens_joueurs = [];
                }

                public function getNom(){

                    return $this->_nom;
                }

                public function getPays(){

                    return $this->_pays;
                }

                public function getJoueurs(){

                    return $this->_joueurs;
                }

                public function getAnciensJoueurs(){

                    return $this->_anciens_joueurs;
                }

                public function setNom($nom){

                    $this->_nom = $nom;
                }

                public function setPays($pays){

                    $this->_pays = $pays;
                }

                public function setJoueurs($joueurs){

                    $this->_joueurs = $joueurs;
                }

                public function setAnciensJoueurs($anciens_joueurs){

                    $this->_anciens_joueurs = $anciens_joueurs;
                }

                public function ajouterJoueur($joueur){

                    $this->_joueurs[] = $joueur;
                }
                
                public function ajouterAncienJoueur($ancien_joueur){

                    $this->_anciens_joueurs[] = $ancien_joueur;
                }

                public function afficherJoueurs(){

                    echo "Les joueurs actuels d'equipe $this sont : <br>";

                    foreach ($this->_joueurs as $joueur){

                        echo "$joueur <br>";
                    }
                }

                public function afficherAnciensJoueurs(){

                    echo "Les joueurs, qui ont joué dans l'equipe $this sont : <br>";

                    foreach ($this->_anciens_joueurs as $joueur){

                        echo "$joueur <br>";
                    }
                }

                public function __toString()
                {
                    return "$this->_nom, $this->_pays";
                }
            }