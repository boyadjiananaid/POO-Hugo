
<meta charset="UTF-8">

<link rel="stylesheet" href="style.css">
<h1 style="text-align:center">Orientation Objet</h1>

<?php
include 'article.class.php';
include 'auteur.class.php';
include 'categorie.class.php';


/**
*Création d'une instance de la Class "Article"
*Notre varible $UnArticle est un objet de la Classe Article
*En ce sens elle a accès à l'ensemble des propritétés et fonctions qui la composent
*/

$UnArticle = new Article("Laformation WF3", "Une Formation Certifiante en 3 mois!","Rejoignez-nous et vous verrez bien","wf3.jpg","04/08/2017");


//--afficher l'Objet Article
echo'<pre>';
print_r($UnArticle);
echo'</pre>';

$DeuxArticle = new Article("La Martinique", "Une île pour les vacances!","Venez nombweu pouw prendre le Ti-Punch...","ti-punch.jpg","04/08/2017");
//--afficher l'Objet Article
echo'<pre>';
print_r($DeuxArticle);
echo'</pre>';


$TroisArticle = new Article("Article sur l'été", "Vive la chaleur","Venez nombreux pour transpirer","hot.jpg","04/08/2017");
//--afficher l'Objet Article
echo'<pre>';
print_r($TroisArticle);
echo'</pre>';

$QuatreArticle = new Article("Article sur l'hiver", "Vive le froid","Venez nombreux pour geler","cold.jpg","04/08/2017");
//--afficher l'Objet Article
echo'<pre>';
print_r($QuatreArticle);
echo'</pre>';

//-- Je veux afficher le titre de mon Premier Article 
//echo $UnArticle->Titre;   
# :Cannot access private property Article::$Titre 



echo $UnArticle->getTitre().'<br>';
echo $UnArticle->getAccroche().'<br>'; 
echo $UnArticle->getDescription().'<br>'; 
echo $UnArticle->getFeaturedImage().'<br>'; 
echo $UnArticle->getDateCreationArticle().'<br>';

echo '<br>';

echo $DeuxArticle->getTitre().'<br>';
echo $DeuxArticle->getAccroche().'<br>'; 
echo $DeuxArticle->getDescription().'<br>'; 
echo $DeuxArticle->getFeaturedImage().'<br>'; 
echo $DeuxArticle->getDateCreationArticle().'<br>';

echo '<br>';

echo $TroisArticle->getTitre().'<br>';
echo $TroisArticle->getAccroche().'<br>'; 
echo $TroisArticle->getDescription().'<br>'; 
echo $TroisArticle->getFeaturedImage().'<br>'; 
echo $TroisArticle->getDateCreationArticle().'<br>';

echo '<br>';

echo $QuatreArticle->getTitre().'<br>';
echo $QuatreArticle->getAccroche().'<br>'; 
echo $QuatreArticle->getDescription().'<br>'; 
echo $QuatreArticle->getFeaturedImage().'<br>'; 
echo $QuatreArticle->getDateCreationArticle().'<br>';




$UnArticle->setTitre("Voici mon nouveau titre avec Set").'<br>';
echo $UnArticle->getTitre();

echo'<pre>';
print_r($UnArticle);
echo'</pre>';

$DeuxArticle->setTitre("Il fait beau").'<br>';
echo $DeuxArticle->getTitre();

echo'<pre>';
print_r($DeuxArticle);
echo'</pre>';




echo'<hr>';


////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////

$Auteur = new Auteur("Boyadjian", "Anaïd","annaid@hotmail.fr");
$UnArticle->setAuteur($Auteur);


echo'<pre>';
print_r($UnArticle);
echo'</pre>';


$DeuxArticle->setAuteur($Auteur);


echo'<pre>';
print_r($DeuxArticle);
echo'</pre>';

//--afficher l'Objet Article
echo'<pre>';
print_r($Auteur);
echo'</pre>';

$DeuxAuteur = new Auteur("Nouveau nom", "Nouveau Prenom","an@test.fr");
//--afficher l'Objet Article
echo'<pre>';
print_r($DeuxAuteur);
echo'</pre>';

echo $Auteur->getNom().'<br>';
echo $Auteur->getPrenom().'<br>'; 
echo $Auteur->getEmail().'<br>'; 

echo '<br>';

echo $DeuxAuteur->getNom().'<br>';
echo $DeuxAuteur->getPrenom().'<br>'; 
echo $DeuxAuteur->getEmail().'<br>'; 


echo '<br>';

$Auteur->setPrenom("Nouveau Prenom : Azad").'<br>';
echo $Auteur->getPrenom();

echo'<pre>';
print_r($Auteur);
echo'</pre>';

echo'<hr>';
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////

$Categorie = new Categorie("Histoire");
//--afficher l'Objet Article
echo'<pre>';
print_r($Categorie);
echo'</pre>';

$DeuxCategorie = new Categorie("Amour");
//--afficher l'Objet Article
echo'<pre>';
print_r($DeuxCategorie);
echo'</pre>';

echo $Categorie->getLibelle().'<br>';


echo '<br>';

echo $DeuxCategorie->getLibelle().'<br>';



echo '<br>';

$Categorie->setLibelle("Nouveau libelle : Fiction").'<br>';
echo $Categorie->getLibelle();

echo'<pre>';
print_r($Categorie);
echo'</pre>';


$UneCategorie = new Categorie('Formation Info');
$UneCategorie->AjouterUnArticle($UnArticle);
$UneCategorie->AjouterUnArticle($DeuxArticle);
$DeuxCategorie->AjouterUnArticle($TroisArticle);
$DeuxCategorie->AjouterUnArticle($QuatreArticle);
/*$UneCategorie->AjouterUnArticle("titre de mon article");*/


echo'<pre>';
print_r($UneCategorie);
print_r($DeuxCategorie);
echo'</pre>';



echo'<hr>';


echo'<ol>';
echo'<li>';
echo $UneCategorie->getLibelle();
echo'</li>';

echo'<ul>';
$articles = $UneCategorie->getCollectionArticles();
foreach($articles as $article):
echo "<li>". $article->getTitre()." - ".
    $article->getAuteur()->getNomComplet() ."</li>";
endforeach;
echo'</ul>';

echo'</ol>';


echo'<hr>';





















?>