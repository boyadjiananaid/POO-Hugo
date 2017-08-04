<?php



class Categorie {

    //--Déclaration des propritétés de notre Class"Article" une variable privée est accessible qu'à l'intèrieur de la class
    private $Libelle;
    private $CollectionArticles = [];
   


 //--Fonction accessible en dehors de la class
    /*Afin de pouvoir attribuer une valeur à mes différentes variables,
    *Je vais mettre en place un constructeur
*/
    public function __construct(
        $Libelle){
        
        
        //--Ici, nous allons attribuer à chaque propriétés de notre classe,
        //-La valeur qui a été passée au constructeur.
        
        $this->Libelle     =$Libelle;
      
       
        
    }//fin de mon constructeur
    
    
    /*
    *Getters : Fonctions qui vont avoir la charge de nous renvoyer nos informations.;
    ** Nous aurons une fonction par propriété de notre classe.
    */
    
    
    public function getLibelle(){
        return 'Mon Libelle est : '.$this->Libelle;
    }
    
   
     public function getCollectionArticles(){
        return $this->CollectionArticles;
    }
    
    
    /**
    *Setters : Fonctions qui vont avoir la charge de modifier les propriétés de notre 
    *Class.
    */
    
    public function setLibelle($MonNouveauLibelle){
        $this->Libelle =$MonNouveauLibelle;
    }
  
     /**
    *Permet d'ajouter un Objet Article à notre tableau (Collection) d'Articles
    *
    */
    
    public function AjouterUnArticle(Article $Article){
        $this->CollectionArticles []=$Article;
    }
    
    
}//fin de la class Catégorie






?>