 <?php

$produit1 = ["nom" => "Livre", "prix" => 15, "quantite" => 2];
$produit2 = ["nom" => "Stylo", "prix" => 3, "quantite" => 5];
$produit3 = ["nom" => "Sac", "prix" => 25, "quantite" => 1];


$panier = [$produit1, $produit2, $produit3];


function calculerSousTotal($produit) {
    return $produit['prix'] * $produit['quantite'];
}


$totalPanier = 0;


echo "<table border='1'>";
echo "<tr><th>Nom</th><th>Prix</th><th>Quantité</th><th>Sous-total</th></tr>";

foreach ($panier as $produit) {
    
    $sousTotal = calculerSousTotal($produit);
    $totalPanier += $sousTotal;

    
    echo "<tr>";
    echo "<td>" . $produit['nom'] . "</td>";
    echo "<td>" . $produit['prix'] . "€</td>";
    echo "<td>" . $produit['quantite'] . "</td>";
    echo "<td>" . $sousTotal . "€</td>";
    echo "</tr>";
}

echo "</table>";


echo "<p>Total du panier : " . $totalPanier . "€</p>";


if ($totalPanier > 50) {
    $reduction = $totalPanier * 0.10;
    $totalApresReduction = $totalPanier - $reduction;
    echo "<p>Remise de 10% appliquée : -$reduction €</p>";
    echo "<p>Montant après réduction : " . $totalApresReduction . "€</p>";
} else {
    echo "<p>Aucune remise appliquée.</p>";
}
?>
