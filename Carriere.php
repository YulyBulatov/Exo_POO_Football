<?php


            Class Carriere{

                private Joueur $_joueur;
                private Equipe $_equipe;
                private int $_annee;
                private string $_dansleclub;

                public function __construct(Joueur $joueur, Equipe $equipe, int $annee, string $dansleclub)
                {
                    $this->_joueur = $joueur;
                    $joueur->ajouterCarriere($this);
                    $this->_equipe = $equipe;
                    $this->_annee = $annee;
                    $this->_dansleclub = $dansleclub;


                    if ($dansleclub == true){

                        $equipe->ajouterJoueur($joueur);
                        $joueur->setEquipe($equipe);
                    }
                    else{
                        
                        $equipe->ajouterAncienJoueur($joueur);
                    }

                    // Pour dire, que le joueur n'est plus dans cette equipe, il suffit de laisser un string vide ""//
                    
                }

                public function getJoueur()
                {
                    return $this->_joueur;
                }

                 
                public function setJoueur($joueur)
                {
                    $this->_joueur = $joueur;
                }

              
                public function getEquipe()
                {
                    return $this->_equipe;
                }

         
                public function setEquipe($equipe)
                {
                    $this->_equipe = $equipe;
                }

                
                public function getAnnee()
                {
                    return $this->_annee;
                }

                public function setAnnee($annee)
                {
                    $this->_annee = $annee;
                }

               
                public function getDansleclub()
                {
                    return $this->_dansleclub;
                }

              
                public function setDansleclub($dansleclub)
                {
                    $this->_dansleclub = $dansleclub;
                }

                public function __toString()
                {
                    return "$this->_equipe en $this->_annee";
                }
            }