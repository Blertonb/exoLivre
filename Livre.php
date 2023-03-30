<?php

Class Livre{
    private string $_titre;
    private int $_nbPages;
    private int $_anneeParution;
    private float $_prix;
    private Auteur $_auteur;


    public function __construct($titre, $nbPages, $anneeParution,$prix,$auteur){
        $this->_titre = $titre;
        $this->_nbPages = $nbPages;
        $this->_anneeParution = $anneeParution;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        // ici on fait appelle à la fonction ajouterlivre de la class auteur 
        $auteur->ajouterLivre($this);
    }

    public function getTitre(){
        return $this->_titre;
       }
    
       public function getnbPages(){
        return $this->_nbPages;
       }
    
       public function getanneeParution(){
        return $this->_anneeParution;
       }
    
       public function getPrix(){
        return $this->_prix;
       }

       public function getAuteur(){
        return $this->_auteur;
       }

       public function setTitre($_titre){
        $this->_titre;
       }
    
       public function setnbPages($_nbPages){
        $this->_nbPages;
       }
    
       public function setanneeParution($_anneeParution){
        $this->_anneeParution;
       }
    
       public function setPrix($_prix){
        $this->_prix;
       }
    
       public function setAuteur($_auteur){
         $this->_auteur;
       }
    

       public function __toString(){
        return $this -> _titre." "
        .$this-> _nbPages." : "
        .$this -> _anneeParution." pages / "
        .$this -> _prix ." € <br>";
        
        
       }

       
}