<?php 
 $historique_commandes = array('5.49', '9.99', '5.49', '15.99', '25');

    function afficher_commandes ($h){   
        echo count ($h);
        foreach($h as $historique_commande){
            echo "Une commande de ";
            echo $historique_commande;
            echo " euros a été reçus. ". "<br/>";
        }
        echo "Le total des commandes est de ";
            echo array_sum ($h);
            echo " euros.";
    }
    
?>

<?php
afficher_commandes($historique_commandes);
?>