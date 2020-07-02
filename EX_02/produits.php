<?php
$produits = array( array("produit"=>"t-shirt rouge", "prix"=>15.50),
               array("produit"=>"t-shirt vert", "prix"=>15.50),
               array("produit"=>"t-shirt argent", "prix"=>16.50),
               array('produit' =>'short bleu','prix' => 19.99),
                array('produit' =>'short vert','prix' => 19.99),
                array('produit' =>'veste argent','prix' => 35),
             ); 
?>
<?php if (count($produits) > 0): ?>
<table>
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($produits))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($produits as $prod): array_map('htmlentities', $prod); ?>
    <tr>
      <td><?php echo implode('</td><td>', $prod); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>

