<?php

$dossier_database= __DIR__. '/../database/';

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

$stmt = $pdo->query("SELECT * FROM promotions order by id desc");
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$promotions = [];
foreach($data as $promo){
    $magasin = $promo['magasin'];
    $nom_produit = $promo['nom_produit'];
    $promotions[$magasin][$nom_produit] = [
        'prix-initial' => $promo['prix_initial'],
        'prix-promo' => $promo['prix_promo'],
        'device' => $promo['devise'],
        'image' => $promo['chemin_image'],
    ];
}
