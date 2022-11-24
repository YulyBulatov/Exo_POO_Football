<?php

            Class Country{
                
                private string $_nom;
                private array $_equipes;
                private array $_joueurs;

                public function __construct(string $nom)
                {
                    $this->_nom = $nom;
                    $this->_equipes = [];
                    $this->_joueurs = [];
                    
                }

                public function getNom(){

                    return $this->_nom;
                }

                public function getEquipes(){

                    return $this->_equipes;
                }

                public function getJoueurs(){

                    return $this->_joueurs;
                }

                public function setNom($nom){

                    $this->_nom = $nom;
                }

                public function setEquipes($equipes){

                    $this->_equipes = $equipes;
                }

                public function setJoueurs($joueurs){

                    $this->_joueurs = $joueurs;
                }

                public function ajouterEquipe($equipe){

                    $this->_equipes[] = $equipe;
                }

                public function ajouterJoueur($joueur){

                    $this->_joueurs[] = $joueur;
                }

                public function afficherEquipes(){

                    echo "Equipes de $this : <br> ";

                    foreach ($this->_equipes as $equipe){

                        echo "$equipe <br>";

                    }
                }

                public function afficherJoueurs(){

                    echo "Joueurs de $this : <br> ";

                    foreach ($this->_joueurs as $joueur){

                        echo "$joueur <br>";

                    }
                }

                public function __toString()
                {
                    return $this->_nom;
                }
            }