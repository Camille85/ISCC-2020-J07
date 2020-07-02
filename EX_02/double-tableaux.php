<html>
<?php
$panier = array(
    array('produit'=>'T-shirt rouge', 'prix'=>15.50, 'quantité' => 5),
    array('produit'=>'T-shirt vert', 'prix'=>15.50, 'quantité' => 6),
    array('produit'=>'T-shirt argent', 'prix'=>15.50, 'quantité' => 8),
    array('produit'=>'Short bleu', 'prix'=>16.50, 'quantité' => 5),
    array('produit'=>'Short vert', 'prix'=>19.99, 'quantité' => 5),
    array('produit'=>'Veste argent', 'prix'=>19.99, 'quantité' => 10),
    array('produit'=>'Veste argent', 'prix'=>35, 'quantité' => 3),
    );


 
foreach($panier as $ligne){
    echo "<ul>";
	foreach($ligne as $cle=>$valeur){
        echo "<li>";
        echo $valeur;
        echo "</li>";
    }
    echo "total :";
    echo $ligne["prix"] * $ligne["quantité"];
    echo "</ul>";
}
?>


</html>
