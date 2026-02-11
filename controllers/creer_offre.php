<?php 
echo '<pre>';
print_r($_POST);
print_r($_FILES);
echo '</pre>';

$dossier_database= __DIR__.'/../database/';

if(!is_dir($dossier_database)){
    mkdir($dossier_database, 0755, true);
}

$pdo = new PDO('sqlite:'.$dossier_database.'lshipromo.sqlite');

$pdo->exec("CREATE TABLE IF NOT EXISTS promotions (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nom_produit TEXT NOT NULL,
    prix_initial INTEGER NOT NULL,
    prix_promo INTEGER NOT NULL,
    devise TEXT NOT NULL,
    magasin TEXT NOT NULL,
    chemin_image TEXT NOT NULL
)");

$nom_produit = $_POST['nom_produit'];
$prix_initial = $_POST['prix_initial'];
$prix_promo = $_POST['prix_promo'];
$devise = $_POST['devise'];
$magasin = $_POST['magasin'];

$dossier_uploads = __DIR__.'/../uploads/' .$magasin.'/';
if(!is_dir($dossier_uploads)){
    mkdir($dossier_uploads, 0755, true);
}

$extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
$nom_fichier = uniqid() . '.' . $extension;
$chemin_complet = $dossier_uploads . $nom_fichier;

if(move_uploaded_file($_FILES['image']['tmp_name'], $chemin_complet)){
    $stmt = $pdo->prepare("INSERT INTO promotions (nom_produit, prix_initial, prix_promo, devise, magasin, chemin_image) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$nom_produit, $prix_initial, $prix_promo, $devise, $magasin, 'uploads/' . $magasin . '/' . $nom_fichier]);
    echo "Promotion ajoutée avec succès!";
} else {
    echo "Erreur lors de l'upload de l'image.";
}
?>

