<?php 
class Panier{
    private $libelle_produit; 
    private $prix_produit; 
    private $qte_produit;
    private $descrip_produit; 
    public function __construct()
    {
        
    }
    public function creation_panier(){
        if(!isset($_SESSION['panier'])){
            $_SESSION['panier'] = []; 
            $_SESSION['panier']['libelle_produit'] = []; 
            $_SESSION['panier']['prix_produit'] = []; 
            $_SESSION['panier']['qte_produit'] = [];
            $_SESSION['panier']['description_produit'] = []; 
            $_SESSION['panier']['access'] = false; 
        }
        return true; 
    }
    public function ajouter_produit_panier($libelle_produit,$prix_produit,$qte_produit){
       if($this ->creation_panier() == true){
        array_push($_SESSION['panier']['libelle_produit'],$libelle_produit); 
        array_push($_SESSION['panier']['prix_produit'] , $prix_produit); 
        array_push($_SESSION['panier']['qte_produit'] , $qte_produit);
       }
    }
}



?>