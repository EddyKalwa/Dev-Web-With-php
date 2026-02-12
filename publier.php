<?php
session_start();
$header = 'Publier une offre';
?>
<?php require 'portion/header.php'; ?>

<!-- SECTION FORM FUTURISTE -->
<section class="relative flex flex-col items-center justify-center text-center py-20 overflow-hidden">
    <!-- Arrière-plan lumineux -->
    <div class="absolute -top-40 -left-40 w-96 h-96 bg-gradient-to-r from-green-400 via-blue-500 to-purple-600 rounded-full blur-3xl opacity-30 animate-pulse"></div>
    <div class="absolute top-20 -right-40 w-72 h-72 bg-gradient-to-r from-purple-500 via-pink-500 to-yellow-400 rounded-full blur-3xl opacity-25 animate-spin-slow"></div>
    <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-[500px] h-[500px] bg-gradient-to-r from-blue-400 via-indigo-500 to-teal-400 rounded-full blur-[120px] opacity-20 animate-pulse"></div>

    <!-- Titre -->
    <h1 class="relative text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-300 via-blue-400 to-purple-500 drop-shadow-lg animate-fade-in-down tracking-wide">
        Publier une nouvelle offre ✦
    </h1>
    <p class="relative mt-4 text-lg text-gray-300 max-w-xl animate-fade-in-up">
        Ajoutez vos promotions avec style et simplicité.
    </p>
</section>

<!-- FORMULAIRE PREMIUM -->
<div class="relative max-w-lg mx-auto bg-gray-900/70 backdrop-blur-xl rounded-2xl shadow-xl p-8 animate-fade-in-up">
    <?php if(isset($_SESSION['success'])) : ?>
        <p class="mb-4 text-green-400 font-semibold"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></p>
    <?php endif; ?>

    <?php if(isset($_SESSION['error'])) : ?>
        <p class="mb-4 text-red-400 font-semibold"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
    <?php endif; ?>

    <form method="POST" action="controllers/creer_offre.php" enctype="multipart/form-data" class="space-y-6">
        <!-- Image -->
        <div>
            <label for="image" class="block text-sm font-medium text-gray-200">Image du produit</label>
            <input type="file" id="image" name="image" 
                class="mt-2 w-full text-sm text-gray-300 bg-gray-800 border border-gray-700 rounded-lg focus:ring-green-400 focus:border-green-400 p-2.5" required />
        </div>

        <!-- Nom produit -->
        <div>
            <label for="nom_produit" class="block text-sm font-medium text-gray-200">Nom du produit</label>
            <input type="text" id="nom_produit" name="nom_produit" 
                class="mt-2 w-full text-sm text-gray-300 bg-gray-800 border border-gray-700 rounded-lg focus:ring-green-400 focus:border-green-400 p-2.5" required />
        </div>

        <!-- Prix initial -->
        <div>
            <label for="prix_initial" class="block text-sm font-medium text-gray-200">Prix initial</label>
            <input type="number" id="prix_initial" name="prix_initial" 
                class="mt-2 w-full text-sm text-gray-300 bg-gray-800 border border-gray-700 rounded-lg focus:ring-green-400 focus:border-green-400 p-2.5" required />
        </div>

        <!-- Prix promo -->
        <div>
            <label for="prix_promo" class="block text-sm font-medium text-gray-200">Prix promotionnel</label>
            <input type="number" id="prix_promo" name="prix_promo" 
                class="mt-2 w-full text-sm text-gray-300 bg-gray-800 border border-gray-700 rounded-lg focus:ring-green-400 focus:border-green-400 p-2.5" required />
        </div>

        <!-- Devise -->
        <div>
            <label for="devise" class="block text-sm font-medium text-gray-200">Devise</label>
            <select id="devise" name="devise" 
                class="mt-2 w-full text-sm text-gray-300 bg-gray-800 border border-gray-700 rounded-lg focus:ring-green-400 focus:border-green-400 p-2.5">
                <option>FC</option>
                <option>$</option>
            </select>
        </div>

        <!-- Magasin -->
        <div>
            <label for="magasin" class="block text-sm font-medium text-gray-200">Magasin</label>
            <select id="magasin" name="magasin" 
                class="mt-2 w-full text-sm text-gray-300 bg-gray-800 border border-gray-700 rounded-lg focus:ring-green-400 focus:border-green-400 p-2.5">
                <option>Top Market</option>
                <option>Kin marche</option>
                <option>Jambo</option>
                <option>Rocheio</option>
            </select>
        </div>

        <!-- Bouton -->
        <button type="submit" 
            class="w-full py-3 px-5 text-white font-semibold rounded-lg bg-gradient-to-r from-green-400 via-blue-500 to-purple-600 hover:opacity-90 transition duration-500 shadow-lg">
            ✦ Publier l’offre
        </button>
    </form>
</div>

<?php require 'portion/footer.php'; ?>
