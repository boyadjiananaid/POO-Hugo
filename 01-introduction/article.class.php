<?php
/*création d'un Class Article
*Une classe est une entité regroupant des variables/propriétés
*et des fonctions
*/


class Article {

    //--Déclaration des propritétés de notre Class"Article" une variable privée est accessible qu'à l'intèrieur de la class
    private $Titre,
    $Accroche,
    $Description,
    $FeaturedImage,
    $DateCreationArticle,
    $Auteur;


 //--Fonction accessible en dehors de la class
    /*Afin de pouvoir attribuer une valeur à mes différentes variables,
    *Je vais mettre en place un constructeur
*/
    public function __construct(
        $Titre,
        $Accroche,
        $Description,
        $FeaturedImage,
        $DateCreationArticle){
        
        
        //--Ici, nous allons attribuer à chaque propriétés de notre classe,
        //-La valeur qui a été passée au constructeur.
        
        $this->Titre              =$Titre;
        $this->Accroche           =$Accroche;
        $this->Description        =$Description;
        $this->FeaturedImage      =$FeaturedImage;
        $this->DateCreationArticle=$DateCreationArticle;
        
    }//fin de mon constructeur
    
    
    /*
    *Getters : Fonctions qui vont avoir la charge de nous renvoyer nos informations.;
    ** Nous aurons une fonction par propriété de notre classe.
    */
    
    
    public function getTitre(){
        return 'Mon Titre est : '.$this->Titre;
    }
    
    public function getAccroche (){
        return 'Mon Accroche est : '.$this->Accroche;
    }
    public function getDescription(){
        return 'Ma Description est : '.$this->Description;
    }
    public function getFeaturedImage(){
        return 'Mon FeaturedImage est : '.$this->FeaturedImage;
    }
    public function getDateCreationArticle(){
        return 'Ma DateCreationArticle est : '.$this->DateCreationArticle;
    }
    
    
    
    /**
    *Setters : Fonctions qui vont avoir la charge de modifier les propriétés de notre 
    *Class.
    */
    
    public function setTitre($MonNouveauTitre){
        $this->Titre =$MonNouveauTitre;
    }
    
    
    public function setAuteur(Auteur $Auteur){
        $this->Auteur=$Auteur;
    }
    
     public function getAuteur(){
       return $this->Auteur;
    }
    
    
  
}//fin de la class Article














?>
