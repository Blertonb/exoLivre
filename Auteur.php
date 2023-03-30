<?php

Class Auteur{
    private string $_nom;
    private string $_prenom;
    private array $_livre;

    public function __construct($nom,$prenom){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_livre =[];

    }

    public function getNom(){
        return $this->_nom;
       }
    
       public function getPrenom(){
        return $this->_prenom;
       }
    
       public function getLivre(){
        return $this->_livre;
       }
    
       public function setNom($_nom){
        $this->_nom;
       }
    
       public function setPrenom($_prenom){
        $this->_prenom;
       }
    
       public function setLivre($_livre){
        $this->_livre;
       }
    
       public function __toString(){
        return "{$this -> _nom} {$this-> _prenom} ";
        

        
    }
    
    public function ajouterLivre($livre){
        $this-> _livre[]=$livre;

    }
    public function affficherBibliographie(){
        echo "".$this->_nom .$this->_prenom; 
        foreach ($this->_livre as $livre){
            echo $livre;
            }
    }
   

}


?>
