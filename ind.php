<?php 
    $header = "Welcome Home l'shi Promo";
?>
<?php require 'portion/header.php' ?>

<!-- SECTION WELCOME FUTURISTE -->
<section class="relative flex flex-col items-center justify-center text-center py-24 overflow-hidden">
    <!-- Formes abstraites avec flou gaussien et animations -->
    <div class="absolute -top-32 -left-32 w-72 h-72 bg-gradient-to-r from-green-400 via-blue-500 to-purple-600 rounded-full blur-3xl opacity-40 animate-pulse"></div>
    <div class="absolute top-40 -right-40 w-96 h-96 bg-gradient-to-r from-purple-500 via-pink-500 to-yellow-400 rounded-full blur-3xl opacity-30 animate-spin-slow"></div>
    <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-[600px] h-[600px] bg-gradient-to-r from-blue-400 via-indigo-500 to-teal-400 rounded-full blur-[120px] opacity-25 animate-pulse"></div>

    <!-- Halo lumineux derrière le titre -->
    <div class="absolute inset-0 -z-10 bg-gradient-to-r from-green-400 via-blue-500 to-purple-600 opacity-20 blur-2xl animate-pulse"></div>

    <!-- Texte principal -->
    <h1 class="relative text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-300 via-blue-400 to-purple-500 drop-shadow-lg animate-fade-in-down tracking-wide">
        Welcome l’shi Promo
    </h1>
    <p class="relative mt-6 text-xl text-gray-200 max-w-2xl animate-fade-in-up">
        Bienvenue sur la page ✦ Découvrez des offres uniques et laissez-vous séduire par une expérience futuriste et émotionnelle.
    </p>
</section>

<!-- SECTION PROMOTIONS -->
<?php require 'models/promotions-data.php' ?>

<?php foreach($promotions as $magasin => $produits): ?>

<div class="mb-16 relative animate-fade-in-up">
    <!-- Titre magasin avec halo -->
    <div class="relative mb-6">
        <div class="absolute inset-0 -z-10 bg-gradient-to-r from-green-400 via-blue-500 to-purple-600 opacity-20 blur-xl animate-pulse"></div>
        <h1 class="text-2xl font-bold text-gray-100 border-b border-gray-700 pb-2 transition-all duration-500 hover:text-green-400 hover:tracking-wider relative">
            ✦ Magasin : <?php echo $magasin; ?>
        </h1>
    </div>
    
    <!-- Grille futuriste -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
        <?php foreach($produits as $produit => $details): ?>
            <div class="relative group rounded-xl overflow-hidden transform transition-all duration-700 hover:scale-105 hover:rotate-1">
                
                <!-- Halo lumineux derrière chaque carte -->
                <div class="absolute inset-0 -z-10 bg-gradient-to-r from-green-400 via-blue-500 to-purple-600 opacity-20 blur-2xl animate-pulse group-hover:opacity-40 transition duration-700"></div>
                
                <!-- Carte produit -->
                <?php require 'composants/offreCard.php'; ?>
            </div>
        <?php endforeach; ?>  
    </div>
</div>

<?php endforeach; ?>

<?php require 'portion/footer.php' ?>
