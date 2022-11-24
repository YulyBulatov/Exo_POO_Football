<?php

            Class Joueur{

                private string $_nom;
                private string $_prenom;
                private DateTime $_naissance;
                private string $_age;
                private Country $_pays;
                private array $_carriere;
                private  Equipe $_equipe;

                public function __construct(string $nom, string $prenom, string $naissance, Country $pays)
                {
                    $this->_nom = $nom;
                    $this->_prenom = $prenom;
                    $this->_naissance = new DateTime($naissance);
                    $now = new DateTime();
                    $age = $now->diff($this->_naissance)->format('%Y ans');
                    $this->_age = $age;
                    $this->_pays = $pays;
                    $pays->ajouterJoueur($this);
                    $this->_carriere = [];
                    $this->_equipe = new Equipe("Agent Libre", $sans_pays = new Country(""));
                    
                }

                public function getNom()
                {
                    return $this->_nom;
                }

                
                public function setNom($nom)
                {
                    $this->_nom = $nom;
                }

                
                public function getPrenom()
                {
                    return $this->_prenom;
                }

                
                public function setPrenom($prenom)
                {
                    $this->_prenom = $prenom;
                }

                
                public function getNaissance()
                {
                    return $this->_naissance;
                }

                
                public function setNaissance($naissance)
                {
                    $this->_naissance = $naissance;
                }

                
                public function getAge()
                {
                    return $this->_age;
                }

                
                public function setAge($age)
                {
                    $this->_age = $age;
                }

                
                public function getPays()
                {
                    return $this->_pays;
                }

                
                public function setPays($pays)
                {
                    $this->_pays = $pays;
                }

                
                public function getCarriere()
                {
                    return $this->_carriere;
                }

                
                public function setCarriere($carriere)
                {
                    $this->_carriere = $carriere;
                }

                
                public function getEquipe()
                {
                    return $this->_equipe;
                }

                
                public function setEquipe($equipe)
                {
                    $this->_equipe = $equipe;
                }


                public function ajouterCarriere($carriere){

                    $this->_carriere[] = $carriere;
                }

                public function afficherCarriere(){

                    echo "Le joueur $this a joué dans : <br> ";

                    foreach ($this->_carriere as $club){

                        echo "$club <br>";
                    }
                }

                public function __toString()
                {
                    return "$this->_prenom $this->_nom ($this->_age), $this->_pays, club actuel : $this->_equipe";
                }
            }