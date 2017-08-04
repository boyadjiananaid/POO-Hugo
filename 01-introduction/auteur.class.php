//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
<?php
class Auteur {

    //--Déclaration des propritétés de notre Class"Article" une variable privée est accessible qu'à l'intèrieur de la class
    private $Nom,
    $Prenom,
    $Email;
 


 //--Fonction accessible en dehors de la class
    /*Afin de pouvoir attribuer une valeur à mes différentes variables,
    *Je vais mettre en place un constructeur
*/
    public function __construct(
        $Nom,
        $Prenom,
        $Email){
        
        
        //--Ici, nous allons attribuer à chaque propriétés de notre classe,
        //-La valeur qui a été passée au constructeur.
        
        $this->Nom     =$Nom;
        $this->Prenom  =$Prenom;
        $this->Email   =$Email;
       
        
    }//fin de mon constructeur
    
  
    
    /*
    *Getters : Fonctions qui vont avoir la charge de nous renvoyer nos informations.;
    ** Nous aurons une fonction par propriété de notre classe.
    */
    
    
    public function getNom(){
        return 'Mon Nom est : '.$this->Nom;
    }
    
    public function getPrenom (){
        return 'Mon Prenom est : '.$this->Prenom;
    }
    public function getEmail(){
        return 'Mon Email est : '.$this->Email;
    }
   
      public function getNomComplet(){
        return $this->Prenom." ".$this->Nom;
        
    }
    
    /**
    *Setters : Fonctions qui vont avoir la charge de modifier les propriétés de notre 
    *Class.
    */
    
    public function setPrenom($MonNouveauPrenom){
        $this->Prenom =$MonNouveauPrenom;
    }
  
     
    public function setNom($MonNouveauPrenom){
        $this->Nom =$MonNouveauPrenom;
    }
    
     
    public function setEmail($MonNouveauPrenom){
        $this->Email =$MonNouveauPrenom;
    }
    
}//fin de la class Auteur

?>