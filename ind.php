<?php 
    $header = "Welcome Home l'shi Promo";
?>
<?php require 'portion/header.php' ?>

<h1 class="text-2xl font-bold text-white">Profiter de  nos meilleures offres</h1>

<?php require 'models/promotions-data.php' ?>

<?php foreach($promotions as $magasin => $produits): ?>

<div >
    <h1 class='text-white'>Magasin : <?php echo $magasin; ?></h1>
    <div class= "grid grid-cols-3 gap-3">
    <?php foreach($produits as $produit => $details): ?>
    
    <?php require 'composants/offreCard.php'; ?>
    <?php endforeach; ?>  
    </div>
    
</div>

<?php endforeach; ?>

<?php require 'portion/footer.php' ?>